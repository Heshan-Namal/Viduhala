@extends('layouts.master')

@section('content')

    <div class="login__hero">
        <div class="login__formbox">
        <p>Login</p>
            <form id="login" action="" class="login__form">
                <input type="text" class="login__inputfeald" placeholder="User name" required>
                <input type="password" class="login__inputfeald" placeholder="Password" required>
                <input type="checkbox" class="login__checkbox"><spam class="login__spam">Remamber password</spam>
                <button type="submit" class="login__submit">Login</button>
            </form>
           

        </div>
        
    </div>
@endsection
