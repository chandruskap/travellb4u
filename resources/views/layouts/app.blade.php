<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
@include('partials.head')

<head>
    <!-- Page Title -->
    <title>Travell b4u - @yield('title')</title>

<body>
    <div id="page-wrapper">
        @include('partials.menu')
        @yield('contents')
        @include('partials.footer')
    </div>
    
    @include('partials.scripts')

</body>

</html>
