<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Staff Management</h3>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <form wire:submit.prevent="submit" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Staff Form</div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                {{-- Staff Name --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="staffName">Staff Name</label>
                                        <input type="text" class="form-control" id="staffName"
                                            placeholder="Enter Staff Name" wire:model.defer="staffName">
                                        @error('staffName') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                {{-- Staff Position --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="staffPosition">Position</label>
                                        <input type="text" class="form-control" id="staffPosition"
                                            placeholder="Enter Position" wire:model.defer="staffPosition">
                                        @error('staffPosition') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                {{-- Staff Email --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="staffEmail">Email</label>
                                        <input type="email" class="form-control" id="staffEmail"
                                            placeholder="Enter Email" wire:model.defer="staffEmail">
                                        @error('staffEmail') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                {{-- Staff Phone --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="staffPhone">Phone</label>
                                        <input type="text" class="form-control" id="staffPhone"
                                            placeholder="Enter Phone Number" wire:model.defer="staffPhone">
                                        @error('staffPhone') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                {{-- Staff Image --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="staffImg">Upload Staff Image</label>
                                        <input type="file" class="form-control" id="staffImg" accept="image/*"
                                            wire:model="staffImg" />
                                        <small class="form-text text-muted">Please upload a clear image (jpg, png,
                                            etc.).</small>
                                        @error('staffImg') <small class="text-danger">{{ $message }}</small> @enderror

                                        @if ($staffImg)
                                            <div class="mt-2">
                                                <strong>Preview:</strong><br>
                                                <img src="{{ $staffImg->temporaryUrl() }}" width="150" class="img-thumbnail">
                                            </div>
                                        @elseif ($staffImgPath)
                                            <div class="mt-2">
                                                <strong>Current Image:</strong><br>
                                                <img src="{{ asset('storage/' . $staffImgPath) }}" width="150" class="img-thumbnail">
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-action text-end mb-3 me-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
