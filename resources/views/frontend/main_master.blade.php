@include('frontend.body.header')
<!-- ============================================== HEADER : END ============================================== -->

@yield('content')
<!-- ============================================================= FOOTER ============================================================= -->
@include('frontend.body.footer')
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{ ('frontend/assets/js/jquery-1.11.1.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/bootstrap-hover-dropdown.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/echo.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/jquery.easing-1.3.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/bootstrap-slider.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/jquery.rateit.min.js') }}"></script> 
<script type="text/javascript" src="{{ ('frontend/assets/js/lightbox.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/bootstrap-select.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/wow.min.js') }}"></script> 
<script src="{{ ('frontend/assets/js/scripts.js') }}"></script>
</body>
</html>