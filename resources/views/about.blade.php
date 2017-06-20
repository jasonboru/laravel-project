@extends('layout')

@section('title')
<h4>{{$site_title}}</h4>
@stop

@section('content')
<div class="content">
  <div class="title m-b-md">
    Laravel is cool
  </div>
</div>
@stop

@section('contact-info')
<div class="contact-info">
  @foreach ($first_names as $name)
    <p> First Name: {{$name}}</p>
  @endforeach
  <br>
  @foreach ($emails as $email)
    <p> Email: {{$email}}</p>
  @endforeach

</div>
@stop
