@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Voir les Dons')

@section('main')
  <h1>Dons disponibles</h1>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col"> id</th>
            <th scope="col"> nom</th>
            <th scope="col"> description</th>
            <th scope="col"> effet</th>
            <th scope="col"> coût</th>
        </tr>
    </thead>
    <tbody>
         @foreach($dons as $don)
          <tr>
              <td> {{$don->id}} </td>
              <td> {{$don->nom}} </td>
              <td> {{$don->description}} </td>
              <td> {{$don->effet}} </td>
              <td> {{$don->cout}} </td>
          </tr>
         @endforeach
   </tbody>
</table>
<p><a href="/read">Retour</a></p>
@endsection
