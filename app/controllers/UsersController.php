<?php

class UsersController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = User::all();
        return View::make('admin.users.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::find($id);
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
     
        return Redirect::route('admin.index')->with('message', '<strong>CONGRATULATION!</strong> Your password has been changed successfully.');
    }

}