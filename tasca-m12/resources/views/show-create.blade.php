@extends('base')


@section('content')
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <a href="{{ route('home') }}" class="btn btn-secondary">Go back to teams home page</a>
            <form class="form" action="/tasca-m12/public/create" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{$team->id ?? ''}}">
                <label for="name">Team Name:</label>
                <input class="form-control" type="text" value="{{$team->name ?? ''}}" name="name"/>
                <br/>

                <label for="author">Coach:</label>
                <input class="form-control" type="text" value="{{$team->coach ?? ''}}" name="coach"/>
                <br/>

                <label for="publication_date">Town:</label>
                <input class="form-control" type="text" value="{{$team->town ?? ''}}" name="town"/>
                <br/>

                <label for="abstract">Total Score:</label>
                <input class="form-control" type="text" value="{{$team->total_score ?? ''}}" name="total_score"/>
                <br/>

                <label for="publication_date">Stadium:</label>
                <input class="form-control" type="text" value="{{$team->stadium ?? ''}}" name="stadium"/>
                <br/>

                <label for="abstract">Shield:</label>
                <div class="shields-list">
                    <input type="radio" id="shield_1" name="shield" value="1">
                    <label for="shield_1"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_1.jpeg" /></label><br>
                    <input type="radio" id="shield_2" name="shield" value="2">
                    <label for="shield_2"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_2.jpeg" /></label><br>
                    <input type="radio" id="shield_3" name="shield" value="3">
                    <label for="shield_3"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_3.jpeg" /></label><br>
                    <input type="radio" id="shield_1" name="shield" value="4">
                    <label for="shield_4"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_4.jpeg" /></label><br>
                    <input type="radio" id="shield_2" name="shield" value="5">
                    <label for="shield_5"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_5.jpeg" /></label><br>
                    <input type="radio" id="shield_3" name="shield" value="6">
                    <label for="shield_6"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_6.jpeg" /></label><br>
                    <input type="radio" id="shield_3" name="shield" value="7">
                    <label for="shield_7"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_7.jpeg" /></label>
                </div>

                <br/>
                <button type="submit" class="btn btn-primary">Add Team</button>
            </form>
        </div>
    </div>

@endsection
