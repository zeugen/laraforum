@extends('layouts.user.app_inner')
<?php $titleTag= htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 ">
        <section class="article-panel">
          <div class="post-attrib">
            <span class="push-right">Posted In: <span>{{$post->category->name}}</span></span>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-12">
              <img  src="{{$post->photo ? $post->photo->file : url('/img/user/postplaceholder.gif')}}" alt="" class=" ">
            </div>
          </div>
          <h2 class="post-title">{{$post->title}}</h2>
          <p class="article-body">{!! $post->body !!}</p>
          <hr>
          <div class="post-attrib">
            <span >Posted By: <span>{{$post->user->name}}</span></span>
          </div>

        </section>


      </div>
    </div>
    {{-- view comment section --}}
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <h2>Comments on this article</h2>
        <hr>

        @foreach ($post->comments as $comment)
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><strong>Name: </strong>{{$comment->name}}</h3>
            </div>
            <div class="panel-body">
              <p class="comment-body"><strong>Comment: </strong><br> {{$comment->comment}}</p>
            </div>

          </div>

        @endforeach
      </div>
    </div>
    {{-- add comment seciton --}}
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <hr>
        <H2>Leave a comment</H2>
        <hr>
        <div id="comment-form">
          {{Form::open(['route'=> ['comments.store', $post->id, 'data-parsley-validate'=>''], 'method'=>'POST'])}}

            <div class="form-group">
              {{Form::label('name', 'Name')}}
              {{Form::text('name', null, ['class'=>'form-control', 'required'=>''])}}

            </div>

            <div class="form-group">
              {{Form::label('email','Email')}}
              {{Form::text('email',null, ['class'=>'form-control','required'=>''])}}

            </div>
            <div class="form-group">
              {{Form::label('comment', 'Comment')}}
              {{Form:: textarea('comment',null, ['class'=>'form-control', 'rows'=>'5','required'=>''])}}

            </div>
            <div class="form-group">
              {{Form::submit('Add Comment', ['class'=>'btn btn-block btn-success btn-submit'])}}

            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>

  </div>

@endsection
