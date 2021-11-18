@extends('layouts.app')

@section('content')
<a href="/home" class="btn btn-secondary  m-3">GO BACK</a>
   <h1 class="display-4 text-center ">EDIT POST </h1>
   
   @include('inc.response')
   {!! Form::open(['action'=> ['App\Http\Controllers\PostsController@update', $post->id], 'method' =>'POST' ] )  !!}
<div class="form-group">
   {{ Form::label('title', 'TITLE ',['class' => 'form-label mt-3'])}} 
   {{ Form::text('title',$post->title,['class' => 'form-control mt-2' ])}}
   {{ Form::label('body', 'CONTENT',['class' => 'form-label mt-4'])}}
   {{Form::textarea('body',$post->body,['id' =>'article-ckeditor', 'class' => 'form-control mt-2'])}}
   {{Form::hidden('_method','PUT')}}
   {{ Form::submit('Update', ['class' => 'btn btn-warning mt-3']) }}



</div>
   {!! Form::close() !!}
@endsection