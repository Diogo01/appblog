@extends('layouts.admin')

@section('content')
    <div class="col-md-12">

         <div class="col-md-6">
             <h2>Dashboard</h2>
        </div>
        <div class="col-md-6 text-right">
            <span>{{ $posts->links() }}</span>
        </div>
        
    </div>
    
    <div class="col-md-12">
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
         @endif
    </div>
     
   
    
    
    <table class="table table-hover" style="margin-top:2rem;">
        <thead>
        <tr>
            <th>Status</th>
            <th>Titre</th>
            <th>Image</th>
            <th>Categories</th>
            <th>Tags</th>
            <th>Publier</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        
        @forelse($posts as $post)
            <tr>
                <!-- status -->
                <td>@if($post->status==="opened")
                    <button class="btn btn-success"></button>
                    @endif

                    @if($post->status==="closed")
                    <button class="btn btn-danger"></button>
                @endif</td>

                <!-- Titre -->
                <td>
                    <a href="{{url('post',[$post->id, 'edit'])}}" class="">{{$post->title}}</a>
                </td>
                <!-- <td>Publié: </br>{{$post->published_at? $post->published_at : 'Non daté'}}</td>
                <td>Crée: </br> {{$post->created_at? $post->created_at : 'Non daté'}}</td> -->

                <!-- Image -->
                <td>
                    @if($picture = $post->picture)
                    <img  style="width:15rem;" class="img-responsive" src="{{url('uploads', $post->picture->uri)}}"> 
                    @endif
                </td>
                <!-- Catégorie -->
                <td>
                    @if(!is_null($post->category))
                        {{$post->category->title}}
                    @else
                        Non catégorisé
                    @endif
                </td>
                <!-- Tags -->
                <td>
                    <ul>
                            @forelse($post->tags as $tag)
                                <li class="tag">{{$tag->name}}</li>
                            @empty
                                aucun tag
                            @endforelse
                    </ul>
                    
                </td>
                <!-- Editer -->
                <td>
                    <form action="">
                        <a href="{{ action('PostController@published', $post)}}" >
                            @if($post->status ==='opened')
                                 <div class="btn btn-danger">Non</div>
                             @else
                                <div class="btn btn-success">Oui</div>
                             @endif
                         </a>
                    </form>
                </td>
                <td>
                    <a href="{{url('post',[$post->id, 'edit'])}}" class="btn btn-primary">Modifier</a>
                </td>
                <!-- Suprimer -->
                <td>
                    
                    <form class="destroy" method="POST" action="{{url('post', $post->id)}}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="title_h" value="{{$post->title}}">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">supprimer</button>

                    <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Voulez vous vraiment supprimer le post</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('post', $post->id)}}" method="POST" >
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger" value="delete" >supprimer</button></form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>

                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        @empty
            <p>Aucun article en base</p>
        @endforelse
    </table>



@endsection