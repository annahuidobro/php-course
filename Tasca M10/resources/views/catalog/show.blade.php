@extends('base')

@section('header')
    @include('stacks.header')
@endsection

@section('content')
This is the show view of {{ $book['name'] }} with blade
    <div>
        <label for="name">Name:</label>
        <input type="text" value="{{$book['name']}}" name="name" />
        <br/>
        <label for="author">Author:</label> <input type="text" value="{{$book['author']}}" name="author" />
        <br/>
        <label for="publication_date">Publicatin Date:</label>
        <input type="text" value="{{$book['publication_date']}}" name="publication_date" />
        <br/>
        <label for="abstract">Abstract:</label>
        <input type="text" value="{{$book['abstract']}}" name="abstract" />
        <br/>
    </div>
@endsection
