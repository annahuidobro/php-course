
@extends('base')

@section('header')
    @include('stacks.header')
@endsection
@section('content')


        label {
            display: inline-block;
            width: 120px:
        }
    </style>
</head>
<body>
<h1>Delete of a Book tab</h1>
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


<div>
    <h3>The Book tag {{ $book['name']}} has been deleted!</h3>
    <a href="{{ route('catalog') }}" class="btn btn-primary">Go back</a>
</div>


@endsection
