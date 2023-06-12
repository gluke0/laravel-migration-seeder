@extends('layout.app')

@section('pageTitle')
    | Trains
@endsection

@section('content')

    <div>
        <h1 class="text-uppercase"> all our &#x1F682;</h1>

        <div class="row">
            @foreach($trains as $elem) 
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div><strong> ID: </strong>{{$elem['id']}}</div>
                        <div><strong> Company: </strong> {{$elem['company']}}</div>
                        <div><strong> Departure Station:</strong>{{$elem['departure_station']}} </div>
                        <div><strong> Arrival Station: </strong>{{$elem['arrival_station']}}</div>
                        <div><strong> Departure Time: </strong>{{$elem['departure_time']}}</div>
                        <div><strong> Arrival Time: </strong>{{$elem['arrival_time']}}</div>
                        <div><strong> Train Code: </strong>{{$elem['train_code']}}</div>
                        <div><strong> Carriages Number: </strong>{{$elem['carriages_number']}}</div>
                        <div><strong> On Time: </strong>{{$elem['on_time']}}</div>
                        <div><strong> Cancelled: </strong>{{$elem['cancelled']}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <h6 class="text-uppercase">Hey! Click <a href="{{ route('home') }}"> &#x1F64B; </a> to go back to the &#127968; page</h6>
    </div>

@endsection