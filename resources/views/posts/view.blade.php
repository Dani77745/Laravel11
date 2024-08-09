@extends('layouts.post')
@section('content')

<h3 class="text-2xl">{{$post->title}}</h3>
<p>{{ $post->description}}</p>

@endsection