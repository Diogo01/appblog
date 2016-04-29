@extends('layouts.master')

@section('title', $title)

@section('content')
    {{ $posts->links() }}
    @forelse($posts as $post)

    <div class="row">
            <div class="col-md-5">
                <a href="{{url('article',[$post->id])}}">
                    @if($picture = $post->picture)
                    <img class="img-responsive" src="{{url('uploads', $post->picture->uri)}}" alt="">
                    @endif
                </a>
            </div>

            <div class="col-md-7">
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

                    
                <div class="col-md-12" style="margin-top:1rem;">
                    <h4>Extrait :</h4>
                    @if($post->content)
                     <p>{{ $post->excerpt(10) }}
                    @else
                        <p>pas de texte à l'article</p>
                    @endif
                    </br>
                    <div class="text-right">
                        <a class="btn btn-primary" href="{{url('article',[$post->id])}}">En savoir plus 
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    </div>
                </div>
                
                

            </div>
        </div>
    
        <hr>
    @empty
    @endforelse
    {{ $posts->links() }}
@stop
@section('sidebar')
    <a href="">J'aimerai être à la suite de la sidebar</a>
@stop