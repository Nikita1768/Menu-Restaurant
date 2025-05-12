<div class="form-group">
    <label for="{{ str($label)->snake()->toString() }}">{{ $label }}</label>
    <textarea type="text" class="form-control" name="{{ strtolower($label) }}"
    >{{ old(str($label)->snake()->toString(), $value ?? '') }}</textarea>
    @error(str($label)->snake()->toString())
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

