<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'ecom_users';

    // public static function all(){
    //     return self:: $table;
    // }
    // public static function find($id){
    //     return collect(self::$table)->firstwhere('id',$id);
    // }
}
