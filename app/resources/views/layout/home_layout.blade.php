<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/css/bootstrap-grid.css')}}">
 
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/styleImage.css')}}">
  <link rel="stylesheet" href="{{asset('css/showStyle.css')}}">
  <link rel="stylesheet" href="{{asset('css/homeStyle.css')}}">
  </head>
  @yield('content')
  @yield('shoImage')
  @yield('edit')
  @yield('home')