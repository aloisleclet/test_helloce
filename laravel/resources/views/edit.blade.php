@extends('layout.main')

@section('content')

<article class="card fullscreen">
  <div class="img" id="img" style="background-image:url('{{ $profile->image }}')"></div>
  <div class="content">
    <form action="/edit/{{ $profile->id }}" method="post">
      @csrf
      <input type="text" name="first_name" placeholder="Keanu" value="{{ $profile->first_name }}"/>
      <input type="text" name="last_name" placeholder="Reeves" value="{{ $profile->last_name }}"/>
      <input type="text" name="image" id="img_url" placeholder="https://fankeanu.com/keanureeves.jpg" value="{{ $profile->image }}"/>
      <textarea name="description" class="text-container">{{ $profile->description }}</textarea>
      <input type="submit" name="submit"/>
    </form>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="errors">{{$error}}</div>
        @endforeach
    @endif
  </div> 
</article>

@endsection
