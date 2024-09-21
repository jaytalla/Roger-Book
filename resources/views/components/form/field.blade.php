@props(['name', 'lblname' => null, 'placeholder', 'required' => true, 'type' => 'text'])

<div class="flex flex-col gap-y-2">
    @if (!$lblname == null)
        <label for="{{$name}}">{{$lblname}}</label>
    @endif
    <input type="text" name="{{$name}}" id="{{$name}}" class="px-4 py-2 border-[1px]" placeholder="{{$placeholder}}" {{$required === true ? 'required' : ''}}>
</div>
@error($name)
<p class="text-sm italic text-red-500">{{$message}}</p>
@enderror