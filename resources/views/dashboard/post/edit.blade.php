@extends('dashboard.master')
@section('content')
    <h6>Editar publicacion</h6>
    <form action="{{route('post.update', $post -> id)}}" method="post">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
@endsection