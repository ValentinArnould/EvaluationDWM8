@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Voir les Races')

@section('main')
  <h1>Races disponibles</h1>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col"> id</th>
            <th scope="col"> nom</th>
            <th scope="col"> description</th>
            <th scope="col"> habitat</th>
            <th scope="col"> dons</th>
            <th scope="col"> faiblesses</th>
            <th scope="col"> custom</th>
        </tr>
    </thead>
    <tbody>
         @foreach($races as $race)
          <tr>
              <td> {{$race->id}} </td>
              <td> {{$race->nom}} </td>
              <td> {{$race->description}} </td>
              <td> {{$race->habitat}} </td>
              <td> {{$race->dons}} </td>
              <td> {{$race->faiblesses}} </td>
              <td> {{$race->custom}} </td>
          </tr>
         @endforeach
   </tbody>
</table>
<p><a href="/read">Retour</a></p>
@endsection
