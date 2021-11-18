@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class="table table-striped">
                       <tr>
                           <th>Title</th>
                           <th></th>
                           <th></th>
                       </tr>
                       @foreach($posts as $post)
                       <tr class="mt-3">
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning ">EDIT</a></td>
                        <td>
                         {!! Form::open(['action'=> ['App\Http\Controllers\PostsController@destroy',$post->id], 'method' =>'POST' ] )  !!}

                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('DELETE', ['class' => 'btn btn-danger '])}}                        
                        
                         {!! Form::close() !!}
                    </td>  
                       </tr>
                       @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
