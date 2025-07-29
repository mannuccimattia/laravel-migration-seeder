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
                <tr>
                    <td>
                        <div>{{ $train['company'] }}</div>
                        <div>{{ $train['train_number'] }}</div>
                    </td>
                    <td>
                        {{ $train['departure_date'] }}
                    </td>
                    <td>
                        <div>{{ $train['departure_station'] }} </div>
                        <div> {{ $train['departure_time'] }}</div>
                    </td>
                    <td>
                        <div>{{ $train['arrival_station'] }}</div>
                        <div>{{ $train['arrival_time'] }}</div>
                    </td>
                    <td class="{{ $train['on_time'] ? 'text-success' : 'text-danger' }}">
                        {{ $train['on_time'] ? 'NO' : 'YES' }}
                    </td>
                    <td class="{{ !$train['canceled'] ? 'text-success' : 'text-danger' }}">
                        {{ !$train['canceled'] ? 'NO' : 'YES' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
