@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Voir les Classes')

@section('main')
  <h1>Classes disponibles</h1>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col"> id</th>
            <th scope="col"> nom</th>
            <th scope="col"> description</th>
            <th scope="col"> type</th>
        </tr>
    </thead>
    <tbody>
         @foreach($classes as $classe)
          <tr>
              <td> {{$classe->id}} </td>
              <td> {{$classe->nom}} </td>
              <td> {{$classe->description}} </td>
              <td> {{$classe->type}} </td>
          </tr>
         @endforeach
   </tbody>
</table>
<p><a href="/read">Retour</a></p>
@endsection
