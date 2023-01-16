<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\user as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Hash;
class user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public static function create($name,$email,$password,$type){
        $user = new user();
    
        $user->name=$name;
        $user->email=$email;    
        $user->password=Hash::make($password);
        $user->type=$type;
        $user->save();
    
        return $user;
    }
}
