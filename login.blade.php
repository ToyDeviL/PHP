@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="login-container">
    <div class="login-card">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="button-primary">Entrar</button>
        </form>
    </div>
</div>
@endsection
