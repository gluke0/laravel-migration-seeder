@extends('layout.app')

@section('pageTitle')
    | Home
@endsection

@section('content')
    <div>
        <h1 class="text-uppercase">railway station</h1>

        <h2>click <a href="{{ route('trains') }}"> &#x1F682; </a> to see all the <a href="{{ route('trains') }}"> &#x1F682;&#x1F682;&#x1F682;&#x1F682;&#x1F682; </a> available </h2>
    </div>
@endsection