<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/css/bootstrap-grid.css')}}">
 
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="{{asset('css/styleImage.css')}}">
  </head>
<table class="table-fill mt-5">
<thead>
<tr>

<th class="text-left">name</th>
<th class="text-left">image</th>

<th class="text-left">action</th>
</tr>
</thead>
<tbody class="table-hover">
@foreach($image as $image)
<tr>



<td class="text-left">{{$image["name"]}} </td>
<td class="text-left">
<img src="{{ asset($image['image']) }}" class="rounded-circle" width="60" height="50" /></td>
 </td>
<td class="text-left">
<a href="{{route('images.show',$image)}}" class="btn btn-warning">show </a>
<a href="{{route('images.edit',$image)}}" class="btn btn-success">edit</a>
   

                  <form action="{{route('images.destroy',$image)}}" method="Post" style="display:inline-block;">
                     
                      @csrf
                      @method("delete")
                      <input type="submit"  value="Delete"
                              class="btn btn-danger"
                              >
                  </form>
                             
</td>
</tr>

@endforeach
</tbody>
</table>
<center><a href="/images/create" class="btn btn-primary mt-5">add new image</a></center>

  </body>