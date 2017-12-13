@extends('layouts.base')

@section('title', 'Creation')
@section('main')
  <h1>Créer un chat</h1>

<div class="centew">
  {!! Form::open(['url' => '/cat/insert']) !!}
  <div class="form-group">
    {{{Form::label('Nom', 'Nom du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('name', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('genre', 'Genre du chat')}}}
    <div class="form-control fowm">
      {{{Form::Radio('gender', 2)}}} Mâle
      {{{Form::Radio('gender', 1)}}} Femelle
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('age', 'Age du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('age', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('taille', 'Taille du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('size', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('poids', 'Poids du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('weight', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('cri', 'Miaou du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('cri', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('couleur', 'Couleur du chat')}}}
    <div class="form-control fowm">
      {{$daomn[] = 0}}
      @foreach($colors as $color)
        {{ array_push($daomn,$color->color)}}
      @endforeach
      {{{Form::select("",$daomn)}}}

    </div>
  </div>
  <div class="form-group">
    {{{Form::label('Chat', '')}}}
    <div class="form-control fowm">
      {{{Form::submit('Chat', '')}}}
    </div>
  </div>

  {!! Form::close() !!}
</div>
@endsection

{{--
- Nom
- Espece -> Autre table
- Taille
- Poids
- Age
- Sexe -> Autre table
- Couleur -> Autre table
- bruitage -> Autre table
--}}
