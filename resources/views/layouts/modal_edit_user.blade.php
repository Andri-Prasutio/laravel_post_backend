<!-- Modal EDIT -->
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="Myform">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Roles</label>
                        <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                                <input type="radio" name="roles" value="ADMIN" class="selectgroup-input"
                                    @if ($user->roles == 'ADMIN') checked @endif>
                                <span class="selectgroup-button">Admin</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="roles" value="STAFF" class="selectgroup-input"
                                    @if ($user->roles == 'STAFF') checked @endif>
                                <span class="selectgroup-button">Staff</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="roles" value="USER" class="selectgroup-input"
                                    @if ($user->roles == 'USER') checked @endif>
                                <span class="selectgroup-button">User</span>
                            </label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer" style="margin-top: -2rem">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
