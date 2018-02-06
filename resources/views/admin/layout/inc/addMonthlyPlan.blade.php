    <form method="POST" class="modalform">
    <div class="modal fade" id="monthlyPlan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        {{ csrf_field() }} 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Update Monthly Plan</h4>
                </div>
                <div class="modal-body">
                    
                        <input type="hidden" name="id" class="id">
                        <div class="form-group">
                            <input type="text" class="form-control month" readonly="">
                            
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