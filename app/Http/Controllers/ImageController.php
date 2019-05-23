<?php

namespace App\Http\Controllers;

use File;
use App\Image;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.show-image',compact('categories'));
    }

    public function showSpecific(){
        $category=Category::find(Input::get('catId'));
        $images=Image::where('category_id',Input::get('catId'))->get();
        return view('admin.showAll-image',compact('images','category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.add-image',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=request()->validate([

            'uploadFile' => 'required',

        ]);
        if (!$validate) {
            $notification = array(
                'message' => 'Ops! Validation Error!!', 
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }

        if ($request->file('uploadFile')) {
            foreach ($request->file('uploadFile') as $key => $value) {
                $imageName = time().'-'.str_random(10). $key . '.' . $value->getClientOriginalExtension();
                $value->move('images/products/', $imageName);
                Image::create([
                    'name' => $imageName,
                    'category_id' => $request->catId,
                    'type' => $value->getClientOriginalExtension(),
                ]);
            }

            $notification = array(
                'message' => 'Uploaded! Your image uploaded successfully!!', 
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }

        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }

    public function delete($id)
    {
        $imageName=Image::find($id);

        $image_path = public_path('public/images/products/'.$imageName->name);
        if(File::exists("images/products/".$imageName->name)) {
            File::delete("images/products/".$imageName->name);
        }
        
        $delete=Image::destroy($id);
        $notification = array(
                'message' => 'Delete Successful', 
                'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }
}
