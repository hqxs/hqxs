<?php

namespace App\Http\Controllers\Home;

use App\Model\Category;
use App\Model\User;
use Curl\Curl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class PubController extends Controller
{
    //天气
    public function weather()
    {
        $curl = new Curl();
        $res = $curl->get('http://www.weather.com.cn/data/cityinfo/101010100.html');
        $arr = $res->response;
        return $arr;
    }

    //广场首页
    public function index()
    {

        $data = Category::all();
        return view('home.publishindex')->with('data',$data);
    }
    //路由分组设置
    public function cate()
    {
        $data = $_GET['data'];
        $data = Category::all()->where('cate_pid',$data);
        return $data;
    }
    //二级目录列表
    public function list($id)
    {
        $cate = DB::table('cate')->where('cate_id',$id)->get()->first();
        $datas = Category::all();
        $data = DB::table('cate')->join('article','art_xz','cate_id')->join('users','id','art_uid')->where('cate_id',$id)->where('art_up',1)->orderBy('art_id','desc')->paginate(5);
        return view('home.publishlist')->with("data",$data)->with('cate',$cate)->with('datas',$datas);
    }

    //用户个人话题页面
    public function aloShow($aid)
    {

        $data = DB::table('users')->join('article','art_uid','id')->join('cate','cate_id','art_xz')->where('art_id',$aid)->get()->first();
        $comm = DB::table('comment')->join('users','id','com_uid')->where('com_aid',$aid)->get();
        $comms = $this->sorts($comm);
        $datas = DB::table('coll')->where('coll_aid',$aid)->get();
        $foll = DB::table('foll')->where('foll_uuid',$data->id)->get();
        return view('home.pubshowalone',compact('data'))->with('comm',$comms)->with('coll',$datas)->with('foll',$foll);
    }

    //添加评论
    public function  comment()
    {
        $con = $_POST['com_content'];
        $uid = session('id');
        $aid = $_POST['com_aid'];
        $input = Input::except('_token');
        $input['com_time'] = time();
        $input['com_uid'] = $uid;
        $re = DB::table('comment')->insert($input);
        return back();
    }

    //查询二级评价
    public function comment1()
    {
        $uid = session('id');
        $com_uname = $_POST['com_uname'];
        $com_name = DB::table('users')->where('id',$uid)->value('name');
        $aid = $_POST['com_aid'];
        $input = Input::except('_token');
        $input['com_time'] = time();
        $input['com_uid'] = $uid;
        $input['com_name'] = $com_name;
        $input['com_uname'] = $com_uname;
        $pid = $_POST['com_pid'];
        $re = DB::table('comment')->insert($input);
        $comm = DB::table('comment')->join('users','id','com_uid')->where('com_aid',$aid)->get();
        $datas = $this->sorts($comm);
        $data = json_encode($datas);
        return $data;
    }

    //收藏
    public function Coll()
    {
        $aid = $_POST['aid'];
        $uid = $_POST['uid'];
        $re = DB::table('coll')->insert(
          [
              'coll_uid'=> $uid,
              'coll_aid'=> $aid
          ]
        );
        if($re){
            return 1;
        }else{
            return 2;
        }
    }
    //取消收藏
    public function collDel()
    {
        $aid = $_GET['iid'];
        $uid = $_GET['uid'];
        $re = DB::table('coll')->where('coll_uid',$uid)->where('coll_aid',$aid)->delete();
        if($re){
            return 1;
        }else{
            return 2;
        }
    }

    //关注
    public function Foll()
    {
        $uuid = $_POST['uuid'];
        $uid = $_POST['uid'];
        $re = DB::table('foll')->insert(
            [
                'foll_uid'=> $uid,
                'foll_uuid'=> $uuid
            ]
        );
        if($re){
            return 1;
        }else{
            return 2;
        }
    }

    //取消关注
    public function follDel()
    {
        $uuid = $_GET['uuid'];
        $uid = $_GET['uid'];
        $re = DB::table('foll')->where('foll_uid',$uid)->where('foll_uuid',$uuid)->delete();
        if($re){
            return 1;
        }else{
            return 2;
        }
    }


    //话题个人中心页面
    public  function userGroup($id)
    {
        $data = DB::table('coll')->where('coll_uid',$id)->get();
        $name = DB::table('users')->where('id',$id)->get()->first();
        $datas = '';
        foreach ($data as $v)
        {
            //收藏话题
            $datas[] = DB::table('article')->join('cate','art_xz','cate_id')->where('art_id',$v->coll_aid)->get()->first();
        }
        $artup = DB::table('article')->where('art_uid',$id)->where('art_up',1)->get();
        $artdown = DB::table('article')->where('art_uid',$id)->where('art_up',0)->get();
        $fri = DB::table('foll')->where('foll_uid',$id)->count();
        return view('home.usergroup',compact('name'))->with('datas',$datas)
                                      ->with('artup',$artup)
                                      ->with('artdown',$artdown)
                                      ->with('fri',$fri);
    }

    //个人关注页面
    public function friend($id)
    {
        $name = DB::table('users')->where('id',$id)->get()->first();
        $fri = DB::table('foll')->where('foll_uid',$id);
        $num = $fri->get();
        foreach ($num as $v)
        {
            $users[] = DB::table('users')->where('id',$v->foll_uuid)->get()->first();
        }
        return view('home.pubemail',compact('name'))->with('fri',$fri->count())->with('users',$users);

    }

    //私信存储
    public function email()
    {
        return 11;
        $id = $_POST['id'];
        $text = $_POST['text'];
        dd($text);

    }

    //个人中心
    public function user($id)
    {
        $data = DB::table('users')->where('id',$id)->get()->first();
        return view('home.usersess')->with('data',$data);
    }

    // 无级分类
    public function sorts($a,$ppid = 0, $nums = 1)
    {

        static $arr = array();
        $num = $nums;
        foreach($a as $k=>$v){
            $v = (array)$v;
            if($v['com_pid'] == $ppid){
                //将数据存储在此数组下 并在次调用函数
                $v['com_nums'] = $nums;
                $arr[] = $v;
                $this->sorts($a,$v['com_id'],$nums+1);
            }
        }
        return $arr;
    }

    //手机号数据库验证是否存在
    public function phone()
    {
        $num = $_GET['num'];
        $re = User::where('phone',$num)->get()->first();
        if(!empty($re)){
            return 1;
        }else{
            return 2;
        }
    }
}
