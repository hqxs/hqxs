<?php
namespace App\Http\Controllers\Home;

use App\Model\Article;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //显示添加表单
    public function create()
    {

        $data = Category::all();//分组数据
        return view('home.publishadd')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //完成数据添加
    public function store(Request $request)
    {
        $input = Input::all();
        $input['art_uid'] = session('id');
        $input['art_time'] = date("y-m-d",time());
        $rule = [
            'art_title'=>'required',
            'art_content'=>'required',
        ];
        $mess = [
            'art_title.required'=>'亲，标题不能为空哦~',
            'art_content.required'=>'亲，内容不能为空哦~',
        ];
        $validate = Validator::make($input,$rule,$mess);
        if($validate->passes()){
            $re = Article::create($input);
            if($re){
                $uid = session('id');
                $id = Article::orderBy('art_id','desc')->where('art_uid',$uid)->get()->first()->toArray()['art_id'];
                return redirect('group/'.$id);
            }else{
                $error = '服务器忙请稍后...';
                return back()->with('sim',$error);
            }
        }else{
            return back()->withErrors($validate)  ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //话题展示
    public function show($uid)
    {
        $data = DB::table('users')->join('article','art_uid','id')->join('cate','cate_id','art_xz')->where('art_id',$uid)->get()->first();
        return view('home.publishshow',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //编辑
    public function edit($id)
    {
        $datas = DB::table('users')->join('article','art_uid','id')->join('cate','cate_id','art_xz')->where('art_id',$id)->get()->first();
        $data = Category::all();//分组数据
        return view('home.publishedit')->with('data',$data)->with('datas',$datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //编辑提交表单
    public function update($id)
    {
        //
        $input = Input::except('_token','_method');
        $re = Article::where('art_id',$id)->update($input);
        if($re){
            return redirect('group/'.$id);
        }else{
            $error = '无删改!';
            return back()->with('sim',$error);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aid = DB::table('article')->join('cate','cate_id','art_xz')->where('art_id',$id)->select('cate_id')->get()->first()->cate_id;
        $re = Article::where('art_id',$id)->delete();
        if($re){
        return $aid;
        }else{
            return 0;
        }
    }
}
