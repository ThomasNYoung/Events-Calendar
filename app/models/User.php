<?php
use \Esensi\Model\Model;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Model implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hashable = array('password');
	public function events()
	{
		return $this->hasMany('CalendarEvent');
		
	}
	protected $hidden = array('password', 'remember_token');

	protected $rules = array(
		'email' => 'required|email|max:255|unique:users',
		'password' => 'required|confirmed'
		);

}
