<!DOCTYPE html>
<html lang="en" dir="ltr">

{{-- includo la sezione head --}}
@include ('layouts.head')

<body>
    @include ('layouts.header')

    {{-- qui verrà esteso il corpo della view --}}
    @yield('content')

    {{-- includo gli scripts --}}
    @include ('layouts.scripts')

    {{-- includo il footer --}}
    @include ('layouts.footer')

</body>

</html>