@extends('layouts.admin.app')
@section('title', '| all Posts')
@section('content')
  <section class="content-header">

    <h1>Posts <small>View of all posts created by all Authors</small></h1>

  </section>



    {{-- Main Content --}}
    <section class="content">
      <div class="row">
        <div class="col-xs-12 ">
          <div class="box">


          {{-- box header --}}
          <div class="box-header">
            <div class="box-title">
              Posts Table
            </div>
            <div class="callout callout-info">
              <h4>All Posts</h4>

              <p>Click on a Posts' name to edit</p>
            </div>
          </div>
          {{-- end box header --}}
          {{-- table --}}
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Id</th>
                <th>Owner</th>
                <th>Category id</th>
                <th>Post Photo</th>
                <th>Title</th>
                <th>Body</th>
                <th>Time Created</th>
                <th>Time Updated</th>
                <th class="text-green">ACTIONS</th>

              </tr>
              {{-- table body --}}
              @if($posts)
                @foreach ($posts as $post)
                  <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category?$post->category->name: "uncategorized"}}</td>
                    <td><img  src="{{$post->photo ? $post->photo->file : url('/img/user/postplaceholder.gif')}}" alt="" class=" img-th-200"></td>
                    <td>{{$post->title}}</td>
                    <td>{{str_limit($post->body,15)}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at ->diffForHumans()}}</td>
                    {{-- <td><a href="{{route('admin.posts.edit', $post->id)}}" class="text-aqua">Edit Post</a></td> --}}

                  </tr>
                @endforeach

              @endif
            </table>

          </div>
        </div>
        </div>
      </div>
    </section>

@endsection
