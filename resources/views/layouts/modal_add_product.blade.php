<!-- Modal Tambah -->
<div class="modal fade" id="add_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" id="name"
                            @error('name')
                        is-invalid
                        @enderror>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" class="form-control" name="stock" id="stock">
                    </div>
                    <div class="form-group">
                        <label>Photo Product</label>
                        <div>
                            <img id="imagePreview" src="#" alt="Preview" class="mb-1"
                                style="max-width: 100%; height: 200px; max-width: 300px; display: none;">
                            <input type="file" class="form-control" name="image" id="image"
                                onchange="previewImage(event)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                                <input type="radio" name="category" value="Food" class="selectgroup-input"
                                    checked="">
                                <span class="selectgroup-button">Food</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="category" value="Drink" class="selectgroup-input">
                                <span class="selectgroup-button">Drink</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="category" value="Snack" class="selectgroup-input">
                                <span class="selectgroup-button">Snack</span>
                            </label>
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
