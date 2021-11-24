@extends('layout.layout')


@section('content')

<div class="container">
    <h1>Crud</h1>
@if ($massage = Session::has('msg'))

<div class="alert alert-success" role="alert">
  {{$massage}}
</div>
@endif
    <form action="{{ route('store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="inputName" class="col-12 col-form-label">Name</label>
            <div class="col-12">
            <input type="text" class="form-control" name="name" id="inputName" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-12 col-form-label">Email</label>
            <div class="col-12">
                <input type="email" class="form-control" name="email" id="inputName" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<div class="container-fluid">
    <div class="col-12">
        <table class="table table-striped">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $row)
                  <tr>
                    <td scope="row">{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                    <td>
                        <a href="{{ route('update', [$row->id]) }}" class="btn btn-success"><i class="fas fa-edit "></i></a>
                        <a href="{{ route('delete', [$row->id]) }}" class="btn btn-danger"><i class="fas fa-trash-alt    "></i></a>
                    </td>
                </tr>
                  @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection
