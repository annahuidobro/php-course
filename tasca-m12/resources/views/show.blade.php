@extends('base')


@section('content')
    <div class="container my-5">
        <a href="{{ route('home') }}" class="btn btn-secondary">Go back to home page</a>
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">{{ $team->name ?? ''}}</h1>
                <br>
                <p class="lead">Coach: <br> {{ $team->coach ?? ''}}</p>
                <p class="lead">Town: <br> {{ $team->town ?? ''}}</p>
                <p class="lead">Total Score: <br>
                    {{ $team->total_score ?? '' }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <div class>
                        <img class="rounded-lg-3" src="/tasca-m12/public/shields/shield_{{ $team->shield ?? ''}}.jpeg"
                             alt="shield_image" width="300">
                    </div>
                    <br>
                    <td>
                        <!-- Buttons -->
                        <a href="{{ route('update_id',['id'=>$team->id]) }}" class="btn btn-warning">Modify</a>
                        <br>
                        <form class="form" action="/tasca-m12/public/delete/{{ $team->id ?? ''}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$team->id ?? ''}}">
                            <button type="Delete" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </div>
            </div>
        </div>
    </div>
@endsection
