<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
    'first_name','middle_name','last_name','address','email','nic_number','photo_id',   
    'password',
   ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function profile_photo($user_id)
    {
        $user = User::find($user_id);
        $userPhotoId = $user->photo_id;

        $profilePhoto = Photo::find($userPhotoId);

        return $profilePhoto->file;
    }
}
