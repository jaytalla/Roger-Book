@props(['post'])
<div class="w-full h-fit max-h-[300px] shadow-xl bg-white px-4 py-2 rounded-xl">
    <div class="flex items-center justify-start gap-x-2">
        <div class="w-[30px] h-[30px] rounded-full bg-jt-yellow"></div>
        {{-- <p>Username {{ $post->user->username }}</p> --}}
    </div>
    <hr class="my-2">
    <p>{{ucfirst($post->post_desc)}}</p>
    <hr class="my-2">
    <ul>
        <li wire:click="like" class="flex cursor-pointer gap-x-2">
            @if ($isLiked === false)
                <x-iconpark-like-o class="w-[20px]" />Like
            @else
                <x-iconpark-like class="w-[20px] text-red-500" />Like
            @endif
        </li>
    </ul>
</div>