@extends('layouts.layout')

@section('title')
    <title>Criar Tarefa</title>
@endsection

@section('navigation')
    <x-btn secondaryClass="primaryButton">
        <a href="{{route('home')}}">Voltar</a>
    </x-btn>
@endsection

@section('content')
    <section class="formHeader">
        <h2>Criar Categoria</h2>
        <form  method="POST" action="{{route('category.createAction')}}">
            @csrf

            <x-forms.textinput  name='title' label="Categoria" type="text" placeholder="Insira o nome da categoria" required='required'/>

            <x-forms.colorinput name='color' label="Cor" value="#FFF000" required='required'/>

            <x-btn type="reset">Limpar</x-btn>
            <x-btn type="submit" secondaryClass="primaryButton">Criar</x-btn>

            
        </form>
    </section>
@endsection

@section('footer')
@endsection