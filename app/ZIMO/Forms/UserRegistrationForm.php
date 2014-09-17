<?php namespace ZIMO\Forms;


use Laracasts\Validation\FormValidator;

class UserRegistrationForm extends FormValidator{

    protected $rules = [
        'email'     => 'required',
        'password'  => 'required',
        'ime'       => 'required',
        'prezime'   => 'required',
        'thumbnail-profile' => 'required'
    ];
}