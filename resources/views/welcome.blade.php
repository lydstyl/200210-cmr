@extends('layouts.layout')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Welcome to CMR 
    </div>
    <p class="msg">
      {{ session('msg') }}
    </p>
    <ul>
      <li>
        <a href="/persons">persons</a>  
        <a href="/persons/create">/persons/create</a>  
        <a href="/persons/1">/persons/1</a>  
        <a href="/test/1">/test/1</a>  
      </li>
    </ul>
</div>
@endsection