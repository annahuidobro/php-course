@extends('base')

<br />
@section('content')
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <h4 align="center">Welcome to employee list app. Please log-in to access</h4>
        </div>
    </div>
    <br />

    <div class="container px-4" align="space-between">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 borderlign-items-center">
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border lign-items-center">
                    <a href="{{ route('login') }}">Login</a>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border">
                    <a href="/tasca-m11/public/forgot-password">Forgot password?</a>
                </div>
            </div>
        </div>
    </div>
@endsection

