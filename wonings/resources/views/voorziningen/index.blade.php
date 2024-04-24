@extends('layouts.base')

@section('content')

<ul class="list__render">
    @foreach ($voorziningen as $voorzining)
        <li class="list__render__item">
            <form method="post" action="/voorziningen/update/{{$voorzining->id}}">
            @csrf
            @method('put')
            <input type="text" name="voorzining" value="{{$voorzining->voorzining}}">
            </form>
        <form method="post" action="/voorziningen/{{$voorzining->id}}">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
        </li>
    @endforeach
</ul>

<div class="link__add">
    <a href="/voorziningen/create">Add Voorziningen</a>
</div>

@endsection