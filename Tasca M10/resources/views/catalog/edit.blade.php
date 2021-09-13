<!DOCTYPE html>
<html lang="en">
@extends('base')

@section('header')
    @include('stacks.header')
@endsection

@section('content')
<head>
    <meta charset="UTF-8">
    <title>Edit Book Tab</title>
    <style>
        .errors {
            background-color: #fcc;
            border: 1px solid #966;
        }

        form {
            margin-top: 20px;
            line-height: 1.5em;
        }

        label {
            display: inline-block;
            width: 120px:
        }
    </style>
</head>
<body>
<h1>Edition of a Book tab</h1>
<x-nav-bar></x-nav-bar>
@if(count($errors) > 0)
    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('update') }}" method="post">
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
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<a href="{{ route('catalog') }}" class="btn btn-primary">Go back</a>
</body>
</html>
@endsection
