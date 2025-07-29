@extends('layouts.master')

@section('title')
    DBTrains
@endsection

@section('content')
    <table class="table table-dark table-striped rounded align-middle">
        <thead>
            <tr>
                <th scope="col">Train</th>
                <th scope="col">Date</th>
                <th scope="col">Departure</th>
                <th scope="col">Arrival</th>
                <th scope="col">Delayed</th>
                <th scope="col">Canceled</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($trains as $train)
                <x-table-row :train="$train" />
            @endforeach
        </tbody>
    </table>
@endsection
