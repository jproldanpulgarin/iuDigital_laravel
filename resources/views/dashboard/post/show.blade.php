@csrf
@extends('dashboard.master')
@section('content')


<div class="form-group">
    <input readonly name="publication" id="publication" class="form-control" placeholder="Publicacion" aria-describedby="helpId" placeholder="" value="{{old("publication",$post-> publication)}}">
    <small id="helpId" class="text-muted">Digite la descripcion</small>
</div>

<div class="form-group">
  <textarea readonly class="form-control" name="publication_content" id="publication_content" cols="160" rows="10" placeholder="Contenido de la publicacion">
    {{old("publication_content",$post-> publication_content)}}
  </textarea>
</div>
<div>
    <a href="{{URL::previous()}}" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-success">Save</button>
</div>
@endsection