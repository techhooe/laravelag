<?php

namespace App\Http\Controllers;

use App\Lub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LubController extends Controller
{
    public function find(Request $request)
    {
     $name=$request->name;
     $items=DB::table('Lubs')->where('name','like','%'.$name.'%')->get();
     return view('Lub.result',['items'=>$items]);
    }
    
    public function product(Request $request)
    {
        $data=$request->name;
        return view('Lub.product',['data'=>$data]);
    }
    
    
    
    public function add(Request $request)
    {
        return view('Lub.add');
    }
    
    public function create(Request $request)
    {
        $this->validate($request,Lub::$rules);
        $lub = new Lub;
        $form = $request->all();
        unset($form['_token']);
        $lub->fill($form)->save();
        return redirect('/hello');
    }
    
    public function edit(Request $request)
    {
        $param =['name' => $request->predit];
        $items=DB::select('select * from Lubs where name=:name',$param);
        return view('Lub.edit',['item'=>$items[0]]);
        
    }
    
    public function update(Request $request)
    {
        $param = [
        'id' => $request->id,
        'name' => $request->name,
        'explain' => $request->explain,
        'same' => $request->same,
        ];
        DB::update('update Lubs set name=:name,explain=:explain,same=:same where id=:id',$param);
        return redirect('/update');
    }
    
    public function delete(Request $request)
    {
        $param=['name'=>$request->name];
        $item=DB::delete('delete from Lubs where name = :name',$param);
        return redirect('/end');
    }
    
    
    
}
