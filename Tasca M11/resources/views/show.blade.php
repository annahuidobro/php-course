@extends('base')

@section('header')
    @include('stacks.header')
@endsection

@section('content')
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">{{$employee->first}} {{$employee->last}}</h1>
                <p class="lead">{{$employee->comments}}</p>
                <p class="lead">Incorporation date: <br>
                    {{$employee->incorporation_date}}</p>
                <p class="lead">Department: <br>
                    {{$employee->department}}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <td>
                        <a href="/tasca-m11/public/update/{{$employee->id}}" class="btn btn-warning">Modify</a>
                        <form class="form" action="/tasca-m11/public/delete/{{$employee->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$employee->id}}">
                            <button type="Delete" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-3" src="https://i.pravatar.cc/300" alt="" width="300">
            </div>
        </div>
    </div>
@endsection
