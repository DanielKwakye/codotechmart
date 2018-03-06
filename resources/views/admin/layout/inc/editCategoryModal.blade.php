    <form method="POST" action="{{ url('admin/editCategory') }}">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Shop Category</h4>
                </div>
                <div class="modal-body">
                    
                        {{ csrf_field() }} 
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="hidden" name="id" class="id">
                            <input type="text" name="name" class="form-control name">
    
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