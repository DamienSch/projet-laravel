@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tableau de bord</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a class="btn btn-lg btn-dark" href="/create">Nouveau Produit</a>
                        <hr>
                        <h3 class="text-center">Tout les produits</h3>
                        <hr>
                        @if(count($posts) >= 1)
                            <div class="allPostsContainer">
                                <ul>
                                    @foreach($posts as $post)
                                        <li class="col-12 mb-4 mt-4">
                                            <h4><a class="postLink" href="/produit/{{$post->id}}">{{$post->title}}</a></h4>
                                            <p>Catégorie :
                                                @if($post->category_id == 1)
                                                    Homme
                                                @endif
                                                @if($post->category_id == 2)
                                                    Femme
                                                @endif
                                            </p>
                                            <p>Prix : {{$post->price}}</p>
                                            <p>Ce produit est
                                                @if($post->visibility == 1)
                                                    visible
                                                @endif
                                                @if($post->visibility == 0)
                                                    caché
                                                @endif
                                            </p>
                                        </li>
                                        <div class="container mb-5">
                                            <a class="btn btn-lg btn-dark col-12" href="/produit/{{$post->id}}/edit">Editer ce produit</a>
                                            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'post']) !!}
                                            {!! Form::hidden('_method', 'DELETE', ['id' => 'id']) !!}
                                            {!! Form::submit('Supprimer', ['class' => 'form-control btn btn-lg btn-dark', 'style' => 'margin-top:10px']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                        <hr>
                                    @endforeach
                                </ul>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
