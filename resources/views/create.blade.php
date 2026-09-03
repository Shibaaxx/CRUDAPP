@extends('layout')

 @section('content')
      @if($errors-> any())
        <div class="alert alert-danger">
            <ul>
                @foreach($error->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
       @endif              
    <h1>Create a new post</h1>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content">Content:</label>
            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-secondary">Create Post</button>
        <a href="{{ route('index') }}" class="btn btn-secondary">Back to Posts</a>
    </form>
@endsection