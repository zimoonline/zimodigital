<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('contact.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */


	public function create()
	{
	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = array(
			'subject' => 'required',
			'email'   => 'required',
			'poruka'  => 'required'
			);

		$validation = Validator::make(Input::all(), $rules);

		if($validation->fails()) return Redirect::back()->withInput()->withErrors($validation);

		$subject = Input::get('subject');
		$email 	 = Input::get('email');
		$phone   = Input::get('phone');
		$poruka    = Input::get('poruka');

		$data = array(
			'subject' => $subject,
			'email'   => $email,
			'phone'	  => $phone,
			'poruka' => $poruka
			
		);

		Mail::send('contact.sent', $data, function($message) use ($email, $subject)
		{
			$message->from($email)->to('sasa@zimo.co')->subject($subject);
		});

		return Redirect::back()->with('flash_message', 'Your message has been sent. We will reply as soon as possible');

		
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

	public function temp()
	{
		return View::make('contact.temp');
	}

}