
@extends('default')

@section('title')
Bienvenu sur notre App index
@endsection
@section('css')
<link rel="stylesheet" href="">
@endsection

@section('main')
<h1>Liste articles</h1>
@forelse ($articles as $article)
@if ($loop->first)
Premier Article
@endif
@if ($loop->last)
Dernier Article
@endif
@include('articles._article')
@empty
<h3>Pas d'articles</h3>
@endforelse
@endsection


