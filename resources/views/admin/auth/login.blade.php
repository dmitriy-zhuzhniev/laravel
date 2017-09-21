@extends('admin.layout.auth')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="card card-login card-hidden">
            <div class="card-header text-center">
                {{--<h4 class="card-title">Tech Me</h4>--}}
            </div>
            <div class="card-content">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">face</i>
                    </span>
                    <div class="form-group label-floating">
                        <label class="control-label">Email</label>
                        <input type="text" class="form-control @if ($errors->has('email')) has-error @endif" name="email" value="{{ old('email') }}" autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                    </span>
                    <div class="form-group label-floating">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control @if ($errors->has('password')) has-error @endif" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember
                    </label>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-wd btn-lg">Sign In</button>
            </div>
        </div>
    </form>
@endsection