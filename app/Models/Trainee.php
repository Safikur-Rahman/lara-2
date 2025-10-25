<?php
namespace App\Models;
class Trainee{
    
    public static $trainees = 
        [
      
            [
            'id' => 1,
            'name' => 'Mina',
            'email' => 'mina@gmail.com', 
            'country' => 'BD',
            'is_active' => true
            ] ,
            [
            'id' => 2, 
            'name' => 'Rina',
            'email' => 'rina@gmail.com', 
            'country' => 'IN',
            'is_active' => false
            ] ,
            [
            'id' => 1,
            'name' => 'Raju',
            'email' => 'raju@gmail.com', 
            'country' => 'US',
            'is_active' => true
            ] 
        ];
        
        public static function all(){
            // return $this -> $trainees;
            return self:: $trainees;
        }
        public static function find($id){
            return collect(self:: $trainees)->firstwhere('id', $id);
        }
    };
    


?>