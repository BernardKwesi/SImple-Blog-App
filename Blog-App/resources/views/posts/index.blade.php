@extends('layouts.app')

@section('content')
@include('inc.response')
    @if(count($posts) > 0   )
        @foreach($posts as $post)

        <div class="mt-3" style="border: ridge; ">
            <h1> <a href="/posts/{{$post->id}}"> {{$post->title}}</a></h1>
            
            <small>Created at : "{{$post->created_at}} " By "{{$post->user->name}}"</small>
        </div>
    
            

       
        @endforeach
    @else
    <p class="mt-4 display-4 text-center"> NO POSTS AVAILABLE </p>
    @endif  
    
    
@endsection