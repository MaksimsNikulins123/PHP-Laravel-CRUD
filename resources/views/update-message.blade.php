@extends('layouts.app')

@section('title'){{ $metadata['page_title'] ?? 'Update data' }}@endsection

@section('content')

    <h1>Update data</h1>

   

    <form action="{{ route('contact-update-submit', $data->id)}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Enter subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message"  placeholder="Enter message" id="message"  class="form-control">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>


@endsection
