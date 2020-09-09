<!doctype html>
<html>
 @include('layouts.includes.head')
<body>
    <div id="app">
        @include('layouts.includes.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.includes.footer')
    @include('layouts.includes.script')
    @yield('scripts')
</body>
</html>
