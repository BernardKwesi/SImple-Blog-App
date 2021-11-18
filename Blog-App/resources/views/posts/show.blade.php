@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-secondary  m-3">GO BACK</a>

    <h1>{{$post->title}}</h1>

<div>
    {!!$post->body!!}
</div>
<hr>
<p>Created_At: "{{$post->created_at}} By:  " {{$post->user->name}} "</p>

@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <ul>
             <li><a href="/posts/{{$post->id}}/edit" class="btn btn-warning ">EDIT</a></li>
    
             <li>{!! Form::open(['action'=> ['App\Http\Controllers\PostsController@destroy',$post->id], 'method' =>'POST' ] )  !!}
    
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('DELETE', ['class' => 'btn btn-danger '])}}                        
    
             {!! Form::close() !!}</li>
     </ul>
    @endif
@endif

@endsection