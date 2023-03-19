@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-0 transform bg-slate-500 text-white px-48 left-1/2 -translate-x-1/2 py-3">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
