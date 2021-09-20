@extends('layouts.app')

@section('content')
    <h1>Add new booking</h1>
    <div class="card">
        <div class="card-header">Booking</div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <hr>
            <form class="form" action="{{route('create')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="cc-number" class="control-label mb-1">Room</label>
                    <select name="room_id" class="form-control">
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group has-success">
                    <label for="cc-number" class="control-label mb-1 name='guests'">Guests</label>
                    <input id="cc-number" name="guests" type="number" class="form-control cc-number valid" data-val="true" data-val-required="Please enter the number of guests" autocomplete="cc-number" aria-required="true" aria-invalid="false" aria-describedby="cc-number-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label for="payment-button-amount" class="control-label mb-1">Price</label>
                    <input name="price" type="number" class="form-control cc-price identified visa" value="">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cc-exp" class="control-label mb-1">CheckIn Date</label>
                            <input id="cc-exp" name="checkin_date" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid day, month and year" placeholder="DD / MM / YY" autocomplete="cc-exp">
                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="cc-exp" class="control-label mb-1">CheckOut Date</label>
                            <input id="cc-exp" name="checkout_date" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid day, month and year" placeholder="DD / MM / YY" autocomplete="cc-exp">
                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Create</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
