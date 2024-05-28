@extends('layouts.app')

@section('title', 'Laravel Comics')

@section('content')
<div id="show_single" class="container">

  <h1 class="text-truncate text-uppercase text-white text-center p-3 ">{{ $comic->title }}</h1>
  <div class="w-100 d-flex justify-content-center">
    <img src="{{ $comic->thumb }}" class=" w-50 m-auto" alt="{{ $comic->title }}">
  </div>

  <div class="text-white fs-3 py-4">{{ $comic->description }}</div>

  <div class="text-white fs-3 py-4">Price: {{ $comic->price }}</div>

  <div class="d-flex justify-content-start py-2">
    <button class="btn btn-primary h-25"><a class="text-decoration-none text-white" href="{{route('comics.edit', $comic->id)}}">Modifica</a></button>

    <form action="{{ route('comics.destroy', $comic->id) }}" action="POST">
      @csrf
      @method('DELETE')
      <button id="deleteComic" type="submit" href="" class="btn btn-danger ms-3">Elimina</button>
    </form>

  </div>

</div>



@endSection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sicuro/a di voler eliminare questo elemento?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>