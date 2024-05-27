@extends('layouts.app')

@section('title', 'Laravel Comics')

@section('content')

        <div class="container">
            <div class="row ">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-3 col-lg-2">
                    <div class="card my-5">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top img-fluid " alt="{{ $comic['title'] }}">
                            <div class="card-body px-0 py-3">
                                <h5 class="card-title text-truncate text-uppercase text-left ">{{ $comic['title'] }}</h5>
                              
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endSection