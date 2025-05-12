<x-layouts.header title="My Restaurant Menu">
    <x-layouts.sidebar/>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a class="btn btn-app" href="{{ route('admin.categories.create') }}">
                            <i class="fas fa-plus"></i> Add Category
                        </a>
                        <h1 class="m-0">All categories:</h1>
                    </div>
                </div>
            </div>
        </div>
        <x-tables.simple
            :collection="$categories"
            :labels="['Id', 'Name']"
            edit
        />
    </div>
    <x-layouts.footer/>
</x-layouts.header>
