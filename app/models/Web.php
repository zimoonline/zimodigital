<?php

class Web extends Eloquent {


    protected $fillable = array('title', 'body', 'webthumbnail', 'title','thumbpos');


    public static $rules = array(
        'title'     => 'required',
        'body'      => 'required',
        'webthumbnail' => 'required',
        'link'      => 'required|url'
    );
}