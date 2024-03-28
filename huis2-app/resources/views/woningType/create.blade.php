@extends('layouts.base')

@section('content')
<div class="forms">
    <div class="formmini">
        <h1>Voeg hier jouw woning type toe</h1>

        <form action="/woningType/store" method="POST" class="form__categorie">
            @csrf
            <div class="form-group">
                <label for="woningType">Woning Type</label>
                <input type="text" class="form-control" id="woningType" name="woningType" placeholder="Woning Type">
            </div>
            <button type="submit" class="form__categorie__btn">Add</button>

        </form>
    </div>
</div>



@endsection