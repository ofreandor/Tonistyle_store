<div class="modal fade" id="editcategoryModal{{ $category->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="edit_category_name" name="category_name"
                            value="{{ $category->category_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Category Status</label>
                        <select type="text" class="form-control" id="status" name="status" required>
                            <option value="active" {{ $category->category_name == 'active' ? 'selected' : '' }}>Active
                            </option>
                            <option value="inactive" {{ $category->status == 'inactive' ? 'selected' : '' }}>Inactive
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

<form action="{{ route('delete.category', $category->id) }}" method="POST" id="deleteForm">
    @csrf
    @method('DELETE')
    <a type="submit" onclick="confirmDelete({{$category->id}})">
        <i class="fas fa-trash-alt text-danger"></i>
    </a>
</form>
</div>
