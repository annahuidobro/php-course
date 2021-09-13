@extends('base')

@section('content')
    <div class="container my-5">
        <a href="/tasca-m12/public/home" class="btn btn-secondary">Go back to home page</a>
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <form class="form" action="/tasca-m12/public/store-match" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="id" value="{{ $match->id }}"/>

                <label for="abstract">Local team:</label>
                <select class="form-control" name="local_team_id">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}"
                                @if($team->id == $match->local_team_id)selected @endif>{{ $team->name }}</option>
                    @endforeach
                </select>
                <br/>
                <label for="abstract">Local goals:</label>
                <input class="form-control" type="text" value="{{$match->local_goals}}" name="local_goals"/>
                <br/>
                <label for="abstract">Visitor team:</label>
                <select class="form-control" name="visitor_team_id">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}"
                                @if($team->id == $match->visitor_team_id)selected @endif>{{ $team->name }}</option>
                    @endforeach
                </select>
                <br/>

                <label for="abstract">Visitor goals:</label>
                <input class="form-control" type="text" value="{{$match->visitor_goals}}" name="visitor_goals"/>
                <br/>
                <label for="abstract">Match date:</label>
                <input class="form-control" type="text" value="{{$match->date}}" name="date"/>
                <br/>

                <button type="submit" class="btn btn-primary">Edit Match</button>
            </form>
        </div>
    </div>
@endsection

