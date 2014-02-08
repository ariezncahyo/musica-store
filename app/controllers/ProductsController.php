<?php

class ProductsController extends BaseController {
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Product::validate($input);
        if ($validation->passes()) {
            $file = Input::file('image_path');
            $destinationPath = 'public/img/';
            $filename = $file->getClientOriginalName();
            Product::create([
                'name'       => Input::get('name'),
                'category_id'=> Input::get('category_id'),
                'description'=> Input::get('description'),
                'brand'      => Input::get('brand'),
                'price'      => Input::get('price'),
                'qty'        => Input::get('qty'),
                'image_path' => Input::get('image_path', $filename),
            ]);
            Input::file('image_path')->move($destinationPath, $filename);
            return Redirect::route('admin.index')->with('message', '
                <strong>CONGRATULATION!</strong> New product has been added successfully. 
                <a href="#" data-target-page="page-view-product" class="btn btn-success">Check it!</a>');
        }
        return Redirect::route('admin.index')->withInput()->withErrors($validation)->with('message', '
            <a href="#" data-target-page="page-create-product" class="btn btn-success">Edit here!</a>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
         return View::make('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return View::make('admin.products.edit', compact('product'));
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
        $validation = Product::validate($input);
        if ($validation->passes()) {

            $file = Input::file('image_path');
            $destinationPath = 'public/img/';
            $filename = $file->getClientOriginalName();

            $product = Product::find($id);
            $product->name       = Input::get('name');
            $product->category_id= Input::get('category_id');
            $product->description= Input::get('description');
            $product->brand      = Input::get('brand');
            $product->price      = Input::get('price');
            $product->qty        = Input::get('qty');
            $product->image_path = Input::get('image_path', $filename);
            $product->save();

            Input::file('image_path')->move($destinationPath, $filename);
            return Redirect::route('admin.index')->with('message', '
                <strong>CONGRATULATION!</strong> New product has been edited successfully. 
                <a href="#" data-target-page="page-view-product" class="btn btn-success">Check it!</a>');
        }
        return Redirect::back()->withInput()->withErrors($validation)->with('message', '
            <a href="#" data-target-page="page-create-product" class="btn btn-success">Edit here!</a>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return Redirect::route('admin.index')->with('message', '<strong>CONGRATULATION! 
            </strong> Product has been deleted successfully. 
            <a href="#" data-target-page="page-view-product" class="btn btn-success">Delete another?</a>');
    }

}