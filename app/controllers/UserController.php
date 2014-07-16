<?php

class UserController extends \BaseController {
	
	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the users.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//Get the list of all users from Model
		$users = User::all();
		
		return View::make('users.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new user.
	 *
	 * @return Redirect::to('users');
	 */
	public function getCreate()
	{
		//
		return View::make('users.create');
	}
	
	/**
	 * Store data posted in getCreate
	 * 
	 * @return Response
	 */
	public function postCreate()
	{
		$user = new User;
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		
		$user->save();
		
		return Redirect::to('users');
	}
	/**
	 * Delete users
	 * 
	 * @return Response
	 */
	public function getDelete($user_id)
	{
		$user = User::find($user_id);
		
		if(is_null($user))
		{
			return Redirect::to('users');
		}
		
		$user->delete();
		return Redirect::to('users');	
	}
	
	/**
	 * Show the form for update a existing user.
	 *
	 * @return Response
	 */
	public function getUpdate($user_id)
	{
		$user = User::find($user_id);
		
		if(is_null($user))
		{
			return Redirect::to('users');
		}
		
		return View::make('users.update')->with('user', $user);	
	}

	/**
	 * Update users
	 * 
	 * @return Response
	 */
	public function postUpdate($user_id)
	{
		$user = User::find($user_id);
		
		if(is_null($user))
		{
			return Redirect::to('users');
		}
		
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		
		if(Input::has('password'))
		{
			$user->password = Input::get('password');
		}
		
		$user->save();

		return Redirect::to('users');	
	}

}
