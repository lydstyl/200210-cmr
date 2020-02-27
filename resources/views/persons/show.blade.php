@extends('layouts.layout')

@section('content')
<div class="wrapper person-detail">
    <h1>Order for {{ $person->name }}</h1>
    <p class="type">{{ $person->type }}</p>
    <p class="base">{{ $person->entreprise }}</p>
    <p class="advantages">
        <ul>
            @foreach ($person->advantages as $advantage)
                <li>
                    {{ $advantage }}
                </li>
            @endforeach
        </ul>
    </p>
</div>
<a href="/persons" class="back">Back to all persons</a>
@endsection