<?php

class Product extends Eloquent {

    protected $guarded = array();

    protected $fillable = ['name', 'category_id', 'description', 'brand', 'price', 'qty', 'image_path'];

    public static $rules = [
    	'category_id'	=> 'required',
    	'name'			=> 'required|min:5|max:255',
		'brand'			=> 'required|max:255',
		'price'			=> 'required|numeric',
		'qty'			=> 'required|numeric',
	    'image_path' 	=> 'required|image|mimes:jpeg,bmp,png|max:300'
    ];

    public static function validate($data) {
		return Validator::make($data, static::$rules);
	}

	public function category() {
		return $this->belongsTo('Category', 'id');
	}
}