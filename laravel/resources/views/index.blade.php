@extends('layout.main')

@section('content')

@foreach ($profiles as $profile)
  @if ($loop->last)
<article class="card show" id="card{{ $loop->index}}">
  @else
<article class="card" id="card{{ $loop->index }}">
  @endif
  <div class="img" style="background-image:url('{{ $profile->image}}')"></div>
  <div class="content">
    <h2>{{ $profile->first_name}} {{ $profile->last_name}}</h2>
    <div class="text-container dragscroll">
      <p>{{ $profile->description}}</p>
    </div> 
    <a href="/edit/{{ $profile->id }}">éditer</a>
    <a href="/create">créer</a>
    <a href="/delete/{{ $profile->id }}">supprimer</a>
  </div> 
</article>

<script src="{{ asset('/js/dragscroll.js') }}"></script>
@endforeach

@endsection
