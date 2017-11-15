@extends('layouts.admin.app')
@section('title', '| Admin Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit / Delete Category</div>

                <div class="panel-body">
                  {{--  box body --}}
                  <div class="box-body">
                  {!! Form::model($category, ["method"=>"PATCH", 'action'=> ["AdminCategoriesController@update", $category->id]]) !!}
                  <div class="form-group">
                    {!! Form::label('name', 'Name: ') !!}
                    {!!Form::text('name', null, ['class'=>"form-control"]) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::submit('Update Category', ['class'=> 'btn btn-block  btn-primary']) !!}
                  </div>
                  {!! Form::close() !!}
                  {!! Form::open( ["method"=>"DELETE", 'action'=> ["AdminCategoriesController@destroy", $category->id]]) !!}

                  <div class="form-group">
                    {!! Form::submit('Delete Category', ['class'=> 'btn btn-block  btn-danger']) !!}
                  </div>
                  {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
