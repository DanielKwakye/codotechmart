<style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">


<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('couriers/assets/images/icons/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('couriers/assets/images/icons/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('couriers/assets/images/icons/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('couriers/assets/images/icons/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{asset('couriers/assets/images/icons/favicon.png')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/bootstrap/css/bootstrap.css')}}">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/backgrounds.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/boilerplate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/border-radius.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/grid.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/page-transitions.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/spacing.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/typography.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/utils.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/colors.css')}}">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/badges.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/buttons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/content-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/dashboard-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/forms.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/images.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/info-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/invoice.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/loading-indicators.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/menus.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/panel-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/response-messages.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/responsive-tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/ribbon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/social-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/tile-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/elements/timeline.css')}}">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/icons/fontawesome/fontawesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/icons/linecons/linecons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/icons/spinnericon/spinnericon.css')}}">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/accordion-ui/accordion.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/calendar/calendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/carousel/carousel.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/charts/justgage/justgage.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/charts/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/charts/piegage/piegage.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/charts/xcharts/xcharts.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/chosen/chosen.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/colorpicker/colorpicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/datatable/datatable.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/datepicker/datepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/datepicker-ui/datepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/dialog/dialog.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/dropdown/dropdown.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/dropzone/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/file-input/fileinput.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/input-switch/inputswitch.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/input-switch/inputswitch-alt.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/ionrangeslider/ionrangeslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/jcrop/jcrop.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/jgrowl-notifications/jgrowl.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/loading-bar/loadingbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/maps/vector-maps/vectormaps.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/markdown/markdown.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/modal/modal.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/multi-select/multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/multi-upload/fileupload.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/nestable/nestable.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/noty-notifications/noty.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/popover/popover.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/pretty-photo/prettyphoto.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/progressbar/progressbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/range-slider/rangeslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/slidebars/slidebars.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/slider-ui/slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/tabs-ui/tabs.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/theme-switcher/themeswitcher.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/timepicker/timepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/tocify/tocify.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/tooltip/tooltip.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/touchspin/touchspin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/uniform/uniform.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/wizard/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/widgets/xeditable/xeditable.css')}}">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/snippets/chat.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/snippets/files-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/snippets/login-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/snippets/notification-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/snippets/progress-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/snippets/todo.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/snippets/user-profile.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/snippets/mobile-navigation.css')}}">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/applications/mailbox.css')}}">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/themes/admin/layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/themes/admin/color-schemes/default.css')}}">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/themes/components/default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/themes/components/border-radius.css')}}">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/responsive-elements.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('couriers/assets/helpers/admin-responsive.css')}}">

    <!-- JS Core -->

    <script type="text/javascript" src="{{asset('couriers/assets/js-core/jquery-core.js')}}"></script>
    <script type="text/javascript" src="{{asset('couriers/assets/js-core/jquery-ui-core.js')}}"></script>
    <script type="text/javascript" src="{{asset('couriers/assets/js-core/jquery-ui-widget.js')}}"></script>
    <script type="text/javascript" src="{{asset('couriers/assets/js-core/jquery-ui-mouse.js')}}"></script>
    <script type="text/javascript" src="{{asset('couriers/assets/js-core/jquery-ui-position.js')}}"></script>
    <!--<script type="text/javascript" src="couriers/assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="{{asset('couriers/assets/js-core/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('couriers/assets/js-core/jquery-cookie.js')}}"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>
