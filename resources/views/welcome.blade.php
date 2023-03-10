@extends('layouts.app')

@section('pageTitle') Home | Laravel Comics @endsection

@section('pageContent')
    <div class="jumbotron"></div>
    <div class="content-container">
        <div class="container">
            <div class="title">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="card-container">
                @foreach ($comics as $card)
                    <div class="card">
                        <div class="img-container">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                        </div>
                        <h4>{{ $card['title'] }}</h4>
                    </div>
                @endforeach

            </div>
            <button>LOAD MORE</button>
        </div>
    </div>
@endsection