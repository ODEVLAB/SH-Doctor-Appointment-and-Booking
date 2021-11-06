@if(session()->has('success'))
    <p x-data="{ show:true }"
       x-init="setTimeout(() => show=false,4000)"
       x-show="show"
       class="bg-blue-500 fixed rounded bottom-3 text-white p-4 right-5">
        {{ session('success') }}
    </p>
@endif
