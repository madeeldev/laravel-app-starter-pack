<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('assets.links')
  
</head>
<body>
    <main>

        <div class="container">
            
            @yield('content')
        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('assets.scripts')

</body>
</html>