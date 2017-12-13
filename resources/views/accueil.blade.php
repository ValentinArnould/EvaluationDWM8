@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
  <h1>Yolomegadoom</h1>
  <div class="centew">
    @foreach ($cats as $cat)
      <ul>
        <li class="nav-item navDoom">{{ $cat->name }}</li>
        <li class="nav-item navDoom">{{ $cat->age }} an(s)</li>
        <li class="nav-item navDoom">{{ $cat->size }}</li>
        <li class="nav-item navDoom">{{ $cat->weight }}</li>
        @if($cat->gender)
          <li class="nav-item navDoom">{{ $cat->gender->gender }}</li>
        @else
          <li class="nav-item navDoom"> NON </li>
        @endif
        @if($cat->colors)
          @foreach($cat->colors as $color)
            <li class="nav-item navDoom">{{ $color->color }}</li>
          @endforeach
        @else
          Transparent
        @endif
        <li class="nav-item navDoom">{{ $cat->cri }}</li>
      </ul>
    @endforeach
  </div>
@endsection
