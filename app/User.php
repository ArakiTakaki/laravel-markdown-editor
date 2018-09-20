<?php

 namespace App;

 use Laravel\Passport\HasApiTokens;
 use Illuminate\Notifications\Notifiable;
 use Illuminate\Foundation\Auth\User as Authenticatable;

 class User extends Authenticatable
 {
    use HasApiTokens, Notifiable;

     public function tasks(){
         return $this->hasMany('App\Models\Task');
     }

     public function articles(){
         return $this->hasMany('App\Models\Article');
     }
 }