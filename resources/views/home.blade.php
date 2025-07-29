@extends('layouts.master')

@section('title')
    DBTrains
@endsection

@section('content')
    <table class="table table-dark table-striped align-middle mb-4">
        <thead>
            <tr>
                <th scope="col">Train</th>
                <th scope="col">Date</th>
                <th scope="col">Departure</th>
                <th scope="col">Arrival</th>
                <th scope="col" class="text-end">Delayed</th>
                <th scope="col" class="text-end">Canceled</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($trains as $train)
                <x-table-row :train="$train" />
            @endforeach
        </tbody>
    </table>
@endsection
