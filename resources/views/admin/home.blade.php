@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a href="admin" class="btn btn-primary m-2 p-2">Admin Home</a>
    <a href="{{route('articles')}}" class="btn btn-primary m-2 p-2">Articles</a>
    </div>
</div>
@endsection
