@extends('layouts.layout')

@section('title')
    <title>Registrar</title>
@endsection

@section('navigation')
    <x-btn secondaryClass="primaryButton">
        <a href="{{route('login')}}">Já possui conta? Faça o login</a>
    </x-btn>
@endsection

@section('content')
<section class="formHeader">
    <h2>Registrar</h2>
    <form  method="POST" action="{{route('user.registerAction')}}">
        @csrf
        @error('password')
            <div class="error">{{$message}}</div>
        @enderror
        @error('name')
            <div class="error">{{$message}}</div>
        @enderror
        @error('email')
            <div class="error">{{$message}}</div>
        @enderror

        <x-forms.textinput name='name' label="Nome de Usuário" type="text" placeholder="Usuário" required='required'/>
        
        <x-forms.textinput  name='email' label="Email" type="email" placeholder="exemplo@gmail.com" required='required' />
        
        <x-forms.textinput name='password' label="Senha" type="password" placeholder="Insira a senha" required='required'/>
        

        <x-forms.textinput name='password_confirmation' label="Confirmação de senha" type="password" placeholder="Insira a senha novamente" required='required'/>
        
        



        <x-btn type="reset">Limpar</x-btn>
        <x-btn type="submit" secondaryClass="primaryButton">Enviar</x-btn>

        
    </form>
</section>
@endsection

@section('footer')
    
@endsection