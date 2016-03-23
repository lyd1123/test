<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class CollectionController extends Controller {
	public function index(){
		return view('collection/index');
	}

	//收藏添加
	public function c_add(){
		$vid=$_GET['vid'];
		echo $vid;
	}
}