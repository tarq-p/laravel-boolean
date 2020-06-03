@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.photos.index')}}">Photos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form class="" action="{{route('admin.photos.create')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci un titolo">
            @error ('title')
              <small class="form-text">Errore</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Inserisci una descrizione">
            @error ('description')
              <small class="form-text">Errore</small>
            @enderror
          </div>
          <div class="form-group">
            <div class="custom-file">
             <input type="file" class="custom-file-input" id="inputGroupFile01">
             <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
           </div>
            @error ('path')
              <small class="form-text">Errore</small>
            @enderror
          </div>
          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="" value="Salva">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
