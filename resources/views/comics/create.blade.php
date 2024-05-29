@extends('layouts.app')
@section('title', 'Crea un nuovo fumetto')
@section('content') 
<h1 class="text-white text-center">Crea un nuovo fumetto</h1>

<section class="container p-5">
 

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label text-white " >Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"> {{old('title')}}
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-white">Descrizione</label>
            <textarea type="text" class="form-control @error('title') is-invalid @enderror" id="description" name="description" rows="3"></textarea>
            {{old('description')}}
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label text-white">Immagine</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="thumb" name="thumb">
            {{old('thumb')}}
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-white">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
            {{old('price')}}
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label text-white ">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series">
            {{old('series')}}
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label text-white">Data di vendita</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
            {{old('sale_date')}}
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-white">Tipo</label>
            <select type="text" name="type" id="type" class="form-control @error('title') is-invalid @enderror">
                <option value="comic book">Comic book</option>
                <option value="graphic book">Graphic book</option>
                <option value="grafic novel">Graphic novel</option>
            </select>
            {{old('type')}}
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>   
        <button class="btn btn-primary" type="submit">Crea</button>
    </form>
</section>

@endsection