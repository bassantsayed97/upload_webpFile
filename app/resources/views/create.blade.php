
@extends('layout.home_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

  <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="name" >Add New image</h2>
                    <form method="POST" action="{{route('images.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="input-group">
                       
                            <input class="input--style-3" type="text" placeholder="name of image" name="name"
                            value="{{old('name')}}"     >
                            <label class="text-danger"> {{$errors->first("name")}}</label>
                        </div>
                       
                       
                        <div class="input-group">
                            
                            <input class="input--style-3" type="file" placeholder="image" name="image"
                          value="{{old('image')}}"  >
                            <label class="text-danger"> {{$errors->first("image")}}</label>
                        </div>

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--sub" type="submit" >Submit</button>
                           

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection