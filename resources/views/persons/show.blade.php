@extends('layouts.layout')

@section('content')
<div class="wrapper person-detail">
    <h1>Order for {{ $person->name }}</h1>

    <p class="type">{{ $person->type }}</p>

    <p class="base">{{ $person->entreprise }}</p>

    <ul class="advantages">
        @foreach ($person->advantages as $advantage)
            <li>
                {{ $advantage }}
            </li>
        @endforeach
    </ul>

    <p class="more-infos">Id: {{ $person->id }} - Created: {{ $person->created_at }} - Updated: {{ $person->updated_at }}</p>

    <form action="/persons/{{ $person->id }}" method='POST'>
        @csrf
        
        @method('DELETE') <!-- method POST because some browsers doesn't understand DELETE but we change it to DELETE -->
        
        <button>Delete</button>
    </form>
</div>
<a href="/persons" class="back">Back to all persons</a>
@endsection