@extends('layouts.app')
    
@section('content')

    <div class="jumbotron bg-dark text-center">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is a simple Backpack website, with admin panel where users can create pages and change the content of the pages.</p>
        <hr class="my-4">
        <p>Wanna try? Feel free to Register / Log in, have a fun!</p>
        <p class="lead">
        <a class="btn btn-outline-info btn-lg" href="/admin/register" role="button">Register</a>
        <a class="btn btn-outline-info btn-lg" href="/admin/login" role="button">Log in</a>
        </p>
    </div>
    
@endsection