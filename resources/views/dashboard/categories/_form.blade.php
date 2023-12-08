@if ($errors->any())
    <div class="alert alert-danger">
        <b>Errors Occurred!</b>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="name">Category Name</label>
    <input class="form-control" type="text" name="name" value="{{ old('name', $category->name) }}" />
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description">{{ old('description', $category->description) }}</textarea>
</div>

<div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" accept="image/*" />
    @if ($category->image)
        <img src="{{ asset('storage/' . $category->image) }}" alt="" height="60" />
    @endif
</div>

<div class="form-group">
    <label for="status">Status</label>
    <div>
        <div class="form-check">
            <input type="radio" name="status" value="active" {{ old('status', $category->status) == 'active' ? 'checked' : '' }} />
            <label for="form-checked-label">Active</label>
        </div>

        <div class="form-check">
            <input type="radio" name="status" value="archived" {{ old('status', $category->status) == 'archived' ? 'checked' : '' }} />
            <label for="form-checked-label">Archived</label>
        </div>
    </div>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
