@extends('layouts.layout')

@section('title')
    <title>Login</title>
@endsection

@section('navigation')
    <x-btn secondaryClass="primaryButton">
        <a href="{{route('register')}}">Não possui conta? Registre-se</a>
    </x-btn>

@endsection

@section('content')
<section class="formHeader">
    <h2>Login</h2>
    <form  method="POST" action="{{route('user.loginAction')}}">
        @csrf
        @error('password')
            <div class="error">{{$message}}</div>
        @enderror
        @error('email')
            <div class="error">{{$message}}</div>
        @enderror
        
        <x-forms.textinput  name='email' label="Email" type="email" placeholder="Email" required='required'/>
        
        <x-forms.textinput name='password' label="Senha" type="password" placeholder="Insira a senha" required='required'/>

        <x-btn type="reset">Limpar</x-btn>
        <x-btn type="submit" secondaryClass="primaryButton">Login</x-btn>

        
    </form>
</section>
@endsection

@section('footer')
@endsection