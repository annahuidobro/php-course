
@extends('base')

@section('content')
    <div class="container my-5">
        <a href="{{ route('home') }}" class="btn btn-secondary">Go back to home page</a>
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <form class="form" action="/tasca-m12/public/store" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="id" value="{{ $team->id }}"/>
                <label for="team">Team:</label>
                <input class="form-control" type="text" value="{{$team->name}}" name="name"/>
                <br/>

                <label for="abstract">Coach:</label>
                <input class="form-control" type="text" value="{{$team->coach}}" name="coach" />
                <br/>

                <label for="abstract">Town:</label>
                <input class="form-control" type="text"   value="{{$team->town}}" name="town"/>
                <br/>

                <label for="abstract">Total score:</label>
                <input class="form-control" type="text"   value="{{$team->total_score}}" name="total_score" />
                <br/>

                <label for="abstract">Stadium:</label>
                <input class="form-control" type="text"    value="{{$team->stadium}}" name="stadium"/>
                <br/>

                <label for="abstract">Shield:</label>
                <div class="shields-list">
                    <input type="radio" id="shield_1" name="shield" value="1" @if($team->shield === 1) checked @endif>
                    <label for="shield_1"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_1.jpeg" /></label><br>
                    <input type="radio" id="shield_2" name="shield" value="2" @if($team->shield === 2) checked @endif>
                    <label for="shield_2"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_2.jpeg" /></label><br>
                    <input type="radio" id="shield_3" name="shield" value="3" @if($team->shield === 3) checked @endif>
                    <label for="shield_3"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_3.jpeg" /></label><br>
                    <input type="radio" id="shield_1" name="shield" value="4" @if($team->shield === 4) checked @endif>
                    <label for="shield_4"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_4.jpeg" /></label><br>
                    <input type="radio" id="shield_2" name="shield" value="5" @if($team->shield === 5) checked @endif>
                    <label for="shield_5"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_5.jpeg" /></label><br>
                    <input type="radio" id="shield_3" name="shield" value="6" @if($team->shield === 6) checked @endif>
                    <label for="shield_6"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_6.jpeg" /></label><br>
                    <input type="radio" id="shield_3" name="shield" value="7" @if($team->shield === 7) checked @endif>
                    <label for="shield_7"><img style="width: 50px;" src="/tasca-m12/public/shields/shield_7.jpeg" /></label>
                </div>

                <button type="submit" class="btn btn-primary">Edit Team</button>
            </form>
        </div>
    </div>
@endsection

