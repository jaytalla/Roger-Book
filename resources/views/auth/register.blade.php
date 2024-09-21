<x-layouts.guest>
    <div class="flex items-center justify-center w-full h-screen bg-blue-950">
        <form method="POST" action="/register" class="p-6 space-y-4 bg-white shadow-xl min-w-[400px] rounded-lg">
            @csrf
            <center><h2 class="text-jt-primary">Create Account!</h2></center>

            <!-- Username Field -->
            <x-form.field name="username" lblname="Username" placeholder="Username" />

            <!-- Email Field -->
            <x-form.field name="email" type="email" lblname="Email" placeholder="Email" />

            <!-- Password Fields with Show/Hide Password Toggle -->
            <x-form.confirmpassword name="password" lblname="Password" placeholder="Password" type="password"></x-form.confirmpassword>
            <!-- Submit Button -->
            <button class="w-full py-2 font-bold text-white bg-blue-500 h-fit hover:bg-blue-700">Register</button>

            <hr>

            <!-- Login Link -->
            <div class="flex flex-col items-center gap-y-4">
                <p>or</p>
                <p>Already have an account? <a href="/login" class="font-bold text-blue-500">Login!</a></p>
            </div>
        </form>
    </div>
</x-layouts.guest>
