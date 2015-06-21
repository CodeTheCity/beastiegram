<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	
	protected $fillable = array('email', 'username', 'password' ,'password_temp', 'code', 'active', 'team_id');

	use UserTrait, RemindableTrait;
	protected $table = 'users';
	protected $hidden = array('password', 'remember_token');
	
	protected $primaryKey = 'id';
	
	 public function getAuthIdentifier()
    {
        return $this->getKey();
    }
	public function getAuthPassword()
	{
		return $this->password;
	}
	public function teamDetails()
	{
		return Teams::where('id', $this->team_id)->first();
	}

}
