@extends('layouts.app')

@section('content')
    <h1>Edit a booking</h1>
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
            <form class="form" action="{{route('store')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $booking->id }}">
                <div class="form-group">
                    <label for="cc-number" class="control-label mb-1">Room</label>
                    <select name="room_id" class="form-control">
                        @foreach($rooms as $room)
                            <option @if($booking->room_id == $room->id) selected @endif value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1 name='guests'">Guests</label>
                    <input id="cc-name" name="guests" value="{{ $booking->guests }}" type="text" class="form-control cc-naumber valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label for="payment-button-amount" class="control-label mb-1">Price</label>
                    <input id="cc-price" name="price" value="{{ $booking->price }}" type="tel" class="form-control cc-number identified visa" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cc-exp" class="control-label mb-1">CheckIn Date</label>
                            <input id="cc-exp" name="checkin_date" value="{{ $booking->checkin_date }}" type="date" class="form-control cc-exp" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid day, month and year" placeholder="DD / MM / YY" autocomplete="cc-exp">
                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="cc-exp" class="control-label mb-1">CheckOut Date</label>
                            <input id="cc-exp" name="checkout_date" value="{{ $booking->checkout_date }}" type="date" class="form-control cc-exp" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid day, month and year" placeholder="DD / MM / YY" autocomplete="cc-exp">
                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
