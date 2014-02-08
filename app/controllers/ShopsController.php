<?php

class ShopsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $shops = Shop::all();
        return View::make('admin.shops.index', compact('shops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return View::make('admin.shops.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $shop = Shop::find($id);
        $shop->name    = Input::get('name');
        $shop->slogan  = Input::get('slogan');
        $shop->address = Input::get('address');
        $shop->phone   = Input::get('phone');
        $shop->email   = Input::get('email');
        $shop->created_at = new DateTime;
        $shop->updated_at = new DateTime;
        $shop->save();
     
        return Redirect::route('admin.index')->with('message', '<strong>CONGRATULATION!</strong> Store Information has been changed successfully. 
                <a href="#" data-target-page="page-store" class="btn btn-success">Check it!</a>');
    }

}