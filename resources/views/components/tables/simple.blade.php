<div class="card-body p-0">
    <table class="table table-secondary table-bordered">
        <thead>
        <tr>
            @foreach($labels as $label)
                <th>{{ $label }}</th>
            @endforeach
            @isset($off)
                <th>On/Off</th>
            @endisset
            @isset($edit)
                <th>Edit</th>
            @endisset
            @isset($sort)
                <th>Sort</th>
            @endisset
                @isset($category)
                    <th>Category</th>
                @endisset
        </tr>
        </thead>
        <tbody>
        @foreach($collection as $model)
            <tr>
                @foreach($labels as $label)
                    <td>{{ $model->{ str($label)->snake()->toString() } }}</td>
                @endforeach
                    @isset($off)
                        <td style="width: 60px">
                            <x-buttons.show :$model />
                        </td>
                    @endisset
                @isset($edit)
                    <td style="width: 60px">
                        <x-buttons.edit-table :$model />
                    </td>
                @endisset
                    @isset($category)
                        <td style="width: 200px">
                            <p><b>{{ $model->category->name }}</b></p>
                        </td>
                    @endisset
            </tr>
        @endforeach
        </tbody>

    </table>
</div>
