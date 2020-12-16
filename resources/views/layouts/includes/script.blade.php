<!-- Js Plugins -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/mixitup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/default.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- owl js -->
<script src="{{asset('js/layout/jquery.min.js')}}"></script>
<script src="{{asset('js/layout/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function () {        
        $(function() {
            $('.nav-item a[href^="/' + location.pathname[1] + '"]').addClass('highlight');
        });  
    });
</script>