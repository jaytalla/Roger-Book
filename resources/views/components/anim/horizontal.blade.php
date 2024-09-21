@props(['duration' => '1000', 'rtl' => true, 'once' => true])

<div x-data="{visible: false}" 
    x-intersect:enter="visible = true"
    x-intersect:leave="visible = false"
    class="flex {{$rtl === true ? 'justify-start' : 'justify-end'}} w-full h-fit bg-red"
    >
    @if ($rtl === true)
        <div class="transition-transform transform"
            :class="{ '-translate-x-10 opacity-0': !visible, 'translate-x-10 opacity-100': visible }"
            x-transition:enter="duration-[{{$duration}}ms]"
            >
            {{$slot}}
        </div>
    @else
        <div class="transition-transform transform"
            :class="{ 'translate-x-10 opacity-0': !visible, '-translate-x-10 opacity-100': visible }"
            x-transition:enter="duration-[{{$duration}}ms]"
            >
            {{$slot}}
        </div>
    @endif
</div>