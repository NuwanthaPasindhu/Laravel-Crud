@extends('layout.layout')
@section('content')

@if ($data)
<div class="container">
    <form action="{{ route('updatedata') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Name</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" value="{{$data->name}}" name="name" id="inputName" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Email</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" value="{{$data->email}}" name="email" id="inputName" placeholder="">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </div>
    </form>
</div>
@else
<script>
    window.open("http://127.0.0.1:8000",'_self');
</script>
@endif

@endsection

