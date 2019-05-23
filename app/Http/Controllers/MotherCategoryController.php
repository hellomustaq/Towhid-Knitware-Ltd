<?php

namespace App\Http\Controllers;

use App\MotherCategory;
use Illuminate\Http\Request;
use Session;

class MotherCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=MotherCategory::all();
        return view('admin.add-mother-category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category=MotherCategory::create([
            'name'=>$request->name
        ]);
        if ($category) {
            $notification = array(
                'message' => 'Mother Category Successfully Added!', 
                'alert-type' => 'success',
            );
            $categories=MotherCategory::all();
            // Session::flash('success','Succesful');
            return redirect()->back()->with($notification)->with('categories',$categories);
        }else{
            $notification = array(
                'message' => 'Ops! Someting error. try again later!!', 
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MotherCategory  $motherCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MotherCategory $motherCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MotherCategory  $motherCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=MotherCategory::find($id);
        return view('admin.edit-mother-category')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MotherCategory  $motherCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MotherCategory $motherCategory)
    {
        $motherCategory->update([
            'name' =>$request->name
        ]);
        $notification = array(
                'message' => 'Mother Category Successfully Updated!', 
                'alert-type' => 'success'
            );

            return redirect()->route('mother-category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MotherCategory  $motherCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MotherCategory $motherCategory)
    {
        //
    }

    public function delete($id)
    {
        $delete=MotherCategory::destroy($id);

        $notification = array(
                'message' => 'Delete Successful', 
                'alert-type' => 'success'
            );

        return redirect()->route('mother-category.index')->with($notification);

    }
}
