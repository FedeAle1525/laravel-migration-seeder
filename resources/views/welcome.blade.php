@extends('layouts.app');

@section('content')

<main>
    <div class="container text-center">
        <h1>Trains</h1>
    </div>

    <div class="container">
        <div class="row row-cols-4">

            @foreach ($trains as $train)
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$train->code}}</h5>
                        <p class="card-text">{{$train->company}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$train->departure_station}} - {{$train->arrival_station}}</li>
                        <li class="list-group-item">Data: {{$train->departure_date}}</li>
                        <li class="list-group-item">Orario: {{$train->departure_time}} - {{$train->arrival_time}}</li>
                    </ul>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</main>

@endsection