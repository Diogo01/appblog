@extends('layouts.master')

@section('title', $title)

@section('content')
<div class="col-md-12">
                <a href="{{url('article',[$post->id])}}">
                    @if($picture = $post->picture)
                    <img class="img-responsive" src="{{url('uploads', $post->picture->uri)}}" alt="">
                    @endif
                </a>
            </div>
<div class="col-md-6">
    <h3>{{$post->title}}</h3>

    @if(!is_null($post->category))
    <h4>catégorie: {{$post->category->title}} </h4>
    @else
    <h4>Pas de catégorie associée pour cette article</v>
    @endif
</div>

<div class="col-md-6">
    <h4>Tags</h4>
    @forelse($post->tags as $tag)
        <span class="btn btn-default"> {{$tag->name}}</span>
    @empty

    @endforelse
</div>
<div class="col-md-12">
	<p>{{ $post->content }}</p>
</div>

<div class="col-md-12">
<p class="italic">Crée le {{ $post->date() }} par {{ $post->user->name }}</p>
</div>
@stop

