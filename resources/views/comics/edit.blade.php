@extends('layouts.app')
@section('title', 'Modifica fumetto')
@section('content') 
<h1 class="text-white text-center">Modifica Card</h1>

<section class="container p-5">

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label"></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ $comic->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"></label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrizone" value="{{$comic->description }}" required>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label"></label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Immagine" value="{{ $comic->thumb }} ">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"></label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{ $comic->price }}" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label"></label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{ $comic->series }}" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label"></label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Data di vendita" value="{{ $comic->sale_date }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label"></label>
            <select type="text" name="type" id="type" value="{{ $comic->type }}" class="form-control">
                <option value="comic book" {{ $comic->type === 'graphic book' ? 'selected' : ''}} >Comic book</option>
                <option value="graphic book" {{ $comic->type === 'graphic book' ? 'selected' : ''}} >Graphic book</option>
                <option value="grafic novel"{{ $comic->type === 'graphic book' ? 'selected' : ''}} >Graphic novel</option>
            </select>
        </div>   
        <button class="btn btn-primary" type="submit">Modifica</button>
    </form>
</section>

@endsection