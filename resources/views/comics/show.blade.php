@extends('layouts.app')

@section('title', 'Laravel Comics')

@section('content')
<div id="show_single" class="container">

<h1 class="text-truncate text-uppercase text-white text-center p-3 ">{{ $comic->title }}</h1>

<img src="{{ $comic->thumb }}" class="  w-100 my-4" alt="{{ $comic->title }}">

<div class="text-white fs-3 py-4">{{ $comic->description }}</div>

<div class="text-white fs-3 py-4">Price: {{ $comic->price }}</div>

@endSection