<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    // public static function all(){
    //     return self:: $table;
    // }
    // public static function find($id){
    //     return collect(self::$table)->firstwhere('id',$id);
    // }
}
