@extends('layouts.app')
@section('title', 'Modifica fumetto')
@section('content') 
<h1 class="text-white text-center">Modifica Card</h1>

<section class="container p-5">

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label @error('title') is-invalid @enderror"></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ $comic->title }}" >
            {{old('title')}}
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"></label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Descrizone" value="{{$comic->description }}">
            {{old('description')}}
           
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label"></label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Immagine" value="{{ $comic->thumb }} ">
            {{old('thumb')}}
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"></label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Prezzo" value="{{ $comic->price }}" >
            {{old('price')}}
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label"></label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Serie" value="{{ $comic->series }}" >
            {{old('series')}}
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label"></label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Data di vendita" value="{{ $comic->sale_date }}">
            {{old('sale_date')}}
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label"></label>
            <select type="text" name="type" id="type" value="{{ $comic->type }}" class="form-control @error('type') is-invalid @enderror">
                <option value="comic book" {{ $comic->type === 'graphic book' ? 'selected' : ''}} >Comic book</option>
                <option value="graphic book" {{ $comic->type === 'graphic book' ? 'selected' : ''}} >Graphic book</option>
                <option value="grafic novel"{{ $comic->type === 'graphic book' ? 'selected' : ''}} >Graphic novel</option>
            </select>
            {{old('type')}}
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>   
        <button class="btn btn-primary" type="submit">Modifica</button>
    </form>
</section>

@endsection