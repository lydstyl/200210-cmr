@extends('layouts.layout')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Welcome to CMR 
    </div>
    <p class="msg">
      {{ session('msg') }}
    </p>
</div>
@endsection