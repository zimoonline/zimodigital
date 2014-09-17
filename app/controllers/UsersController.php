<?php

use ZIMO\Forms\UserRegistrationForm;

class UsersController extends \BaseController {
    /**
     * @var UserRegistrationForm
     */
    protected $userRegistrationForm;

    function __construct(UserRegistrationForm $userRegistrationForm)
    {
        $this->userRegistrationForm = $userRegistrationForm;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

        return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();

        $this->userRegistrationForm->validate($input);

        $user = new User;
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->ime = $input['ime'];
        $user->prezime = $input['prezime'];


        $fileName = $input['thumbnail-profile']->getClientOriginalName();

        $image = Image::make($input['thumbnail-profile']->getRealPath());
        $image->save(public_path() . '/images/' . $fileName)
            ->resize(25, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path() . '/images/' . 'tn-' . $fileName);

        $user->thumbnail = $fileName;

        $user->save();


        return Redirect::back();


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $ime
	 * @return Response
	 */
	public function show($ime)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $ime
	 * @return Response
	 */
	public function edit($ime)
	{
        $user = User::whereIme($ime)->first();
//        dd($user->toArray());

        return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $ime
	 * @return Response
	 */
	public function update($ime)
	{
        dd('sasa');
        $user = User::whereIme($ime)->first();
        $user->fill(Input::all());
        $user->save();

        return Redirect::back();
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