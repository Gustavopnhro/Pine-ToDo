<div class="category" >
    <div class="title">
        <div class="categoryTitle">{{$data->title ?? ''}}</div>
    </div>
    <div class="priority">
        <p>Cor</p>
        <div class="sphere" style="background-color:{{$data->color}}"></div>
    </div>
    <div class="actions">
        <a href="{{route('category.edit', ['id' => $data['id']])}}">
            <img src="/images/edit-icon.png" alt="">
        </a>
        <a href="{{route('category.delete', ['id' => $data['id']])}}">
            <img src="/images/trash-icon.png" alt="">
        </a>
    </div>
</div>