@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin: 0 auto;">
    
    <h2 class="text-center mt-3" style ="font-family: 'Courier New', Courier, monospace; color:blue; font-weight:bold">Coin charts</h2>
    <div class="row mt-5 ms-5">

    @foreach($responce as $coins)
        <div class="col-lg-3 col-md-12 col-sm-12 text-center mb-3">
            <div class="card" style="width: 18rem;">
                <img src= "{{ $coins['logo_url'] }}" alt="logo_url" style="width: 77px; margin:10px auto">

                <div class="card-body">
                    <div class="card-title" style= "margin: 5px;">{{ $coins['currency'] }} ({{ $coins['name'] }})</div>
                    <div class="card-text" style= "margin: 5px;">Price: {{ $coins['price'] }}</div>
                    <div class="card-text" style= "margin: 5px;">Date: {{ $coins['price_timestamp'] }}</div>
                    <div class="card-text" style= "margin: 5px;">Rank: {{ $coins['rank'] }}</div>

                    @if($coins['1d']['price_change_pct'] > 0)
                        <div class="card-text" style= "margin: 5px; color:green; font-weight:bold"> Price change today: {{ $coins['1d']['price_change_pct'] }}</div>
                    @else
                        <div class="card-text" style= "margin: 5px; color:red; font-weight:bold"> Price change today: {{ $coins['1d']['price_change_pct'] }}</div>
                    @endif

                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>

@endsection