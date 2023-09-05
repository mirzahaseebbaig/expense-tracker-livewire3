<div class="row">
    <div class="col-md-6">
        <!-- Account details card-->
        <div class="card mb-4">
            <div class="card-header">Create Category</div>
            <div class="card-body">
                <form wire:submit="save">
                    <div class="row gx-3 mb-3">
                        <div class="col-md-12">
                            <label class="small mb-1" for="category">Category</label>
                            <input class="form-control" wire:model="form.name" id="category" type="text" placeholder="Enter category" value="">
                            @error('category') <small class="text-danger">{{ $message }}</small>  @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>