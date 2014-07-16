<?php

class AuthController extends \BaseController {
	
	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//
		return View::make('auth.login');
		
	}
	
	public function doLogin()
	{

		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);
		
		if(Auth::attempt($credentials))
		{
			return 'Login OK';
		}
		else
		{
			return Redirect::back()->withInput();
		}
	}
	
	public function getAdmin()
	{
		//
		return View::make('admin.dashboard');
		
	}
	
	public function doLogout()
	{
		Auth::logout();
		return 'Logged out';
	}
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
