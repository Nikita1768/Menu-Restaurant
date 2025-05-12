<div class="form-group">
    <label for="{{ str($label)->snake()->toString() }}">{{ $label }}</label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" name="{{ str($label)->snake()->toString() }}" class="custom-file-input"
                   id="{{ str($label)->snake()->toString() }}" onchange="preview()"
                   onclick="newImage()">
            <label class="custom-file-label" for="exampleInputFile">{{ $dish->image ?? 'Choose image' }}</label>
        </div>
    </div>
    <img class="my-2 mx-4" id="frame" width="300px"/>
    @if (!empty($dish->image))
        <div id="altImage" class="my-2">
            <img src="{{ asset('storage/' . $dish->image) }}" width="300px" id="altImage" style="display: block">
        </div>
    @endif
    @error(str($label)->snake()->toString())
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<script>
    function newImage() {
        let image = document.querySelector("#altImage")
        if (image) {
            image.style.display = "none"
        }
    }
</script>

