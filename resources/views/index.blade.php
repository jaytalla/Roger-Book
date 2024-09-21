<x-layouts.guest>
    <h1 class="text-red-500">Testing</h1>
    <h1 class="text-red-500">Testing</h1>
    <livewire:counter>
    <div class="w-full h-screen mb-32 bg-red-500"></div>
    {{-- <livewire:scroll-animate> --}}
    <x-anim.horizontal :rtl="true" duration="2000" :once="false">
        <h2>testing</h2>
    </x-anim.horizontal>

    <x-anim.horizontal :rtl="false" duration="3000">
        <h2>testing</h2>
    </x-anim.horizontal>

    <x-anim.horizontal :rtl="true" duration="1000">
        <h2>testing</h2>
    </x-anim.horizontal>

</x-layouts.guest>