<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('id', 'desc')->paginate(9);

		return View::make('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$validation = Validator::make($input, Post::$rules);


		if($validation->fails()) return Redirect::back()->withInput()->withErrors($validation);
		

		$posts = new Post;
		$posts->title = Input::get('title');
        $posts->slug = Str::slug(Input::get('title'));
		$posts->body = Input::get('body');

		$fileName = $input['thumbnail']->getClientOriginalName();

		$image = Image::make($input['thumbnail']->getRealPath());

		

		File::exists(public_path() . '/images/') or File::makeDirectory(public_path() . '/images/');

		$image->save(public_path() . '/images/' . $fileName)
			  ->save(public_path() . '/images/' . 'tn-' . $fileName);

		$posts->thumbnail = $fileName;

		$posts->save();


		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
        $blogpost = Post::whereSlug($slug)->first();

        return View::make('posts.show', compact('post', 'blogpost'));
	}

	/**
	 * Show the form for editing the spcified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
        return View::make('posts.edit', compact('post'));
	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		$post->fill(Input::all());
		$post->save();

		return Redirect::route('posts.edit', $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::findOrFail($id)->delete();

		return Redirect::route('posts.index');


	}

}