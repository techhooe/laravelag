<?php

namespace App\Http\Controllers;

use App\Lub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class LubController extends Controller
{

  public function top() {
    if (Auth::check()) {
      return view('Lub/top');
    } else {
    return view('auth/login');
    }
}

  public function search() {
    if (Auth::check()) {
      return view('Lub/search');
    } else {
    return view('auth/login');
  }
}

  public function result(Request $request){
    if (Auth::check()) {
    $Lub=new Lub;
    $items=Lub::Result($request->name);
    return view('Lub.result',['items'=>$items]);
  } else {
    return view('auth/login');
  }
}
  public function catalog(){
    if(Auth::check()) {
    $Lub=new Lub;
    $items=Lub::paginate(10);
    return view('Lub.catalog',['items'=>$items]);
  } else {
    return view('auth/login');
  }
}
  public function addConfirm(Request $request){
    if(empty($request->packing)){
      $check=array("未設定です");
    }else{
      $check=$request->packing;
    }

    if(empty($request->image)){
      $path="public/img/dai.jpeg";
    }else{
      $path = $request->file('image')->store('public/img');
    }

    $param=[
      'name'=>$request->name,
      'explain'=>$request->explain,
      'same'=>$request->same,
      'packing'=>implode(',',$check),
      'image'=>$path,
    ];

    $this->validate($request,Lub::$rules);

    $Lub=new Lub;
    $Lub->fill($param)->save();
    $id=Lub::max('id');
    return view('Lub.addConfirm',['id'=>$id]);
  }

  public function updateConfirm(Request $request) {

    if(empty($request->packing)){
      $check=array("未設定です");
    }else{
      $check=$request->packing;
    }

    if(empty($request->image)) {
      $path="public/img/dai.jpeg";
    } else {
      $path = $request->file('image')->store('public/img');
    }

    $this->validate($request,Lub::$rules);

    $param= [
      'id'=>$request->id,
      'name'=>$request->name,
      'explain'=>$request->explain,
      'same'=>$request->same,
      'packing'=>implode(',',$check),
      'image'=>$path,
    ];

    $Lub=Lub::find($request->id);
    $Lub->fill($param)->save();
    $update=Lub::find($request->id);
    return view('Lub.updateConfirm',['update'=>$update]);
  }

  public function delete(Request $request)
  {
    Lub::find($request->id)->delete();
    return view('Lub.end');
  }

  public function index(Request $request){
    $items=Lub::all();
    return view('Lub.index',['items'=>$items]);
  }


  public function gazou(Request $request)
    {
            if ($request->isMethod('POST')) {

                $path = $request->file('image')->store('public/img');

                return redirect('/');
            }

        }
}
