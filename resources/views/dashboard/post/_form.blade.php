@csrf
@include('dashboard.partials.validation')

<div class="form-group">
    <input type="text" name="publication" id="publication" class="form-control" placeholder="Publicacion" aria-describedby="helpId" value=" {{old("publication",$post-> publication)}}">
    <small id="helpId" class="text-muted">Digite la descripcion</small>
</div>

<div class="form-group">
  <select name="category_id" id="category_id" class="custom-select" aria-label="default">
      <option value="" selected disabled>Selecciona una opcion</option>
      @foreach ($categories as $category_name => $id)
        <option value="{{ $id }}" {{ $post -> category_id == $id ? 'selected="selected"':''}}></option>
            {{ category_name }}
      @endforeach
  </select>
  <small id="helpId" class="text-muted"></small>
</div>

<div class="form-group">
  <select name="state" id="state" class="form-control" >
      <option value="">Publicado</option>
      <option value="">No Publicado</option>
      <option value="">En revision</option>
  </select>
</div>

<div class="form-group">
    <select class="custom-select" name="state" id="state">
        @include('dashboard.components.state_options',['val' => post->statate])
    </select>
</div>

<div class="form-group">
  <textarea class="form-control" name="publication_content" id="publication_content" cols="160" rows="10" placeholder="Contenido de la publicacion">
    {{old("publication_content",$post-> publication_content)}}
  </textarea>
</div>
<div>
    <a href="{{URL::previous()}}" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-success">Save</button>
</div>
