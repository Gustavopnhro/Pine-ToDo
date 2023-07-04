@extends('layouts.layout')

@section('title')
    <title>Criar Tarefa</title>
@endsection

@section('navigation')
    <div class="btns">
        <x-btn secondaryClass="primaryButton">
            <a href="{{route('category.create')}}">Criar uma categoria</a>
        </x-btn>
        <x-btn secondaryClass="primaryButton">
            <a href="{{route('home')}}">Voltar</a>
        </x-btn>    
    </div>
   
@endsection

@section('content')
<div class="categoryList">
    <h2>Todas as Categorias</h2>
    @foreach ($categories as $category)
        <x-category :data=$category />
    @endforeach
</div>
@endsection

@section('footer')
@endsection