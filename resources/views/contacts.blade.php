@extends('layouts.app')

@section('title'){{ $metadata['page_title'] ?? 'Contacts' }}@endsection

@section('content')

    <h1>Contacts</h1>

   

    <form action="{{ route('contact-form')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Enter subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message"  placeholder="Enter message" id="message"  class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>


@endsection
