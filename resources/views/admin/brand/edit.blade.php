<div class="modal fade" id="editbrandModal{{ $brand->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('brand.update', $brand->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="edit_brand_name" name="brand_name"
                            value="{{ $brand->brand_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Category Status</label>
                        <select type="text" class="form-control" id="brand_status" name="brand_status" required>
                            <option value="active" {{ $brand->brand_status == 'active' ? 'selected' : '' }}>Active
                            </option>
                            <option value="inactive" {{ $brand->brand_status == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<form action="{{ route('delete.brand', $brand->id) }}" method="POST" id="deleteForm">
    @csrf
    @method('DELETE')
    <a type="submit" onclick="confirmDelete({{$brand->id}})">
        <i class="fas fa-trash-alt text-danger"></i>
    </a>
</form>
</div>
