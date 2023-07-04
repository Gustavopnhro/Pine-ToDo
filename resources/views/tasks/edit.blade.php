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
    <h2>Editar Tarefa</h2>
    <form  method="POST" action="{{route('task.editAction')}}">
        @csrf
        <input type="hidden" name="id" value="{{$task->id}}">
        <x-forms.textinput name='title' label="Título" type="text" placeholder="Insira o título da tarefa" required="required" inputValue="{{$task->title}}"/>

        <x-forms.textinput  name='due_date' label="Data de Realização" type="date" required='required' inputValue="{{substr($task->due_date, 0, 10)}}"/>

        <x-forms.selectinput  name='category_id' label="Categoria" >
            @foreach ($categories as $category)
                <option value="{{$category->id}}"
                    @if ($category->id == $task->category->id)
                        selected    
                    @endif
                        >{{$category->title}}</option> 
            @endforeach
        </x-forms.selectinput>

        <x-forms.textinput  name='description' label="Descrição" type="text" placeholder="Insira a descrição" inputValue="{{$task->description}}"/>
        
        <x-forms.radio label="Tarefa Concluída"/>

        <x-btn type="reset">Limpar</x-btn>
        <x-btn type="submit" secondaryClass="primaryButton">Editar</x-btn>
    </form>
</section>


@endsection

@section('footer')
@endsection