@extends('layouts.base')

@section('title', 'Transformation')
@section('main')
  <h1>Transformer un chat</h1>
<div class="centew">
  {{ dd($genders) }}
  {!! Form::open(['url' => '/cat/update', 'classe' => 'insertForm']) !!}
  <div class="form-group">
    {{{Form::label('Nom', 'Nouveau nom du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('name', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('Genre', 'Genre du chat')}}}
    <div class="form-control fowm">
      {{{Form::Radio('gender', 'Mâle')}}} Mâle
      {{{Form::Radio('gender', 'Femelle')}}} Femelle
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('age', 'Nouvel âge du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('age', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('taille', 'Nouvelle taille du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('size', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('poids', 'Nouveau poids du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('weight', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('miaou', 'Nouveau miaou du chat')}}}
    <div class="form-control fowm">
      {{{Form::text('cri', '')}}}
    </div>
  </div>
  <div class="form-group">
    {{{Form::label('Chat', '')}}}
    <div class="form-control fowm">
      {{{Form::submit('Transformer', '')}}}
    </div>
  </div>

  {!! Form::close() !!}
</div>
@endsection
