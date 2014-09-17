<?php

use ZIMO\Forms\PostForm;

class PostsController extends \BaseController {

    /**
     * @var PostForm
     */
    private $postForm;

    function __construct(PostForm $postForm)
    {
        $this->postForm = $postForm;
    }


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

		$this->postForm->validate($input);

		$posts = new Post;
		$posts->title = Input::get('title');
        $posts->slug = Str::slug(Input::get('title'));
		$posts->body = strip_tags(Input::get('body'));
        $posts->user_id = Auth::user()->id;

        $fileName = $input['thumbnail']->getClientOriginalName();

		$image = Image::make($input['thumbnail']->getRealPath());

		

		File::exists(public_path() . '/images/') or File::makeDirectory(public_path() . '/images/');

		$image->save(public_path() . '/images/' . $fileName)
              ->resize(150, null, function ($constraint) {
                  $constraint->aspectRatio();
              })
			  ->save(public_path() . '/images/' . 'tn-' . $fileName);

		$posts->thumbnail = $fileName;

		$posts->save();


		return Redirect::to('admin/index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        return View::make('posts.show', compact('post'));
    }

	/**
	 * Show the form for editing the spcified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$post = Post::whereSlug($slug)->first();
        return View::make('posts.edit', compact('post'));
	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		$post = Post::whereSlug($slug)->first();
		$post->fill(Input::all());
		$post->save();

        Flash::success('Post have been updated');

		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		Post::whereSlug($slug)->delete();

		return Redirect::back();


	}



}