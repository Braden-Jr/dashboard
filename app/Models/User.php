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

    public static function create($name,$email,$password,$type,$status){
        $user = new user();
    
        $user->name=$name;
        $user->email=$email;    
        $user->password=Hash::make($password);
        $user->role_id=$type;
        $user->status=$status;   
        $user->save();
    
        return $user;
    }
    protected $fillable = [
        'name',
        'email',
        'role_id',
        'password',
        'status',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Roles::class);
    }
}
