@extends('layouts.base')

@section('content')

<div class="forms">
    <div class="formmini">
        <h1>Voeg hier jouw product toe</h1>

        <form action="/dashboard/woning/update/{{$woningHuis->id}}" enctype="multipart/form-data"  method="POST" class="form__categorie">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$woningHuis->title}}" >
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$woningHuis->subtitle}}"">
            </div>
            <div class="form-group">
                <label for="price">Prijs</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$woningHuis->price}}"            </div>
            <div class="form-group">
                <label for="beschrijving">Beschrijving</label>
                <input type="text" class="form-control" id="beschrijving" name="description" value="{{$woningHuis->description}}"ving">
            </div>
            <div class="form-group">
                <label for="city">Gemente</label>
                <input type="text" class="form-control" id="city" name="city" value="{{$woningHuis->city}}">
            </div>
            <div class="form-group">
                <label for="address">Straat</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$woningHuis->address}}"
            </div>
            <div class="form-group">
                <label for="rooms">Rooms</label>
                <input type="text" class="form-control" id="rooms" name="rooms" value="{{$woningHuis->rooms}}"            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{$woningHuis->image}}"            </div>
            <div class="form-group">
                <label for="grootte">Grootte</label>
                <input type="text" class="form-control" id="size" name="size" value="{{$woningHuis->size}}">
            </div>
            <div class="form-group">
                <label for="grootte">Refnummer</label>
                <input type="text" class="form-control" id="refnummer" name="refnummer" value="{{$woningHuis->refnummer}}">
            </div>

            <select name="woning_type_id" id="">
                @foreach($woning_types as $woning_type)
                    <option value="{{$woning_type->id}}">{{$woning_type->name}}</option>
                @endforeach
            </select>

            <select name="bouwtype_id" id="">
                @foreach($bouwtypes as $bouwtype)
                    <option value="{{$bouwtype->id}}">{{$bouwtype->name}}</option>
                @endforeach
            </select>

            
            <button type="submit" class="form__categorie__btn">update Woning</button>

        </form>
    </div>
</div>

@endsection