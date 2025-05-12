<div class="form-group">
    <label for="{{ str($label)->snake()->toString() }}">{{ $label }}</label>
    <input type="number" step="0.01" class="form-control" name="{{ strtolower($label) }}"
           value="{{ old(str($label)->snake()->toString(), $value ?? '') }}">
    @error(str($label)->snake()->toString())
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
