<!DOCTYPE html>
<html lang="en">
<head>

    @include('frontend.partials.meta')



    <title>@yield('title') | Tukuklik Vendor</title>


    @stack('before-style')

    @include('frontend.partials.style')

    @stack('after-style')


</head>
<body>

    @include('frontend.partials.navbar')

        <div id="progress">
            <span id="progress-value">
            &#x1F815;
            </span>
        </div>

        @yield('content')

    @include('frontend.partials.footer')

    @stack('before-script')

    @include('frontend.partials.script')

    @stack('after-script')



</body>
</html>















    <!-- All Js -->
    <script src="{ {~ ` set('js/script.js') }}"></script>
</body>
</html>




<!--for getting the form download the code from download button-->
