@extends('layouts.layout')

@section('title')
    <title>Editar Tarefa</title>
@endsection

@section('navigation')
    <x-btn secondaryClass="primaryButton">
        <a href="{{route('home')}}">Voltar</a>
    </x-btn>
@endsection

@section('content')
<section class="formHeader">
    <h2>Editar uma categoria</h2>
   <form action="{{route('category.editAction')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}">
        <x-forms.textinput  label="Categoria" name='title' type="text"  placeholder="Insira o nome da categoria" value='{{$category->title}}' inputValue="{{$category->title}}"/>

        <x-forms.colorinput name='color' label="Cor" inputValue="{{$category->color}}" />

        <x-btn type="reset">Limpar</x-btn>
        <x-btn type="submit" secondaryClass="primaryButton">Editar</x-btn>

    </form>
</section>


@endsection

@section('footer')
@endsection