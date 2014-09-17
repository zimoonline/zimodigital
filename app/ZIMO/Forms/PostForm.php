<?php namespace ZIMO\Forms;


use Laracasts\Validation\FormValidator;

class PostForm extends FormValidator{

    protected $rules = [
        'title' 	=> 'required',
        'body' 		=> 'required',
        'thumbnail' => 'required'
    ];

} 