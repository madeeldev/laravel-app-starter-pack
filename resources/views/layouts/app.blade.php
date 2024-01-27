<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('assets.links')

    <!-- custom styles -->
    @yield('styles')
</head>
<body>
    <header>
        @include('components.header')
    </header>
    @include('components.sidebar')
    
    <main>
        
        <main id="main" class="main">
            @include('components.breadcrumb')

            @yield('content')
        </div>
    </main>
    <footer>
        @include('components.footer')
    </footer>

    @include('assets.scripts')

    <!-- custom scripts -->
    @yield('scripts')
</body>
</html>