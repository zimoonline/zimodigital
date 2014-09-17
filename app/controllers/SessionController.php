<?php

use ZIMO\Forms\SessionLoginForm;
use ZIMO\Forms\UserRegistrationForm;

class SessionController extends \BaseController {
    /**
     * @var SessionLoginForm
     */
    private $sessionLoginForm;

    function __construct(SessionLoginForm $sessionLoginForm)
    {
        $this->sessionLoginForm = $sessionLoginForm;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = Post::orderBy('id', 'desc')->paginate(9);

        return View::make('admin.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('session.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

        $this->sessionLoginForm->validate($input);

		$auth = Auth::attempt(array(
			'email' 	=> $input['email'],
			'password'  => $input['password']
			));
        Flash::success('Hello!');
		if($auth) return Redirect::to('admin/index');



		return Redirect::intended();

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
	public function destroy()
	{
		Auth::logout();

        Flash::message('You have been logged out!');

		return Redirect::to('/');


	}

}