@extends('layouts.layout')

@section('title')
    <title>Inicio</title>
@endsection

@section('navigation')

    <div class="btns">
        <x-btn secondaryClass="primaryButton">
            <a href="{{route('category.view')}}">Categorias</a>
        </x-btn>

        <x-btn secondaryClass="primaryButton">
            <a href="{{route('task.create')}}">Criar uma tarefa</a>
        </x-btn>

        <x-btn secondaryClass="logoutButton">
            @if ($authUser)
                <a href="{{route('logout')}}">Sair</a>
            @else
                <a href="{{route('login')}}">Login</a>
            @endif
        </x-btn>

        

            
        

    </div>

    
    
@endsection

@section('content')
<section class="graph">
    <div class="graphHeader">
        <h2>Progresso Diário</h2>
        <div class="graphHeaderDate">
            <a href="{{route('home', ['date' => $date_prev_button])}}">
                <img src="/images/prev-icon.png" alt="">
            </a>
            {{$date_as_string}}
            <a href="{{route('home', ['date' => $date_next_button])}}">
                <img src="/images/next-icon.png" alt="">
            </a>
        </div>
    </div>
    <div class="graphHeaderSubtitle">
        <p>Tarefas</p>
    </div>

    <div class="graphPlaceholder">
        <div class="graphProgress">
            <div class="graphProgressTasks">
                <p>{{$done_tasks}}/{{$tasks_count}}</p>

            </div>  
        </div>
    </div>
    <div class="tasksLeft"> 
        <img src="/images/warning-icon.png" alt="">
        <div>Restam {{$undone_tasks_count}} tarefas a serem realizadas</div>
    <div>
</section>
<section class="list">
    <div class="listHeader">
        <select class="taskHeaderList" onchange="changeTaskStatusFilter(this)" name="taskHeaderList" >
            <option value="all_tasks">Todas Categorias</option>
            <option value="pending_tasks">Tarefas Pendentes</option>
            <option value="done_tasks">Todas Realizadas</option>
        </select>
    </div>
    <div class="taskList">
        @foreach ($tasks as $task)
            <x-task :data=$task />
        @endforeach
    </div>
    
</section>

<script>
    async function taskUpdate(element){
        let status = element.checked;
        let taskId = element.dataset.id;
        let url = '{{route('task.update')}}'; 
        let csrfToken = '{{csrf_token()}}'; 
        let rawResult = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-type': 'application/json',
                'accept': 'application/json'
            },
            body: JSON.stringify({status, taskId, _token: csrfToken})
        });

        let result = await rawResult.json();

        if (result.success){    
            element.checked = status;
            contarCheckboxesMarcados()
            
        } else {
            element.checked = !status;
        }    

    }

    function changeTaskStatusFilter(element){
        showAllTasks()
        if (element.value == 'pending_tasks'){
            document.querySelectorAll('.is_done').forEach(function(element){
                element.style.display = 'none';
            })
        } else if (element.value == 'done_tasks'){
            document.querySelectorAll('.task_pending').forEach(function(element){
                element.style.display = 'none';
            })
        }
    
    }
    function showAllTasks(){
        document.querySelectorAll('.task').forEach(function(element){
                element.style.display = '';
            })
    }

    let taskCheckBoxes = document.querySelectorAll('input');

    function contarCheckboxesMarcados(){
        let contador = 0;
        taskCheckBoxes.forEach(checkbox => {
            if (checkbox.checked) {
                contador++;
            };
        });
        document.querySelector("body > div > main > section.graph > div.graphPlaceholder > div > div > p").textContent = contador+'/'+{{$tasks_count}};
        document.querySelector("body > div > main > section.graph > div.tasksLeft > div:nth-child(2)").textContent = 'Restam '+(({{$tasks_count}}-contador) >= 1 ? ({{$tasks_count}}-contador) : '0' )+' tarefas a serem realizadas';
    };
        

    
</script>
@endsection

@section('footer')
@endsection