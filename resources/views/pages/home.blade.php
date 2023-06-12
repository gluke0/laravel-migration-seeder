@extends('layout.app')

@section('pageTitle')
    | Home
@endsection

@section('content')
<div class="box-head">
    <div class="container head">
        <h1 class="text-uppercase py-4">railway station</h1>

        <h2>click <a href="{{ route('trains') }}"> &#x1F682; </a> to see all the <a href="{{ route('trains') }}"> &#x1F682;&#x1F682;&#x1F682;&#x1F682;&#x1F682; </a> available </h2>
    </div>
</div>
@endsection