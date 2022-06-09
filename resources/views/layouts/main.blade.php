<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.style')
</head>
<body>
    @include('require.aside')

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            @yield('content')
        </div>
    </section>

    @include('require.footer')
    @include('layouts.js')
</body>
</html>
