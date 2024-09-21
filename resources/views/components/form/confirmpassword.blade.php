@props(['name', 'lblname' => null, 'placeholder', 'required' => true])

<div x-data="{showPass: false, pass: '', cpass: '',passMatch: true, checkPass() {
        if (this.pass !== this.cpass) {
            console.log('Passwords do not match!');
            this.passMatch = false
        } else {
            console.log('Passwords match!');
            this.passMatch = true
        }
    }}" class="flex flex-col gap-y-2">

    @if ($lblname !== null)
    <label for="{{$name}}">{{$lblname}}</label>
    @endif
    <!-- Password Input -->
    <input x-model="pass" @input="checkPass" :type="showPass ? 'text' : 'password'" name="{{$name}}" id="{{$name}}"
        class="px-4 py-2 border-[1px]" :class="{'border-red-500': !passMatch}" placeholder="{{$placeholder}}" {{$required===true ? 'required' : '' }}>

    <!-- Confirm Password Input -->
    <label for="password_confirmation">Confirm Password</label>
    <input x-model="cpass" @input="checkPass" :type="showPass ? 'text' : 'password'" name="password_confirmation"
        id="password_confirmation" :class="{'border-red-500': !passMatch}" class="px-4 py-2 border-[1px]" placeholder="Confirm {{$placeholder}}"
        {{$required===true ? 'required' : '' }}>

    <!-- Show Password Checkbox -->
    <div>
        <input type="checkbox" @change="showPass = !showPass">
        <label>Show Password</label>
    </div>
</div>

<!-- Error Handling -->
@error($name)
<p class="text-sm italic text-red-500">{{$message}}</p>
@enderror