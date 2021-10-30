<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterUsers extends Model
{
  protected $table = 'events_users';
  
   protected $fillable = [
 'fname','lname', 'email','phone'
   ];
//    protected $attributes = [
//     'item_status' => 'Available', 'pic_1' => '','pic_2' => '', 'view_count' => ''
//  ];


}