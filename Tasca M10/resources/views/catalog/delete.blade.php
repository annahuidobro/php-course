
@extends('base')

@section('header')
    @include('stacks.header')
@endsection
@section('content')


<div>
    <h3>The Book tag {{ $book['name']}} has been deleted!</h3>
    <a href="{{ route('catalog') }}" class="btn btn-primary">Go back</a>
</div>


@endsection
