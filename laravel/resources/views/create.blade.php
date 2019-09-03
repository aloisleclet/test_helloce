@extends('layout.main')

@section('content')


<article class="card fullscreen">
  <div class="img" id="image"style="background-image:url('https://cdn.radiofrance.fr/s3/cruiser-production/2019/06/502948e9-5787-4a99-8969-aa007ad4029c/801x410_gettyimages-1146739180.jpg')"></div>
  <div class="content">
    <form action="/create" method="post">
      @csrf
      <input type="text" name="first_name" placeholder="Keanu"/>
      <input type="text" name="last_name" placeholder="Reeves" />
      <input type="text" name="image" id="img_url" placeholder="https://fankeanu.com/keanureeves.jpg"/>
      <textarea name="description" class="text-container"></textarea>
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
