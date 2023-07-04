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
        <h2>Criar Tarefa</h2>
        <form  method="POST" action="{{route('task.createAction')}}">
            @csrf

            <x-forms.textinput name='title' label="Título" type="text" placeholder="Insira o título da tarefa" required='required'/>

            <x-forms.textinput  name='due_date' label="Data de Realização" type="date" required='required'/>

            <x-forms.selectinput  name='category_id' label="Categoria" >
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option> 
                @endforeach
            </x-forms.selectinput>

            <x-forms.textinput  name='description' label="Descrição" type="text" placeholder="Insira a descrição"/>


            <x-btn type="reset">Limpar</x-btn>
            <x-btn type="submit" secondaryClass="primaryButton">Criar</x-btn>

            
        </form>
    </section>
@endsection

@section('footer')
@endsection