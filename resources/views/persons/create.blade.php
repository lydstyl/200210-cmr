@extends('layouts.layout')

@section('content')

<div class="wrapper create-person">
    <h1>Create a New Person</h1>
    <form action="/persons" method="POST">
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">

        <label for="type">Type:</label>
        <select name="type" id="type">
            <option value="freelance">Freelance</option>
            <option value="cid">CDI</option>
        </select>

        <label for="entreprise">Entreprise:</label>
        <select name="entreprise" id="entreprise">
            <option value="esn">ESN</option>
            <option value="agenceweb">Agence Web</option>
            <option value="startup">Start Up</option>
        </select>

        <input type="submit" value="Add person">
    </form>
</div>

@endsection