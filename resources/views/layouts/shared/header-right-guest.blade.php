<div class="flex space-x-5">
    <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
        {{ __('Login') }}
    </x-responsive-nav-link>
    <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
        {{ __('Register') }}
    </x-responsive-nav-link>
</div>