@extends('base')


@section('content')
    <h1 class="fs-1">Teams</h1>
    <div class="d-flex flex-row">
        <div class="p-3">
            <td>
                <a href="{{ route('show-create') }}" class="btn btn-primary">New team</a>
            </td>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Team name</th>
            <th scope="col">Coach</th>
            <th scope="col">Town</th>
            <th scope="col">Total Score</th>
            <th scope="col">Stadium</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form class="form" action="{{ route('home') }}" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <td>
                    <button type="submit" class="btn btn-primary">Search</button>
                </td>
                <td>
                    <input class="form-control" type="text" name="name"/>
                </td>
                <td>
                    <input class="form-control" type="text" name="coach"/>
                </td>
                <td>
                    <input class="form-control" type="text" name="town"/>
                </td>
                <td>
                    <input class="form-control" type="text" name="total_score"/>
                </td>
                <td>
                    <input class="form-control" type="text" name="stadium"/>
                </td>
                <td></td>
            </form>
            <form class="form" action="{{ route('home') }}" method="get">
                <td>
                    <button type="submit" class="btn btn-primary">Clean</button>
                </td>
            </form>
        </tr>
        @foreach ($teams ?? '' as $team)
            <tr>
                <th scope="row">
                    <a href="{{ route('show_id', ['id' => $team->id]) }}" class="btn btn-primary">Show</a>
                </th>
                <td>{{$team->name}}</td>
                <td>{{$team->coach}}</td>
                <td>{{$team->town}}</td>
                <td>{{$team->total_score}}</td>
                <td>{{$team->stadium}}</td>
                <td><img class="rounded-lg-3" src="/tasca-m12/public/shields/shield_{{$team->shield}}.jpeg"
                         alt="shield_image" width="100"></td>
                <td>
                <td>
                    <form class="form" action="/tasca-m12/public/delete/{{$team->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{$team->id}}">
                        <button type="Delete" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('update_id', ['id' => $team->id]) }}" class="btn btn-warning">Modify</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <br/>
    <td>

    </td>
    <h1 class="fs-1">Matches</h1>
    <div class="d-flex flex-row">

        <br/>
        <div class="p-3">
            <td>
                <a href="{{ route('show-create-match') }}" class="btn btn-primary">New match</a>
            </td>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Local Team:</th>
            <th scope="col">Loal goals:</th>
            <th scope="col">Visitor Team:</th>
            <th scope="col">Visitor goals:</th>
            <th scope="col">Match date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        </tr>
        @foreach ($matches ?? '' as $match)
            <tr>
                <th scope="row">
                </th>
                <td>{{$arrayTeams[$match->local_team_id]->name}}</td>
                <td>{{$match->local_goals}}</td>
                <td>{{$arrayTeams[$match->visitor_team_id]->name}}</td>
                <td>{{$match->visitor_goals}}</td>
                <td>{{$match->date}}</td>

                <td>
                    <form class="form" action="/tasca-m12/public/delete-match/{{$match->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{$match->id}}">
                        <button type="Delete" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('update-match_id',['id'=>$match->id])}}" class="btn btn-warning">Modify</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
