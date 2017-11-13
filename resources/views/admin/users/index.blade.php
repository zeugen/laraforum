@extends('layouts.admin.app')
@section('content')
  <section class="content-header">

    <h1>Users <small>All users registered in the system</small></h1>

  </section>


  {{-- Main Content --}}
  <section class="content">
    <div class="row">
      <div class="col-xs-12 ">
        <div class="box">


        {{-- box header --}}
        <div class="box-header">
          <div class="box-title">
            Users Table
          </div>
          <div class="callout callout-info">
            <h4>Edit User</h4>

            <p>Click on a users name to edit their information.</p>
          </div>
        </div>
        {{-- end box header --}}
        {{-- table --}}
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Id</th>
              <th>Name</th>
              {{-- <th>Avatar</th> --}}
              <th>Email</th>
             <th>Role</th>
              <th>Status</th>
              <th>Confirmed</th>
              <th>Time Created</th>
              <th>Time Updated</th>
            </tr>
            {{-- table body --}}
            @if($users)
              @foreach ($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td><a href="#">{{$user->name}}</a></td>

                  {{-- <td><img height="50" src="{{$user->photo ? $user->photo->file : url('/img/user/userplaceholder.png')}}" alt="" class="user-image img-circle img-th-200"></td> --}}
                  <td>{{$user->email}}</td>
                  <td>{{$user->role->name}}</td>
                  <td>
                    {{$user->is_active==1?'active':'Not ACTIVE'}}
                  </td>
                  <td>
                    {{$user->confirmed==1?'TRUE':'Not CONFIRMED'}}
                  </td>

                  <td>{{$user->created_at->diffForHumans()}}</td>
                  <td>{{$user->updated_at ->diffForHumans()}}</td>
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
