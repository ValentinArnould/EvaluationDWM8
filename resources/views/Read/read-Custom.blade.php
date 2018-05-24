@extends('base')

@section('compléments')
@endsection

@section('titre', 'JCRU2DR - Voir les Contenus personnalisés')

@section('main')
  <h1>Contenus personnalisés disponibles</h1>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col"> id</th>
            <th scope="col"> nom</th>
            <th scope="col"> description</th>
        </tr>
    </thead>
    <tbody>
         @foreach($customs as $custom)
          <tr>
              <td> {{$custom->id}} </td>
              <td> {{$custom->nom}} </td>
              <td> {{$custom->description}} </td>
          </tr>
         @endforeach
   </tbody>
</table>
<p><a href="/read">Retour</a></p>
@endsection
