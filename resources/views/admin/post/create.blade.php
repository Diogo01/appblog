@extends('layouts.admin')

@section('content')

    @if(Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif
    <div>
        <h2>Crée un post</h2>
    </div>
    <hr>
    <form method="POST" action="{{url('post')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{$userId}}">


        <div class="form-group ">
            <label class="panel-title">Titre</label>
            <input class="form-control" type="text" name="title" value="{{old('title')}}">
        </div>

        <div class="form-group">
        <label class="panel-title">Contenu</label>
            @if($errors->has('title')) <span class="error">{{$errors->first('title')}}@endif
            <textarea class="form-control" name="content">{{old('content')}}</textarea>
            @if($errors->has('content')) <span class="error">{{$errors->first('content')}}@endif
        </div>

        <div class="form-group">
            <label class="panel-title">sélectionner une catégorie</label>
                <select class="form-control" name="category_id">
                    @forelse($categories as $id=>$title)
                        <option value="{{$id}}">{{$title}}</option>
                    @empty
                    @endforelse
                    <option value="0" selected>non catégorisé</option>
                </select>
        </div>

        <div class="checkbox">
            <label for="status">Statut:</label>
                <label for="status">
                    <input id="status" type="checkbox" name="status" value="opened" > Publier
                </label>

        </div>

        <div class="form-group">
            <label >Image</label>
            <input type="file" name="picture" >
                @if($errors->has('picture'))
                    <span class="error">{{ $errors->first('picture') }}</span>
                @endif
            </br>
            <label for="name">Titre de l'image</label>
            <input type="text" name="name">
            @if($errors->has('name'))
                <span class="error">{{ $errors->first('name') }}</span>
            @endif 
        </div>


        <div class="form-group">
            <div class="form-select">
                <label for="tags">Tag</label>
                    <select name="tag_id[]" multiple>
                        @foreach($tags as $id => $name)
                            <option value="{{$id}}">{{$name}} </option>
                        @endforeach
                </select>
                @if($errors->has('tags')) <span class="error">{{ $errors->first('tags') }}</span> @endif 
            
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Valider</button>


    </form>
@endsection