@extends('layouts.base')

@section('content')

<form action="/woningType/store" method="POST">
    @csrf
    <div class="form-group">
        <label for="woningType">Woning Type</label>
        <input type="text" class="form-control" id="woningType" name="woningType" placeholder="Woning Type">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection