@if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    <div class="container">
        <div class="alert-icon">
            <i class="now-ui-icons ui-2_like"></i>
        </div>
        <strong>Well done!</strong> {{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
        </button>
    </div>
</div>
@endif
{{-- @if ($count($errors)>0)
  <div class="alert alert-warning" role="alert">
    <div class="container">
        <div class="alert-icon">
            <i class="now-ui-icons ui-1_bell-53"></i>
        </div>
        <strong>Warning!</strong> {{Session::get('success')}}
        <ul>
          @foreach ($errors as $error)
             <li>{{$error}}</li>
         @endforeach
        </ul>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
        </button>
    </div>
</div>
@endif --}}
