 <!-- Modal Tambah -->
 <div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('user.store') }}" method="POST">
                     @csrf
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
                                     checked="">
                                 <span class="selectgroup-button">Admin</span>
                             </label>
                             <label class="selectgroup-item">
                                 <input type="radio" name="roles" value="STAFF" class="selectgroup-input">
                                 <span class="selectgroup-button">Staff</span>
                             </label>
                             <label class="selectgroup-item">
                                 <input type="radio" name="roles" value="USER" class="selectgroup-input">
                                 <span class="selectgroup-button">User</span>
                             </label>
                         </div>
                     </div>
                     <div class="form-group ">
                         <label for="password" class="d-block">Password</label>
                         <input id="password" type="password"
                             class="form-control pwstrength @error('password')
                        is-invalid
                        @enderror"
                             data-indicator="pwindicator" name="password">
                         @error('password')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                         @enderror
                         <div id="pwindicator" class="pwindicator">
                             <div class="bar"></div>
                             <div class="label"></div>
                         </div>
                     </div>
             </div>
             <div class="modal-footer" style="margin-top: -2rem">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Save changes</button>
             </div>
             </form>
         </div>
     </div>
 </div>
