@extends('layout.home_layout')
@section('shoImage')
<table class="table-fill mt-5">
<thead>
<tr>
<th class="text-left">name of image</th>
</tr>
<td class="text-left">
 {{$image["name"]}} 
</td> </tr>

<tr>
<th class="text-left">image</th>
</tr>
<tr>
<td class="text-left"><img src="{{ asset($image['image']) }}" class="rounded-circle" width="300" height="150" /></td> </tr>
<tr>
@endsection