@extends('base')

@section('header')
    @include('stacks.header')
@endsection

@section('content')
    <form class="form" action="/tasca-m11/public/showcreate" method="get">

        <div class="d-flex flex-row">
            <div class="p-3">
                <td>
                    <button type="submit" class="btn btn-primary">New employee</button>
                </td>
            </div>
        </div>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Firstname</th>
            <th scope="col">Last name</th>
            <th scope="col">Incorporation Date</th>
            <th scope="col">Department</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form class="form" action="/tasca-m11/public/list" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <td>
                    <button type="submit" class="btn btn-primary">Search</button>
                </td>
                <td>
                    <input class="form-control" type="text" name="first" value="{{ $filter['first'] }}"/>
                </td>
                <td>
                    <input class="form-control" type="text" name="last"/>
                </td>
                <td>
                    <input class="form-control" type="text" name="incorporation_date"
                </td>
                <td>
                    <select class="form-control" name="department">
                        <option @if($filter['department'] === 'NULL') selected @endif value="NULL"></option>
                        <option @if($filter['department'] === 'rrhh') selected @endif value="rrhh">RRHH</option>
                        <option @if($filter['department'] === 'tecnology') selected @endif value="tecnology">tecnology
                        </option>
                        <option @if($filter['department'] === 'concierge') selected @endif value="concierge">concierge
                        </option>
                        <option @if($filter['department'] === 'events department') selected
                                @endif value="events department">events department
                        </option>
                        <option @if($filter['department'] === 'nursery') selected @endif value="nursery">nursery
                        </option>
                        <option @if($filter['department'] === 'cook') selected @endif value="cook">cook</option>
                    </select>
                </td>

            </form>
            <form class="form" action="/tasca-m11/public/list" method="get">
                <td>
                    <button type="submit" class="btn btn-primary">Clean</button>
                </td>
            </form>
        </tr>
        @foreach ($employees ?? '' as $employee)
            <tr>
                <th scope="row">
                    <a href="/tasca-m11/public/show/{{$employee->id}}" class="btn btn-primary">Show</a>
                </th>
                <td>{{$employee->first}}</td>
                <td>{{$employee->last}}</td>
                <td>{{$employee->incorporation_date}}</td>
                <td>{{$employee->department}}</td>
                <td>
                    <form class="form" action="/tasca-m11/public/delete/{{$employee->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{$employee->id}}">
                        <button type="Delete" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/tasca-m11/public/update/{{$employee->id}}" class="btn btn-warning">Modify</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
