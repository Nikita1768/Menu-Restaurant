<div class="form-group">
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="customSwitch{{ $model->id }}"
               @checked($model->show)
               onchange="changeStatus('{{ $model->id }}')">
        <label class="custom-control-label" for="customSwitch{{ $model->id }}"></label>
    </div>
</div>
<script>
    function changeStatus(id) {
        let model = '{{ class_basename($model) }}'
        let csrf = '{{ csrf_token() }}'

        fetch('{{ route('admin.change') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': csrf
            },
            body: JSON.stringify({
                model,
                id
            })
        })
    }
</script>
