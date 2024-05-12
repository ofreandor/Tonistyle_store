<div class="modal fade" id="CategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.category') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name"
                            placeholder="Category name" required>
                        @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_status" class="form-label">Category Status</label>
                        <select type="text" class="form-control select2 select2-hidden-accessible" id="status"
                            name="status" required>
                            <option selected="" disabled="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>
