<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Awards Management</h3>
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
                            <div class="card-title">Awards Form</div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                {{-- Award Name --}}
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="EventName">Awards Name</label>
                                        <input type="text" class="form-control" id="EventName"
                                            placeholder="Enter Awards Name" wire:model.defer="awardName">
                                        @error('awardName') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                {{-- Award Date --}}
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="eventDate">Awards Function Conducted Date</label>
                                        <input type="date" class="form-control" id="eventDate"
                                            wire:model.defer="awardDate" />
                                        @error('awardDate') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                {{-- Award Description --}}
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="eventDis">Awards Description</label>
                                        <textarea class="form-control" id="eventDis" rows="2"
                                            placeholder="Enter Awards Description"
                                            wire:model.defer="awardDiscription"></textarea>
                                        @error('awardDiscription') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                {{-- Award Image --}}
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="imageUpload">Upload Award Image</label>
                                        <input type="file" class="form-control" id="imageUpload" accept="image/*"
                                            wire:model="awardImg" />
                                        <small class="form-text text-muted">Please upload a clear image (jpg, png,
                                            etc.).</small>
                                        @error('awardImg') <small class="text-danger">{{ $message }}</small> @enderror

                                        @if ($awardImg)
                                            <div class="mt-2">
                                                <strong>Preview:</strong><br>
                                                <img src="{{ $awardImg->temporaryUrl() }}" width="150" class="img-thumbnail">
                                            </div>
                                        @elseif ($awardImgPath)
                                            <div class="mt-2">
                                                <strong>Current Image:</strong><br>
                                                <img src="{{ asset('storage/' . $awardImgPath) }}" width="150" class="img-thumbnail">
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
