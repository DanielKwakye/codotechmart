    <!-- WIDGETS -->
    <script type="text/javascript" src="{{asset('couriers/assets/bootstrap/js/bootstrap.js')}}"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="couriers/assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

{{-- <script type="text/javascript" src="couriers/assets/widgets/tooltip/tooltip.js"></script> --}}

<!-- Bootstrap Popover -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/popover/popover.js')}}"></script>

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/progressbar/progressbar.js')}}"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="couriers/assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="couriers/assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->


<script type="text/javascript" src="{{asset('couriers/assets/widgets/superclick/superclick.js')}}"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/input-switch/inputswitch-alt.js')}}"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/slimscroll/slimscroll.js')}}"></script>

<!-- Slidebars -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/slidebars/slidebars.js')}}"></script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/slidebars/slidebars-demo.js')}}"></script>

<!-- PieGage -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/charts/piegage/piegage.js')}}"></script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/charts/piegage/piegage-demo.js')}}"></script>

<!-- Screenfull -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/screenfull/screenfull.js')}}"></script>

<!-- Content box -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/content-box/contentbox.js')}}"></script>

<!-- Overlay -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/overlay/overlay.js')}}"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="{{asset('couriers/assets/js-init/widgets-init.js')}}"></script>

<!-- Theme layout -->

<script type="text/javascript" src="{{asset('couriers/assets/themes/admin/layout.js')}}"></script>
<script type="text/javascript">
    $('.edit').click(function(){
        $('.choose').removeClass('hidden');
    });
    $('.cancel').click(function(){
        $('.choose').addClass('hidden');
    });
</script>



{{-- notification --}}
<script type="text/javascript" src="{{asset('couriers/assets/widgets/jgrowl-notifications/jgrowl.js')}}"></script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/jgrowl-notifications/jgrowl-demo.js')}}"></script>
<script type="text/javascript">
    function notify(text,error){
    	if(error){
    		$.jGrowl(text, {
              sticky: true,
              position: 'top-right',
              theme: 'bg-red'
          });
    	}
    	else{
        $.jGrowl(text, {
              sticky: false,
              position: 'top-right',
              theme: 'bg-blue-alt'
          });
    }
    }
</script>

<!-- Theme switcher -->

<script type="text/javascript" src="{{asset('couriers/assets/widgets/theme-switcher/themeswitcher.js')}}"></script>
@yield('script')
 

