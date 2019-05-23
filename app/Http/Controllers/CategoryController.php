<?php

namespace App\Http\Controllers;

use App\Category;
use App\MotherCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $mCategories=MotherCategory::all();
        return view('admin.add-category')->with('categories',$categories)->with('mCategories',$mCategories);
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
        $category=Category::insert([
            'mother_category_id'=>$request->mCId,
            'name'=>$request->category
        ]);
        if ($category) {
            $notification = array(
                'message' => 'Category Successfully Added!', 
                'alert-type' => 'success'
            );
            $categories=Category::all();
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        $mCategories=MotherCategory::all();
        return view('admin.edit-category')->with('category',$category)->with('mCategories',$mCategories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' =>$request->category
        ]);
        $notification = array(
                'message' => 'Category Successfully Updated!', 
                'alert-type' => 'success'
            );

            return redirect()->route('category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function delete($id)
    {
        $delete=Category::destroy($id);

        $notification = array(
                'message' => 'Delete Successful', 
                'alert-type' => 'success'
            );

        return redirect()->route('category.index')->with($notification);

    }
}
