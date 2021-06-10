<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class staff extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'staff';
    protected $table = 'staff';
    protected $fillable = [
        'email',
        'stfName',
        'password',
        'stfConactNo',
        'stfGender',
        'loginName',
        'jobtitles_id'
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
       
    ];

    /**
    
     * The attributes that should be cast to native types.
     *
     * @var array
     */

     public function jobtitles()
     {
        return $this->hasOne(jobtitles::class);      
     }
    
}
