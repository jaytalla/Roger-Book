<x-layouts.user>
    <div class="max-w-[1000px] w-full h-screen bg-jt-lite/25 mt-60 p-10">
        <x-home.post username="{{$user->username}}" />
        {{-- <h2>Hello {{$user->username}}</h2> --}}
        
    </div>
</x-layouts.user>