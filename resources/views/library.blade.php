



@extends('layouts.master')

@section('title', 'my library')

@section('h1', 'my library')

@section('content')
    


<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Année de publication</th>
            <th scope="col">genre</th>
        </tr>
    </thead>
    <tbody>
@foreach($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->publication_year }}</td>
        <td>{{ $book->genre }}</td>
      </tr>
      <tr>
@endforeach
    </tbody>
  </table>
@endsection