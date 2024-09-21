@props(['username'])

<div x-data="{showPopup: false}" class="flex w-full px-10 py-5 bg-white gap-x-4 h-fit rounded-xl">
    <div class="w-[50px] h-[50px] rounded-full bg-jt-yellow"></div> 
    <div @click="showPopup = true" class="flex items-center justify-start w-full cursor-pointer input-def rounded-xl hover:bg-slate-100">
        <p class="text-black/50">What's on your mind, {{$username}}?</p>
    </div>
    <div x-show="showPopup" class="fixed top-0 left-0 flex items-center justify-center w-full h-screen bg-black/40">
        <form method="POST" action="/post" class="px-10 py-5 bg-white rounded-xl min-w-[800px]">
            @csrf
            <div class="flex justify-end">
                <x-iconpark-close @click="showPopup = false" class="cursor-pointer w-[20px] hover:rotate-180 duration-300 ease-in-out" />
            </div>
            <center><h2>Meow</h2></center>
            <hr class="my-4">
            <x-form.textarea username="{{$username}}" name="post_desc" placeholder="Write something here..." />
            <button type="submit" class="mt-2 button-def">POST</button>
        </form>
    </div>
</div>