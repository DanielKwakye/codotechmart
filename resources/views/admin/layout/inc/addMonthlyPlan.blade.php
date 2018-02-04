    <form method="POST" action="{{ url('admin/addMonthlyPlan') }}">
    <div class="modal fade" id="monthlyPlan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Monthly Plan</h4>
                </div>
                <div class="modal-body">
                    
                        {{ csrf_field() }} 
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            
                                <select class="form-control" name="month">
                                    <option>Select Service</option>
                                    <option value="courier">Courier</option>
                                    <option value="shop">Shop</option>
                                </select>
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            
                                <select class="form-control" name="month">
                                    <option>Select Month</option>
                                    <option value="1">1 Months</option>
                                    <option value="3">3 Months</option>
                                    <option value="6">6 Months</option>
                                    <option value="9">9 Months</option>
                                    <option value="12">1 Year</option>
                                </select>
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <input type="text" name="amount" class="form-control" placeholder="GHC Amount">
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                        </div>

                    
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>