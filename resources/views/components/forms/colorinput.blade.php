<div class="inputArea">
    <label>{{$label}}</label>
    <input name="{{$name}}" class="{{$name}}" id={{$name}} type="color" {{empty($required) ? '' : 'required'}} value="{{empty($inputValue) ? "" : $inputValue}}">
    
</div>