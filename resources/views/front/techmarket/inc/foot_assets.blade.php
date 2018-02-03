 <!-- For demo purposes – can be removed on production : End -->
        <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/hidemaxlistitem.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/hidemaxlistitem.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/scrollup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/waypoints-sticky.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/iziModal.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/iziToast.min.js') }}"></script>
        <!-- For demo purposes – can be removed on production -->
        <script src="{{asset('switchstylesheet/switchstylesheet.js')}}"></script>
        <!-- For demo purposes – can be removed on production : End -->
        <script>
            $(".modal").iziModal();
        </script>
        @if ($errors->any())
         @foreach ($errors->all() as $error)
                 <script type="text/javascript">
                     var message = '<?php echo $error; ?>';
                     iziToast.info({
                         id: 'info',
                         message: message,
                         position: 'topLeft',
                         transitionIn: 'bounceInLeft',
                         // iconText: 'star',
                         onOpened: function(instance, toast){
                             // console.info(instance)
                         },
                         onClosed: function(instance, toast, closedBy){
                         }
                     });
                 </script>
         @endforeach
        @endif