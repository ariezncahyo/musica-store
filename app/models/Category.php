<?php

class Category extends Eloquent {
	
    protected $guarded = array();

    protected $fillable = ['name', 'description'];

    public static $rules = [
    	'name'			=> 'required|min:2',
        'description'	=> 'required|min:5',
    ];

    public static function validate($data) {
		return Validator::make($data, static::$rules);
	}

    public static function dropdown() {
        $categories = Category::all();
        $options[''] = '-- Choose One --';
        foreach($categories as $category) { $options[$category->id] = $category->name; }
        return $options;
    }

    public function products() {
        return $this->hasMany('Product');
    }

} 