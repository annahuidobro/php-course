@extends('base')

@section('header')
    @include('stacks.header')
@endsection

@section('content')
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <form class="form" action="{{ route('store') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{$employee->id}}">
                <label for="name">First:</label>
                <input class="form-control" type="text" value="{{$employee->first}}" name="first"/>
                <br/>

                <label for="author">Last:</label>
                <input class="form-control" type="text" value="{{$employee->last}}" name="last"/>
                <br/>

                <label for="publication_date">Incorporation date:</label>
                <input class="form-control" type="text" value="{{$employee->incorporation_date}}" name="incorporation_date"/>
                <br/>

                <label for="abstract">Comments:</label>
                <input class="form-control" type="text" value="{{$employee->comments}}" name="comments"/>
                <br/>

                <label for="publication_date">Department:</label>
                <input class="form-control" type="text" value="{{$employee->department}}" name="department"/>
                <br/>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection

