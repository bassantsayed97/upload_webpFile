<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $image=Image::all();
//  dd($images);
        return view("all_images",["image"=>$image]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name"=>"required|min:3", 
            "image"=>"required|image|mimetypes:image/webp|max:2048|dimensions:max_width=500,max_height=500"
        
            ]);
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename =rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('imagestest/'), $filename);
                $filename='imagestest/'.$filename;
               
            }
         
         Image::create([
            "name"=>$request["name"],
            "image"=>$filename,
           
        ]);
        //
        // dd($images);
        return redirect(route("images.index")); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
        return view("show",["image"=>$image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
        return view("edit",["image"=>$image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
        $request->validate([
            "name"=>"required|min:3|string", 
            "image"=>"required|image|mimetypes:image/webp|max:2048|dimensions:max_width=500,max_height=500"
        
            ]);
            if($request->hasFile('image')) {
                $imagee = $request->file('image');
                $filename =rand() . '.' . $imagee->getClientOriginalExtension();
                $imagee->move(public_path('imagestest/'), $filename);
                $filename='imagestest/'.$filename;
               
            }
         
            $image->update([
            "name"=>$request["name"],
            "image"=>$filename,
           
        ]);
       
        return redirect(route("images.index")); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
        $image->delete();
        return redirect(route("images.index"));
    }
}
