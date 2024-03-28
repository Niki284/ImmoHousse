@extends('layouts.base')

@section('content')

<ul class="list__render">
    @foreach ($woningType as $type)
        <li class="list__render__item">
            <form method="post" action="/woningType/update/{{$type->id}}">
            @csrf
            @method('put')
            <input type="text" name="woningType" value="{{$type->woningType}}">
            </form>
        <form method="post" action="/woningType/{{$type->id}}">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
        </li>
    @endforeach
</ul>

<div class="link__add">
    <a href="/woningType/create">Voeg heer jou type</a>
</div>

@endsection