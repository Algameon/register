<!--This file allows you to send a message/errors to the supported pages-->
@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{$session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{$session('error') }}
    </div>
@endif