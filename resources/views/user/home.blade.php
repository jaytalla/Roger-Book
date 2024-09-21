<x-layouts.user>
    <div class="max-w-[1000px] w-full h-screen bg-jt-lite/25 mt-60 p-10">
        <x-home.post username="{{ $user->username }}" />
        {{-- <h2>Hello {{$user->username}}</h2> --}}
        <div class="flex flex-col w-full p-4 mt-5 h-fit bg-slate-50 gap-y-4">
            @foreach ($posts as $post)
            {{-- <p>{{$post->post_desc}}</p> --}}
            <livewire:post-card :post="$post" />
            @endforeach
        </div>
    </div>
</x-layouts.user>