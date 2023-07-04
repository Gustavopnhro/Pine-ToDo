<div class="inputArea">
    <label>{{$label}}</label>
    <select name="{{$name}}" id="{{$name}}" >
        <option value="" disabled selected>Escolha a categoria</option>

       {{$slot}}
    </select>  
</div>

