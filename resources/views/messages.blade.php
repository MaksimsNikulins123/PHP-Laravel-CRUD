@extends('layouts.app')

@section('title'){{ $metadata['page_title'] ?? 'All messages' }}@endsection

@section('content')
    <h1>All messages</h1>
@foreach($data as $el)
    <div class="alert alert-info">
        <h3>{{ $el->subject}}</h3>
        <p>{{ $el->email}}</p>
        <p><small>{{ $el->created_at}}</small></p>
        <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Details</button></a>
    </div>

@endforeach

@endsection

