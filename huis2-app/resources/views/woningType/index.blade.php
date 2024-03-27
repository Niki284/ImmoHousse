@extends('layouts.base')

@section('content')

<ul>
    @foreach ($woningType as $type)
        <li>{{ $type->woningType }}</li>
    @endforeach
</ul>

<div class="link__add">
    <a href="/woningType/create">Voeg heer jou type</a>
</div>

@endsection