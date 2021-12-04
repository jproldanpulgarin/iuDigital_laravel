@csrf
@include('dashboard.partials.validation')
<div class="form-group mb-3">
    <input type="text" name="category" id="category" class="form-control" placeholder="Nombre Categoria">
</div>
<div class="form-group mb-3">
    <textarea name="description_category" id="description_category" class="form-control" placeholder="Descripcion de la Categoria">

    </textarea>
</div>
<div class="mb-3">
    <a href="" class="btn btn-danger btn-sm">Cancel</a>
    <button type="submit" class="btn btn-info btn-sm">Save</button>
</div>