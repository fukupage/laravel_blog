@extends('layouts.app')

@section('title',$entry->title)

@include('layouts.header')

@section('content')
  <h2>{{$entry -> title}}</h2>
  <article>
    <p>{{$entry->content}}</p>
  </article>
@endsection
