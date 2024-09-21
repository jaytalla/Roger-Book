@props(['name', 'lblname' => null, 'placeholder', 'required' => true, 'type' => 'text', 'col' => '4', 'username'])

<div class="flex flex-col gap-y-2">
    @if (!$lblname == null)
    <label for="{{$name}}">{{$lblname}}</label>
    @endif
    <textarea autofocus placeholder="What's on your mind, {{$username}}?" class="py-4 resize-none input-def"></textarea>
</div>
@error($name)
<p class="text-sm italic text-red-500">{{$message}}</p>
@enderror