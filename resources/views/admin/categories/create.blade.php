<x-layouts.header title="My Restaurant Menu">
    <x-layouts.sidebar/>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Category</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">New Category</h3>
                        </div>
                        <form class="form-group" method="post"
                              action="{{ route('admin.categories.store') }}">
                            @csrf
                            <div class="card-body">
                                <x-inputs.input label="Name" />
                            </div>
                            <button type="submit" class="btn btn-app">
                                <i class="fas fa-plus"></i>Create Category
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <x-layouts.footer/>
</x-layouts.header>
