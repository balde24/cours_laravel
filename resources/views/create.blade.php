@extends('layouts.master')

@section('title', 'ajouter un livre ')

@section('h1', 'Ajouter un livre')
@section('content')

<form action="/create1" method="POST">
    @csrf
    <div class="field">
        <label class="label">Titre</label>
        <div class="control">
          <input class="input " type="text" name="title" value="" placeholder="Titre du livre">
        </div>
    </div>
    <div class="field">
        <label class="label">Nom de l'auteur</label>
        <div class="control">
          <input class="input" type="text" name="author" value="" placeholder="nom de l'auteur" >
        </div>      
    </div>
    <div class="field">
        <label class="label">date de publication</label>
        <div class="control">
          <input class="input" type="number" name="publication_year" value="" min="1950" max="2023">
        </div>      
    </div>
    <div class="field">
        <label class="label">Genre</label>
        <div class="control">
          <input class="input" type="text" name="genre" value="" placeholder="genre">
        </div>      
    </div>
    <div class="field">
        <label class="label">Synopsis</label>
        <div class="control">
            <textarea class="textarea" name="synopsis" placeholder="synopsis du livre"></textarea>
        </div>       
    </div>
    <div class="field">
        <div class="control">
          <button class="button is-link">Envoyer</button>
        </div>
    </div>
</form>

@endsection