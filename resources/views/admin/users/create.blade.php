@extends('layouts.admin.app')
@section('content')
  <section class="content-header">

    <h1>Users <small>Create and register a new user in the system</small></h1>

  </section>
  {{-- main content --}}
<section class="content">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box box-primary">
        {{-- boxheader --}}


        {{-- </div>box body --}}
        <div class="box-body">
          <div class="panel panel-default">
              <div class="panel-heading">Create a New User</div>
                @include('layouts._formErrors')
              <div class="panel-body">
                {{-- </div>box body --}}
                <div class="box-body">
                {!! Form::open(['method'=>"POST", 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
                  <div class="form-group">

                      {!! Form::label('name', 'Name: ') !!}
                      {!! Form::text('name', null, ['class'=>"form-control"]) !!}
                  </div>
                  <div class="form-group">

                      {!! Form::label('email', 'Email: ') !!}
                      {!! Form::email('email', null, ['class'=>"form-control"]) !!}
                  </div>
                  <div class="form-group">

                      {!! Form::label('is_active', 'Status: ') !!}
                      {!! Form::select('is_active',array(1=>'active', 0=>'Not Active'), 0, ['class'=>"form-control"]) !!}
                  </div>
                   <div class="form-group">

                      {!! Form::label('role_id', 'Role: ') !!}
                      {!! Form::select('role_id', [''=> 'Choose Options'] + $roles, null, ['class'=>"form-control"]) !!}
                  </div>
                    <div class="form-group">

                      {!! Form::label('avatar_path', 'Upload you Avatar (profile picture): ') !!}
                      {!! Form::file('avatar_path', null, ['class'=>"form-control"]) !!}
                  </div>
                  <div class="form-group">

                      {!! Form::label('password', 'Password: ') !!}
                      {!! Form::password('password',  ['class'=>"form-control"]) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::submit('create User', ['class'=> 'btn btn-primary']) !!}
                  </div>
                {!!Form::close() !!}

                </div>

              </div>
          </div>

        </div>


      </div>
    </div>
</section>
@endsection
