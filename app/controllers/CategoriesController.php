<?php

class CategoriesController extends BaseController {

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Category::validate($input);

        if ($validation->passes()) {
            Category::create($input);
            return Redirect::route('admin.index')->with('message', '
                <strong>CONGRATULATION!</strong> New category has been added successfully. 
                <a href="#" data-target-page="page-view-category" class="btn btn-success">Check it!</a>');
        }
        return Redirect::route('admin.index')->withInput()->withErrors($validation)->with('message', '
            <a href="#" data-target-page="page-create-category" class="btn btn-success    ">Edit here!</a>');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return View::make('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = Input::all();
        $validation = Category::validate($input);

        if ($validation->passes()) {
            $category = Category::find($id);
            $category->name         = Input::get('name');
            $category->description  = Input::get('description');
            $category->save();
         
            return Redirect::route('admin.index')->with('message', '
                <strong>CONGRATULATION!</strong> New category has been edited successfully. 
                <a href="#" data-target-page="page-view-category" class="btn btn-success">Check it!</a>');
        }
        return Redirect::back()->withInput()->withErrors($validation)->with('message', '
            <a href="#" data-target-page="page-create-category" class="btn btn-success    ">Edit here!</a>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return Redirect::route('admin.index')->with('message', '<strong>CONGRATULATION! 
            </strong> Category has been deleted successfully. 
            <a href="#" data-target-page="page-view-category" class="btn btn-success">Delete another?</a>');
    }

}