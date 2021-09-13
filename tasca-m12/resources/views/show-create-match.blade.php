@extends('base')


@section('content')
    <style>
        label {
            display: inline-block;
            width: 100%;
        }
    </style>
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <a href="/tasca-m12/public/home" class="btn btn-secondary">Go back to home page</a>
            <form class="form" action="/tasca-m12/public/create-match" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label for="name">Local Team:</label>
                <select class="form-control" name="local_team_id">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
                <br/>

                <label for="author">Local Goals:</label>
                <input class="form-control" type="text" value="" name="local_goals"/>
                <br/>
                <label for="name">Visitor Team:</label>
                <select class="form-control" name="visitor_team_id">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                    </select>
                <br/>

                <label for="author">Visitor Goals:</label>
                <input class="form-control" type="text" value="" name="visitor_goals"/>
                <br/>

                <label for="author">Match date (Example YYYY-MM-DD):</label>
                <input class="form-control" type="text" value="" name="date"/>
                <br/>

                <br/>
                <button type="submit" class="btn btn-primary">Add Match</button>
            </form>
        </div>
    </div>

@endsection
