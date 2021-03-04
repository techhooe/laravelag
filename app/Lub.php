<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lub extends Model
{
    protected $guarded =array('id');
    protected $fillable =array('name','explain','same','packing','image');

    public function getData()
    {
        return $this->name;
    }

    public function scopeNameEqual($query,$str)
    {
        return $query->where('name','like','%'.$str.'%');
    }

    public function scopeResult($query,$str)
    {
        return $query->where('name','like','%'.$str.'%')->Paginate(10);
    }

    public static $rules=[
      'name'=>'required',
      'explain'=>'max:300',
      'image'=>'file|image|mimes:jpg,png',
    ];
}
