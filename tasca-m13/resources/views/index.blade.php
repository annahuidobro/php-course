@extends('layouts.app')

@section('content')
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $totalGuest }}</h2>
                            <span>total guest</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $totalBookings }}</h2>
                            <span>total bookings</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $totalBookingsThisWeek }}</h2>
                            <span>active bookings</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                        <div class="text">
                            <h2>${{ $totalPrice }}</h2>
                            <span>total earnings</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <a href="{{ route('show_create') }}">
                    <button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>Create new booking
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Current bookings</h2>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>CheckIn date</th>
                        <th>CheckOut date</th>
                        <th>Room name</th>
                        <th>Booked at</th>
                        <th class="text-right">Guests</th>
                        <th class="text-right">Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->checkin_date}}</td>
                            <td>{{$booking->checkout_date}}</td>
                            <td>{{$booking->room->name}}</td>
                            <td>{{$booking->created_at}}</td>
                            <td class="text-right">{{$booking->guests}}</td>
                            <td class="text-right">{{$booking->price}}</td>
                            <td>
                                <a href="{{ route('show_id', ['id' => $booking->id]) }}">
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>

                                <a href="{{ route('edit', ['id' => $booking->id]) }}">
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                </a>

                                <a href="{{ route('delete', ['id' => $booking->id]) }}">
                                    <button class="au-btn au-btn-icon au-btn--blue2">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
