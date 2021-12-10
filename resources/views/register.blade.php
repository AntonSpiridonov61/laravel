@extends('layouts/app')


@section('title')
    Регистрация
@endsection 

@section('content')
<form action="{{ route('reg-form') }}" method="post">
@csrf
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Username:</span><br>
            <input type="text" name="name" class="field__input" placeholder="Введите имя" value="{{ old('name') }}">
            @error("name")
            <div class="error-msg" style="color: red;">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Email:</span><br>
            <input type="email" name="email" class="field__input" value="{{ old('email') }}">
            @error("email")
            <div class="error-msg" style="color: red;">{{ $message }}</div>
            @enderror
        </label>
    </div>
    <div class="form-field">
        <label class="field__label">
            <span for="" class="label-name">Password:</span><br>
            <input type="password" name="password" class="field__input" value="{{ old('password') }}">
            @error("password")
            <div class="error-msg" style="color: red;">{{ $message }}</div>
            @enderror
        </label>
    </div>
    
    <div class="form-field btn-field">
        <button class="btn-submit">Sign up</button>
    </div>

    <!-- <div class="form-field invitation-msg">
        Already have an account?
        <a href="{{ route('log-in') }}">Log in</a>
    </div>
</form>
@endsection