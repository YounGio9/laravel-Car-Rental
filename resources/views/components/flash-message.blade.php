@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-4 transform bg-slate-500 rounded-full text-white px-48 left-1/2 ease-out duration-300  -translate-x-1/2 py-3">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
