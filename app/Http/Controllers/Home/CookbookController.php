<?php

namespace App\Http\Controllers\Home;


use App\Cookbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CookbookController extends Controller
{
    //
    public function select($id=2)
    {	
    	//数据库所有数据
    	$cookbookalls = Cookbook::get()->toArray();
    	//数据库的一级类目
        $cookbooks = Cookbook::where('pid','0')->get()->toArray();
       //return view('home.cookbook')->with('cookbooks',$cookbooks);
       //调用无极分类
       $taglist = $this->tree($cookbookalls,$id); 
       //数据传送前台
       dump($cookbooks,$taglist);
       return view('home.cookbook',['taglist'=>$taglist,'cookbooks'=>$cookbooks]);

    }

    //无极分类
    static public $treeList = array();
    static public function tree(&$data,$pid = 0,$count = 1) {
        foreach ($data as $key => $value){
            if($value['pid']==$pid){
                $value['Count'] = $count;
                self::$treeList []=$value;
                unset($data[$key]);
                self::tree($data,$value['id'],$count+1);
            } 
        }
        return self::$treeList ;
    }

}
