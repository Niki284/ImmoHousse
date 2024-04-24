@extends('layouts.base')

@section('content')

<ul class="list__render">
    @foreach ($nieuwTypes as $type)
        <li class="list__render__item">
            <form method="post" action="/dashboard/nieuwType/update/{{$type->id}}">
            @csrf
            @method('put')
            <input type="text" name="nieuwType" value="{{$type->name}}" >
            <button type="submit">Update</button>

            </form>
        <form method="post" action="/dashboard/nieuwType/{{$type->id}}">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
        </li>
    @endforeach
</ul>

<div class="link__add">
    <a href="/dashboard/nieuwType/create">Voeg heer jou type</a>
</div>

@endsection