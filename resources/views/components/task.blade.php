<div class="task {{$data['is_done'] ? 'is_done' : 'task_pending'}}" >
    <div class="title">
        <input class='taskCheckBox' type="checkbox" {{$data['is_done'] == True ? 'checked' : ''}} onchange="taskUpdate(this)" data-id={{$data['id']}}> 

        <div class="taskTitle">{{$data->title ?? ''}}</div>
    </div>
    <div class="priority">
        <div class="sphere" style="background-color:{{$data->category->color}}"></div>
        <p>{{$data['category']->title ?? '' }}</p>
    </div>
    <div class="actions">
        <a href="{{route('task.edit', ['id' => $data['id']])}}">
            <img src="/images/edit-icon.png" alt="">
        </a>

        <a href="{{route('task.delete', ['id' => $data['id']])}}">
            <img src="/images/trash-icon.png" alt="">
        </a>
    </div>
</div>