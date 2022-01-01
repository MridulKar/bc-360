<div class="footer">
    <p>Copyright © <?php echo date("Y"); ?> BC360. All Rights Reserved. 
        <br>Design: <a href="https://softitsecurity.com/" target="_parent" title="free css templates">Soft IT Security</a></p>
  </div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('frontend/assets/js/lightbox.js')}}"></script>
  <script src="{{asset('frontend/assets/js/tabs.js')}}"></script>
  <script src="{{asset('frontend/assets/js/video.js')}}"></script>
  <script src="{{asset('frontend/assets/js/slick-slider.js')}}"></script>
  <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
  <script src="{{asset('frontend/assets/js/script.js')}}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
      @if(session()->has('success'))
      toastr.success("{{session()->get('success')}}");
      @endif
    
      @if(session()->has('error'))
      toastr.error("{{session()->get('error')}}");
      @endif
    
    </script>
</body>

</body>
</html>