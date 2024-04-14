@extends('layouts.base')

@section('content')

<div class="forms">
    <div class="formmini">
        <h1>Voeg hier jouw product toe</h1>

        <form action="/woning/store" enctype="multipart/form-data"  method="POST" class="form__categorie">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle">
            </div>
            <div class="form-group">
                <label for="price">Prijs</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="price">
            </div>
            <div class="form-group">
                <label for="beschrijving">Beschrijving</label>
                <input type="text" class="form-control" id="beschrijving" name="description" placeholder="Beschrijving">
            </div>
            <div class="form-group">
                <label for="city">Gemente</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Gemente">
            </div>
            <div class="form-group">
                <label for="address">Straat</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Straat">
            </div>
            <div class="form-group">
                <label for="rooms">Rooms</label>
                <input type="text" class="form-control" id="rooms" name="rooms" placeholder="Rooms">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Image">
            </div>
            <div class="form-group">
                <label for="grootte">Grootte</label>
                <input type="text" class="form-control" id="size" name="size" placeholder="Grootte">
            </div>

            
            <button type="submit" class="form__categorie__btn">Add</button>

        </form>
    </div>
</div>

@endsection