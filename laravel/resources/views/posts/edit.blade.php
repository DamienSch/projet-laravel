
@extends('layout.app')

@section('content')
    <div class="allPostsContainer">
    {!! Form::open(['action' => ['PostController@update', $post->id],'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
    <!--title-->
        <div class="form-group">
            {!! Form::label('title', 'Titre', ['class' => 'control-label']) !!}
            {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Nom du produit ...']) !!}
        </div>
        <!--descripton-->
        <div class="form-group">
            {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
            {!! Form::textarea('description', $post->description, ['class' => 'form-control', 'placeholder' => 'Description du produit ...']) !!}
        </div>
        <!--gender-->
        <div class="form-group">
            {!! Form::label('category_id', 'Genre', ['class' => 'control-label']) !!}
            {!! Form::select('category_id', ['1' => 'Homme', '2' => 'Femme']) !!}
        </div>
        <!--size-->
        <div class="form-group" >
            {!! Form::label('sizes', 'Taille', ['class' => 'control-label']) !!}
            {!! Form::select('sizes',['XS' => 'Extra Small', 'S' => 'Small','M' => 'Medium','L' => 'Large', 'XL' => 'Extra Large']) !!}
        </div>
        <!--price-->
        <div class="form-group">
            {!! Form::label('price', 'Prix', ['class' => 'control-label']) !!}
            {!! Form::number('price', $post->price); !!}
        </div>
        <!--picture-->
        <div class="form-group">
            <label for="genre">Title image :</label>
            <input type="text" name="title_image" value="{{old('value')}}">
            <input class="file" type="file" name="picture" value="{{old('value')}}">
        </div>
        <!--serial number-->
        <div class="form-group">
            {!! Form::label('keyProduct', 'Numéro de Produit', ['class' => 'control-label']) !!}
            {!! Form::text('keyProduct', $post->keyProduct, ['class' => 'form-control', 'placeholder' => 'Facultatif ...']) !!}
        </div>
        <!--publish item-->
        <div class="form-group">
            {!! Form::label('visibility', 'visibilité', ['class' => 'control-label']) !!}
            {!! Form::select('visibility', ['1' => 'Visible', '0' => 'Caché']) !!}
        </div>
        <!--soldes product-->
        <div class="form-group">
            {!! Form::label('soldes', 'Soldes', ['class' => 'control-label']) !!}
            {!! Form::select('soldes', ['1' => 'En soldes', '0' => 'Pas en soldes']) !!}
        </div>
        {!! Form::hidden('_method', 'PUT', ['id' => 'id']) !!}
        {!! Form::submit('Modifier ce produit', ['class' => 'form-control btn btn-lg btn-dark']) !!}
        {!! Form::close() !!}
    </div>
@endsection
