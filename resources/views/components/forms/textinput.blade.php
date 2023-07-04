<div class="inputArea">
    <label>{{$label}}</label>
    <input name="{{$name}}" id="{{$name}}" class="{{$name}}" type="{{empty($type) ? 'text' : $type }}" placeholder="{{$placeholder ?? ''}}" {{empty($required) ? "" : "required"}} value="{{$inputValue ?? ""}}">
    
</div>