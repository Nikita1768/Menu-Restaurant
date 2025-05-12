<x-layouts.header title="My Restaurant Menu">
    <x-layouts.sidebar/>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dish parameters:</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">New dish</h3>
                        </div>
                        <form class="form-group" enctype="multipart/form-data" method="post"
                              action="{{ route('admin.dishes.store') }}">
                            @csrf
                            <div class="card-body">
                                <x-inputs.input label="Name" />
                                <x-inputs.textarea label="Description" />
                                <x-inputs.integer label="Price" />
                                <x-select.category-select :$categories />
                                <x-inputs.image label="Image" />
                            </div>
                            <button type="submit" class="btn btn-app">
                                <i class="fas fa-plus"></i>Create Dish
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <x-layouts.footer/>
</x-layouts.header>
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
