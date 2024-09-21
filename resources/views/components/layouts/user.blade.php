<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
</head>

<body class="overflow-x-hidden">
    <header>
        <nav class="flex justify-evenly items-center px-16 fixed w-full h-[80px] bg-jt-primary">
            <div class="w-[200px] max-w-[200px]">
                <input type="text" placeholder="Search" class="input-def rounded-xl">
            </div>
            <ul class="flex space-x-8 text-white">
                <li>Home</li>
                <li>Friends</li>
                <li>Groups</li>
                <li>Profile</li>
            </ul>
            <div class="w-[200px] max-w-[200px]">
                <form method="POST" action="/logout">
                    @csrf
                    <button class="px-4 py-2 font-bold text-white bg-red-500">LOGOUT</button>
                </form>
            </div>
        </nav>
    </header>
    <main class="flex items-center justify-center w-full h-screen">
        {{$slot}}
    </main>
</body>

</html>