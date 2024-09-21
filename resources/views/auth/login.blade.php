<x-layouts.guest>

    <div class="flex flex-col items-center justify-center w-full h-screen bg-blue-950">
        <div class="flex flex-col items-center justify-center -mt-10">
            <img src="{{asset('assets/roger2.png')}}" class="w-[200px]" alt="">
            <form method="POST" action="/login" class="p-6 space-y-4 bg-white shadow-xl shadow-black/25 min-w-[400px] -mt-10 rounded-xl">
                @csrf
                {{-- <fieldset>Login Here</fieldset> --}}
                <x-form.field name="username" lblname="Username" placeholder="Username" />
                <x-form.password name="password" lblname="Password" placeholder="Password" type="password" />

                <button class="w-full py-2 font-bold text-white bg-blue-500 h-fit hover:bg-blue-700">LOGIN</button>
                <hr>
                <div class="flex flex-col items-center gap-y-4">
                    <p>or</p>
                    <p>Doesn't have an account? <a href="/register" class="font-bold text-blue-500">Create Account!</a></p>
                </div>
            </form>
        </div>
    </div>

</x-layouts.guest>