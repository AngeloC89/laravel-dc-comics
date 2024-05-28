@extends('layouts.app')

@section('title', 'Laravel Comics')

@section('content')

<div class="container">
    <div class="w-25 py-4">
        <form class="d-flex" action="{{route('comics.index')}}" method="GET">
            <select name="search" id="search" class="form-control">
                <option value="all">Tutti</option>
                <option value="comic book">Comic book</option>
                <option value="graphic book">Graphic book</option>
                <option value="grafic novel">Graphic novel</option>
            </select>
            <button type="submit" class="btn btn-primary mx-3"> Cerca</button>
        </form>
    </div>

    <div class="row ">
        @foreach ($comics as $comic)
            <div class="col-12 col-md-3 col-lg-2">
                <div class="card my-5">
                    <img src="{{ $comic->thumb }}" class="card-img-top img-fluid " alt="{{ $comic->title }}">
                    <div class="card-body px-0 py-3">
                        <h5 class="card-title text-truncate text-uppercase text-left "><a
                                class="text-decoration-none text-white"
                                href="{{route('comics.show', $comic['id'])}}">{{ $comic->title }}</a></h5>

                    </div>
                    <button class="btn btn-primary"><a class="text-decoration-none text-white"
                            href="{{route('comics.show', $comic['id'])}}">Dettagli</a></button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="py-5">
        <button class="btn btn-primary"><a class="text-decoration-none text-white"
                href="{{route('comics.create')}}">Aggiungi</a></button </div>
    </div>

    @endSection