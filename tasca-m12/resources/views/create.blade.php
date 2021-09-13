@extends('base')

@section('content')
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <form class="form" action="/tasca-m12/public/create" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $team ?? '' }}">
                <label for="team">Team:</label>
                <input class="form-control" type="text" name="team"/>
                <br/>

                <label for="abstract">Coach:</label>
                <input class="form-control" type="text"  name="coach"/>
                <br/>

                <label for="abstract">Town:</label>
                <input class="form-control" type="text"  name="town"/>
                <br/>

                <label for="abstract">Total score:</label>
                <input class="form-control" type="text"  name="total_score"/>
                <br/>

                <label for="abstract">Stadium:</label>
                <input class="form-control" type="text"  name="stadium"/>
                <br/>

                <label for="abstract">Shield:</label>
                <input type="radio" id="shield_1" name="shield" value="HTML">
                <label for="shield_1"><img src="/publc/shields/shield_1.jpg" /></label><br>
                <input type="radio" id="shield_2" name="shield" value="CSS">
                <label for="shield_2"><img src="/publc/shields/shield_2.jpg" /></label><br>
                <input type="radio" id="shield_3" name="shield" value="JavaScript">
                <label for="shield_3"><img src="/publc/shields/shield_3.jpg" /></label>
                <br/>

                <button type="submit" class="btn btn-primary">Create a new Team!</button>
            </form>
        </div>
    </div>
@endsection
