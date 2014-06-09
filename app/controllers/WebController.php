<?php

class WebController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$webs = Web::orderBy('id', 'desc')->get();

        return View::make('webs.index', compact('webs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('webs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

        $validation = Validator::make($input, Web::$rules);

        if($validation->fails()) return Redirect::back()->withInput()->withErrors($validation);

        $web = new Web;
		$web->title = Input::get('title');
		$web->body = Input::get('body');
        $web->link = Input::get('link');
        $web->thumbpos = Input::get('thumbpos');

		$fileName = $input['webthumbnail']->getClientOriginalName();

		$image = Image::make($input['webthumbnail']->getRealPath());
        $image->resize(600, null, true);
		$image->save(public_path() . '/images/' . 'webs-' . $fileName);

		$web->webthumbnail = $fileName;

		$web->save();

		return Redirect::back()->withFlash_message('Done');
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
		$web = Web::find($id);

        return View::make('webs.edit', compact('web'));


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $web = Web::findOrFail($id);
        $web->thumbpos = Input::get('thumbpost') ? Input::get('thumbpost') : 0;
        $web->fill(Input::all());
        $web->save();

        return Redirect::route('web.edit', $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Web::findOrFail($id)->delete();

        return Redirect::route('web.index');

    }

}