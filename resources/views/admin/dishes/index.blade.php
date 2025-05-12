<x-layouts.header title="My Restaurant Menu">
    <x-layouts.sidebar/>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a class="btn btn-app" href="{{ route('admin.dishes.create') }}">
                            <i class="fas fa-plus"></i> Add Dish
                        </a>
                        <h1 class="m-0">All dishes:</h1>
                    </div>
                </div>
            </div>
        </div>
        <x-tables.simple
            :collection="$dishes"
            :labels="['Id', 'Name', 'Description', 'Price']"
            edit
            off
            category
        />
    </div>


    <x-layouts.footer/>
</x-layouts.header>
