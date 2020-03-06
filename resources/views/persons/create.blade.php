@extends('layouts.app')

@section('content')

<div class="wrapper create-person">
    <h1>Create a New Person</h1>
    <!-- <form action="/persons" method="POST"> -->
    <form action="{{route('persons.store')}}" method="POST">
        <!-- Protection for Cross-site request forgery -->
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">

        <label for="type">Type:</label>
        <select name="type" id="type">
            <option value="freelance">Freelance</option>
            <option value="cdi">CDI</option>
        </select>

        <label for="entreprise">Entreprise:</label>
        <select name="entreprise" id="entreprise">
            <option value="esn">ESN</option>
            <option value="agenceweb">Agence Web</option>
            <option value="startup">Start Up</option>
        </select>

        <fieldset>
            <label>Avantages</label>

            <input type="checkbox" name="advantages[]" value="partial time">
            <span>Partial time</span>

            <input type="checkbox" name="advantages[]" value="flexible hours">
            <span>Flexible hours</span>

            <input type="checkbox" name="advantages[]" value="remote">
            <span>Remote</span>

            <input type="checkbox" name="advantages[]" value="parking">
            <span>Parking</span>
            
            <input type="checkbox" name="advantages[]" value="transport">
            <span>Transport</span>
        </fieldset>

        <input type="submit" value="Add person">
    </form>
</div>

@endsection