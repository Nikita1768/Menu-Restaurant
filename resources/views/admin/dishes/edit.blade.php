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
                            <h3 class="card-title">Edit dish</h3>
                        </div>
                        <form id="editForm" class="form-group" enctype="multipart/form-data" method="post"
                              action="{{ route('admin.dishes.update', compact('dish')) }}">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <x-inputs.input label="Name" :value="$dish->name"/>
                                <x-inputs.textarea label="Description" :value="$dish->description"/>
                                <x-inputs.integer label="Price" :value="$dish->price"/>
                                <x-select.category-select :$categories :$dish />
                                <x-inputs.image label="Image" :$dish/>
                            </div>
                        </form>
                        <form action="{{ route('admin.dishes.destroy', ['dish' => $dish]) }}" id="deleteForm" method="post">
                            @csrf
                            @method('delete')
                            <div class="row">
                                <button type="submit" class="btn btn-app ml-3" form="editForm">
                                    <i class="fas fa-edit"></i> Edit Dish
                                </button>
                                <button type="button" class="btn btn-app" data-toggle="modal"
                                        data-target="#modal-default">
                                    <i class="fas fa-trash"></i> Delete Dish
                                </button>

                            </div>
                            <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">You will delete this dish:</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Dish: {{ $dish->name }}</p>
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
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
