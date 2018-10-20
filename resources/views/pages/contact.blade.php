@extends('layouts.default')

@section('content')

    <div class="card mt-4 pl-3 pr-3">
        <div class="card-title">
            <h1>Contact</h1>
            <p class="lead">  Please use this form to contact us</p>
        </div>
        <div class="card-body">
            <form action="/contact" method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Please enter your First Name and Last Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="body">Message</label>
                    <input name="body" textarea class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection