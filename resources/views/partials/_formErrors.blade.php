@if(count($errors)>0)
<div class="box box-solid">
  <div class="box-header with-border">
    <h3 class="box-title lead">Errors were found!</h3>
  </div>
  {{-- end box header --}}
  <div class="box-body">
    <ol>

        @foreach ($errors -> all() as $error)
          <li class="text-yellow">{{$error}}</li>
        @endforeach

    </ol>
  </div>
</div>
@endif {{--only show if errors were found --}}
