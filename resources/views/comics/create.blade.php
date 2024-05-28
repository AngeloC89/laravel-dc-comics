@extends('layouts.app')
@section('title', 'Crea un nuovo fumetto')
@section('content') 
<h1 class="text-white text-center">Crea un nuovo fumetto</h1>

<section class="container p-5">

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label"></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"></label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrizone" required>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label"></label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Immagine" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"></label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label"></label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Serie" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label"></label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Data di vendita" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label"></label>
            <select type="text" name="type" id="type" class="form-control">
                <option value="comic book">Comic book</option>
                <option value="graphic book">Graphic book</option>
                <option value="grafic novel">Graphic novel</option>
            </select>
        </div>
       
        <button class="btn btn-primary" type="submit">Crea</button>


    </form>


</section>

@endsection