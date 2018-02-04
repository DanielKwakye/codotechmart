<form method="POST" action="{{ url('admin/addCategory') }}">
    <div class="modal fade" id="myProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title profile"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel-layout">
                                <div class="panel-box">

                                    <div class="panel-content image-box">
                                        <div class="ribbon">
                                            <div class="bg-primary">Shop</div>
                                        </div>
                                        <div class="image-content font-white">

                                            <div class="meta-box meta-box-bottom">
                                                <img src="{{asset('couriers/assets/image-resources/gravatar.jpg')}}" alt="" class="meta-image img-bordered img-circle">
                                                <h3 class="meta-heading name"></h3>
                                                <i class="email">
                                                    <i class="glyph-icon icon-envelope-o"></i>
                                                    samuelaj@gmail.com
                                                </i>
                                                <h4 class="meta-subheading phone"></h4>
                                            </div>

                                        </div>
                                        <img src="{{asset('couriers/assets/image-resources/blurred-bg/blurred-bg-13.jpg')}}" alt="">

                                    </div>
                                    <div class="panel-content pad15A bg-white radius-bottom-all-4">

                                        <div class="clear profile-box">
                                            <ul class="nav nav-pills nav-justified">

                                                <li>
                                                    <a href="{{url('admin/shop/deactivate')}}" class="btn btn-sm bg-google">
                                                        <span class="glyph-icon icon-separator">
                                                            <i class="glyph-icon icon-lock"></i>
                                                        </span>
                                                        <span class="button-content">
                                                            Deactivate
                                                        </span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>  

                </div>
            </div>
        </div>
    </div>
</form>