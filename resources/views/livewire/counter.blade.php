<div x-data="{ counter: 0, showButton: true, toggle() { 
        this.counter++; 
        this.showButton = !this.showButton; 
    } 
    }">
    <h1 x-text="counter"></h1>
    <button x-on:click="toggle()">ADD</button><br>
    <button x-show="showButton" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    >WHAT?</button>
</div>