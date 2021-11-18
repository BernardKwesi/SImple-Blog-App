@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-secondary  m-3">GO BACK</a>
   <h1 class="display-3 text-center ">CREATE POSTS </h1>
   @include('inc.response')
   {!! Form::open(['action'=> 'App\Http\Controllers\PostsController@store', 'method' =>'POST' ] )  !!}
<div class="form-group">
   {{ Form::label('title', 'TITLE ',['class' => 'form-label mt-3'])}} 
   {{ Form::text('title','',['class' => 'form-control mt-2' , 'placeholder' =>  'Blog Title'])}}
   {{ Form::label('body', 'CONTENT',['class' => 'form-label mt-4'])}}
   {{Form::textarea('body','',[ 'id' => 'editor','class' => 'form-control mt-2 ', 'placeholder' => 'Input Content Here.....'])}}
   {{ Form::submit('Submit', ['class' => 'btn btn-primary mt-3']) }}



</div>
   {!! Form::close() !!}
@endsection