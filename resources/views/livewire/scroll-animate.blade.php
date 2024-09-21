<div x-data="{ visible: false }" 
     x-intersect:enter="visible = true" 
     x-intersect:leave="visible = false" 
     class="transition-all duration-[1500ms]"
     :class="{ 'translate-x-0':visible,'opacity-100': visible, 'opacity-0': !visible, 'translate-x-10': !visible }">

    <h1 class="text-center text-4xl font-bold">Scroll to Animate Me</h1>
    <p class="text-center">This text will appear with a fade-in effect.</p>

</div>