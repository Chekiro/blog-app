<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <div class="text-gray-800 font-semibold">
            <a href="{{route('home')}}">
            <span class="text-green-500">Food</span> <span class="text-yellow-500">Blog</span>
            </a>
        </div>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.index')">
                    {{ __('Blog') }}
                </x-responsive-nav-link>

            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @auth
        @include('layouts.shared.header-right-auth')
        @else
        @include('layouts.shared.header-right-guest')
        @endauth
    </div>
</nav>