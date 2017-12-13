@extends('layouts.base')

@section('title', 'Don')
@section('main')
  <h1>Donner un chat</h1>

<div class="centew">
  {!! Form::open(['url' => '/create']) !!}
  <div class="form-group">
    {{{Form::label('Chat', 'Nom du chat adopté')}}}
    <div class="form-control fowm">
      {{{Form::text('Chat', '')}}}
      {{{Form::submit('Donner le chat', '')}}}
    </div>
  </div>

  {!! Form::close() !!}
</div>
@endsection
