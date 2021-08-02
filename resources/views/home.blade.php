@extends('layouts.app')

@section('title'){{ $metadata['page_title'] ?? 'Home' }}@endsection

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore assumenda ad a, voluptates reiciendis sequi molestiae voluptatum, corporis recusandae amet, molestias quibusdam earum ipsum commodi. Laboriosam accusantium esse tenetur repudiandae!</p>

@endsection

@section('aside')
    @parent
    <p>Aditinal test</p>
    
@endsection