<?php

class AdminController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$categories = Category::all();
    	$products = Product::all();
        $user = User::all();
        $shops = Shop::all();
        return View::make('admin.index', compact('categories'), compact('products'))->with('user', $user)->with('shops', $shops);
    }

}
