
extends('base')

@section('header')
    @include('stacks.header')
@endsection

@section('content')
<h3>This is login page with blade</h3>
<form action="{{ route('dologin') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="user">User:</label>
    <input type="text" value="" name="user" />
    <br/>
    <label for="name">Password:</label>
    <input type="text" value="" name="pasword" />
    <br/>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

@endsection