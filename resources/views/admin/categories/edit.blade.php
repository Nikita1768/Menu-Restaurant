<x-layouts.header title="My Restaurant Menu">
    <x-layouts.sidebar/>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category parameters:</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Category</h3>
                        </div>
                        <form id="editForm" class="form-group" method="post"
                              action="{{ route('admin.categories.update', compact('category')) }}">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <x-inputs.input label="Name" :value="$category->name"/>
                            </div>
                        </form>
                        <form action="{{ route('admin.categories.destroy', ['category' => $category]) }}" id="deleteForm" method="post">
                            @csrf
                            @method('delete')
                            <div class="row">
                                <button type="submit" class="btn btn-app ml-3" form="editForm">
                                    <i class="fas fa-edit"></i> Edit Category
                                </button>
                                <button type="button" class="btn btn-app" data-toggle="modal"
                                        data-target="#modal-default">
                                    <i class="fas fa-trash"></i> Delete Category
                                </button>

                            </div>
                            <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">You will delete this category:</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Dish: {{ $category->name }}</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-secondary" form="deleteForm">Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-layouts.footer/>
</x-layouts.header>
