@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
            <div class="panel panel-default">
                <h1>Reset Password</h1>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail Address</label>

                           
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                           
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
</div>
@endsection
