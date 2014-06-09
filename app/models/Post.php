<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends Eloquent implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

	protected $fillable = array('title', 'body', 'thumbnail');

	public static $rules = array(
		'title' 	=> 'required',
		'body' 		=> 'required',
		'thumbnail' => 'required'
		
	);





}