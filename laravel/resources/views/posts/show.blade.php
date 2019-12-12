
@extends('layout.app')

@section('content')
    <div class="allPostsContainer">
        <div class="containerPost">
            <img class="postImage" src="{{Storage::url($picture->link)}}" alt="{{$picture->name}}" title="{{$picture->name}}">
            <h2>{{$post->title}}</h2>
            <p>{{$post->description}}</p>
            <p>{{$post->price}}€</p>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tailles
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach ($sizes as $size)
                        <p class="dropdown-item">{{$size}}</p>
                    @endforeach
                </div>
            </div>
            <p class="productNumber">Product Number : {{$post->keyProduct}}</p>
            <button type="button" class="btn btn-secondary mr">Acheter</button>
        </div>
    </div>
@endsection
