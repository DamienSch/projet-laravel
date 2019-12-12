
@extends('layout.app')

@section('content')

    @if(count($posts) >= 1)
        <div class="allPostsContainer">
        @foreach($posts as $post)
            <div class="containerPost">
                <a class="postLink" href="/produit/{{$post->id}}">
                    <img class="postImage" src="{{Storage::url($post->link)}}" alt="{{$post->name}}" title="{{$post->name}}">
                </a>
                <h2>
                    <a class="postLink" href="/produit/{{$post->id}}">{{$post->title}}</a>
                </h2>
                <p>{{$post->description}}</p>
            </div>
        @endforeach
            <!-- Pagination -->
            <div class="row">
                <div class="col-12 text-center pt-4">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
        @else
    <p>Aucun element existant</p>
    @endif
@endsection
