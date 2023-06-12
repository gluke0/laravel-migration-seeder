@extends('layout.app')

@section('pageTitle')
    | Trains
@endsection

@section('content')

<div class="box">
    <div class="container">
        <h1 class="text-uppercase py-4"> all our &#x1F682;</h1>

        <div class="row">
            @foreach($trains as $elem) 
            <div class="col-md-4">
                <div class="card mb-3" style="width: 20rem;">
                    <div class="card-body">
                        <div><strong> ID: </strong>{{$elem['id']}}</div>
                        <div><strong> Company: </strong> {{$elem['company']}}</div>
                        <div><strong> Departure Station:</strong>{{$elem['departure_station']}} </div>
                        <div><strong> Arrival Station: </strong>{{$elem['arrival_station']}}</div>
                        <div><strong> Departure Time: </strong>{{$elem['departure_time']}}</div>
                        <div><strong> Arrival Time: </strong>{{$elem['arrival_time']}}</div>
                        <div><strong> Train Code: </strong>{{$elem['train_code']}}</div>
                        <div><strong> Carriages Number: </strong>{{$elem['carriages_number']}}</div>
                        <div><strong> On Time: </strong>
                            @if ($elem['on_time'] == 0)
                                No 
                            @else 
                                Yes
                            @endif
                        </div>
                        <div><strong> Cancelled: </strong>
                            @if ($elem['cancelled'] == 0)
                                No 
                            @else 
                                Yes
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <h3 class="text-uppercase text-center pb-4">Hey! Click <a href="{{ route('home') }}"> &#x1F64B; </a> to go back to the &#127968; page</h3>
    </div>
</div>
@endsection