<?php namespace ZIMO\Forms;


use Laracasts\Validation\FormValidator;

class SessionLoginForm extends FormValidator {

    protected $rules = [
        'email'     => 'required',
        'password'  => 'required'
    ];
} 