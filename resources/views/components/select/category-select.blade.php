<div class="form-group">
    <label for="category">Category</label>
    <select name="category_id" id="category" class="form-control">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                @selected($category->id == old('category_id', $dish->category_id ?? ''))>{{ $category->name }}</option>
        @endforeach
    </select>
</div>
