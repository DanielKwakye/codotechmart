@extends('administration.layout.base')
@section('styles-below')

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/fileinput.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/selects/select2.min.css')}}">
{{-- <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/file-uploaders/dropzone.min.css')}}"> --}}
<style type="text/css">
	.hide{
		visibility: hidden!important;
	}
</style>
@endsection
@section('content')
<section id="basic-form-layouts">
	<div class="row match-height">
		@include('administration.layout.notifications')
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Add New Product</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
							<li><a data-action="reload"><i class="icon-reload"></i></a></li>
							<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
							{{-- <li><a data-action="close"><i class="icon-cross2"></i></a></li> --}}
						</ul>
					</div>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" action="{{url('administration/addnewbranch')}}">
							{{csrf_field()}}
							<div class="form-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">Product Name</label>
											<input type="text" id="name" class="form-control" placeholder="Branch Name" name="name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">Product Type</label>
											<select class="form-control" name="producttype">
												<option>Select Product Type</option>
												<option value="simple">Simple Product</option>
												<option value="grouped">Grouped Product</option>
												<option value="external">External/Affiliate Product</option>
												<option value="variable">Variable Product</option>
											</select>
										</div>
									</div>
								</div>
								
								{{-- tabs here --}}
								<ul class="nav nav-tabs nav-underline no-hover-bg">
							<li class="nav-item">
								<a class="nav-link active" id="settingstab" data-toggle="tab" aria-controls="settings" href="#settings" aria-expanded="true">Basic Setting</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="quantitiestab" data-toggle="tab" aria-controls="quantities" href="#quantities" aria-expanded="false">Quantities</a>
							</li>
							{{-- <li class="nav-item">
								<a class="nav-link" id="deliverytab" data-toggle="tab" aria-controls="delivery" href="#delivery" aria-expanded="false">Delivery</a>
							</li> --}}
							<li class="nav-item">
								<a class="nav-link" id="branchestab" data-toggle="tab" aria-controls="branches" href="#branches" aria-expanded="false">Branches</a>
							</li>
						</ul>
						<div class="tab-content px-1 pt-1">
							<div role="tabpanel" class="tab-pane active" id="settings" aria-expanded="true" aria-labelledby="base-tab31">
								<div class="row">
									<div class="col-sm-8">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label>Short Description</label>
													<textarea class="form-control" rows="3" name="description">Add Product Descrption</textarea>
												</div>
											</div>
											<div class="col-sm-12">
												 <div class="form-group">
									                <label>Select Category</label>
									                <?php echo App\Category::attr(['name' => 'parent_id'])->renderAsDropdown(); ?>
									            </div>
											</div>
											<div class="col-sm-12">
												<label>Tags</label>
												<?php  $tags = \App\Tag::all();?>
												<select class="form-control" name="tags[]" id="tags" multiple="multiple">
												@foreach($tags as $t)												
												<option>{{$t->name}}</option>
												@endforeach
											</select>
											</div>

											<div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="file" multiple id="input-id" name="images[]">
                                                </div>
                                            </div>
											
											{{-- <div class="col-sm-4" style="margin-top: 20px">
												
												<div class="repeater-default">
                            <div data-repeater-list="car">
                                <div data-repeater-item>
                                    <div class="row">
                                    	<div class="col-sm-3"></div>
                                    	<div class="col-sm-3"></div>
                                    	<div class="col-sm-3"></div>
                                    	<div class="col-sm-3">
                                    		<button type="button" class="btn btn-danger" data-repeater-delete> <i class="icon-cross2"></i> Delete</button>
                                    	</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group overflow-hidden">
                                <div class="col-xs-12">
                                    <button data-repeater-create type="button" class="btn btn-secondary">
                                        <i class="icon-plus4"></i> Add Feature
                                    </button>
                                </div>
                            </div>
                        </div>
												
											</div> --}}
										</div>
									</div>
									<div class="col-sm-4">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label for="quantity">Quantity</label>
													<input type="text" id="quantity0" class="form-control" name="quantity0">
										       </div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<label for="price">Price</label>
													<input type="text" id="price" class="form-control" name="price">
										       </div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<label>Condition</label>
													<select class="form-control" name="condition">
														<option value="new">New</option>
														<option value="used">Used</option>
														<option value="refurbished">Refurbished</option>
													</select>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<label for="barcode">Barcode</label>
													<input type="text" id="barcode" class="form-control" name="barcode">
										       </div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="tab-pane" id="quantities" aria-labelledby="base-tab32">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">Quantity</label>
											<input type="text" id="quantity1" class="form-control" placeholder="Quantity" name="quantity1">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">Minimum quantity for sale</label>
											<input type="text" id="minimum" class="form-control" placeholder="Minimum quantity for sale" name="minimum">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">Availability preferences</label>
											<fieldset class="radio">
							                  <label>
							                    <input type="radio" name="availability" value="deny">
							                    Deny orders
							                  </label>
							              </fieldset>
							              <fieldset class="radio">
							                  <label>
							                    <input type="radio" name="availability" value="allow">
							                    Allow orders
							                  </label>
							              </fieldset>
										</div>
									</div>
								</div>
							</div>
							{{-- <div class="tab-pane" id="delivery" aria-labelledby="base-tab33">
								<p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
							</div> --}}
							<div class="tab-pane" id="branches" aria-labelledby="base-tab33">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
										<label for="name">Product is available in these branches</label>
										<?php  $branches = \App\Branch::get(['id','name']); ?>
										@foreach($branches as $b)
									<fieldset class="checkboxsas">
					                      <label>
					                        <input type="checkbox" name="{{$b->id}}" value="{{$b->id}}">
					                           {{$b->name}}
					      				</label>
					                 </fieldset>
					                 @endforeach
					              </div>
					              </div>
								</div>
							</div>
						</div>
							
								
							     {{-- end --}}
								</div>

							<div class="form-actions">
								<button type="submit" class="btn btn-success">
									<i class="icon-check2"></i> Add Product
								</button>
								<button type="button" class="btn btn-danger mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts-below')
<script src="{{asset('admin-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('admin-assets/js/core/fileinput.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('admin-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}" type="text/javascript"></script>
 {{--  <script src="{{asset('admin-assets/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script> --}}
<script type="text/javascript">
	$("#parent_id").select2({placeholder:"Select Product Category"});
	$("#tags").select2({placeholder:"Select Product Tags"});
	 $("#input-id").fileinput({
        allowedFileExtensions : ['jpg', 'png','gif', 'pdf', 'jpeg'],
        overwriteInitial: false,
        maxFileSize: 1000,
        uploadAsync:false,
        maxFilesNum: 10,  
        sortable:true,     
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
  });
	 $('.repeater-default').repeater();
</script>



@endsection




