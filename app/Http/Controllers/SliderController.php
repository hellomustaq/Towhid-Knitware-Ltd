<?php

namespace App\Http\Controllers;

use File;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::orderBy('created_at','DESC')->get();
        return view('admin.showAll-slider',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-slider');
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
            $imageName = time().'-'.str_random(5). $key . '.' . $value->getClientOriginalExtension();
            $value->move('images/slider/', $imageName);
            Slider::create([
                'name' => $imageName,
                'type' => $value->getClientOriginalExtension(),
                // "created_at" =>  \Carbon\Carbon::now(), // \Datetime()
                // "updated_at" => \Carbon\Carbon::now(),  // \Datetime()
            ]);
        }

            $notification = array(
                'message' => 'Uploaded! Your Banner uploaded successfully!!', 
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }

        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }

    public function delete($id)
    {
        $imageName=Slider::find($id);

       
        $image_path = public_path('images/slider/'.$imageName->name);
        if(File::exists("images/slider/".$imageName->name)) {
            File::delete("images/slider/".$imageName->name);
        }

        $delete=Slider::destroy($id);

        $notification = array(
                'message' => 'Delete Successful', 
                'alert-type' => 'success'
            );

        return redirect()->route('slider.index')->with($notification);

    }
}
