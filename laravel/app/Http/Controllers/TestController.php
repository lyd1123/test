<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;

use Illuminate\Http\Request;
 
class TestController extends Controller {
	public function liuyan(){
			$arr = DB::table('liuyan')->orderby('l_id','desc')->paginate(5);

			return view('test/liuyan',['arr'=>$arr]);
	}

	public function liuyan_add(){
		$l_name=Input::get('l_name');
		if(!empty($l_name)){
		$re=DB::table('liuyan')->insert([
			['l_name' => ''.$l_name.''],
		]);
		if($re){
			$arr = DB::table('liuyan')->orderby('l_id','desc')->paginate(5);
			return view('test/liuyan',['arr'=>$arr]);
		}
		}
		$arr = DB::table('liuyan')->orderby('l_id','desc')->paginate(5);
			return view('test/liuyan',['arr'=>$arr]);
		
		
	}

	public function liuyan_del(){
		$id=Input::get('id');
		if(!empty($id)){
			$re=DB::table('liuyan')->where('l_id', '=', $id)->delete();
		if($re){
			$arr = DB::table('liuyan')->orderby('l_id','desc')->paginate(5);
			return view('test/liuyan',['arr'=>$arr]);
		}
		}
		$arr = DB::table('liuyan')->orderby('l_id','desc')->paginate(5);
			return view('test/liuyan',['arr'=>$arr]);
	}

	public function update(){
		$id=Input::get('id');
		$name=Input::get('name');
		if(!empty($id)){
			$re=DB::table('liuyan')
            ->where('l_id', $id)
            ->update(['l_name' => $name]);
			if($re){
				$arr = DB::table('liuyan')->orderby('l_id','desc')->paginate(10);
			return view('test/liuyan',['arr'=>$arr]);
			}
		}
		$arr = DB::table('liuyan')->orderby('l_id','desc')->paginate(10);
			return view('test/liuyan',['arr'=>$arr]);
	}
}