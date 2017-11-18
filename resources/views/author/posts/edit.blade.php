@extends('layouts.admin.app')
@section('title', '| create new post')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit  post</h1></div>
                @include('layouts._formErrors')
                <div class="panel-body">

                  {!! Form::model($post,['method'=>'PATCH', 'action'=>['AuthorController@update',$post->id], 'files'=>true ]) !!}
                    <div class="form-group">
                      {!! Form::label('title', 'Title: ') !!}
                      {!! Form::text('title', null, ['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                      {!! Form::label('category_id', 'Category: ') !!}
                      {!! Form::select('category_id', [""=>"Choose a category"]+$categories, null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('photo_id', 'Photo: ') !!}
                      {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                      {!! Form::label('body', ' Body: ') !!}
                      {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                    {!! Form::submit('Edit Post', ['class'=> 'btn btn-block btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id   ]]) !!}

                    <div class="form-group">
                      {!! Form::submit('Delete Post', ['class'=> 'btn btn-block  btn-danger']) !!}
                    </div>


                    {!! Form::close() !!}
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
