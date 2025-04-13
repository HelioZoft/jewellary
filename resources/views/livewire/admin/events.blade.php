<div class="container">
  <div class="page-inner">
      <div class="page-header">
          <h3 class="fw-bold mb-3">Events Management</h3>
      </div>

      @if (session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('message') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <div class="card-title">Events Form</div>
                  </div>
                  <form wire:submit.prevent="submit">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-6 col-lg-6">
                                  <div class="form-group">
                                      <label for="eventName">Event Name</label>
                                      <input type="text" class="form-control" id="eventName" placeholder="Enter Event Name" wire:model.defer="eventName" />
                                      @error('eventName') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                              </div>

                              <div class="col-md-6 col-lg-6">
                                  <div class="form-group">
                                      <label for="eventDate">Event Conducted Date</label>
                                      <input type="date" class="form-control" id="eventDate" wire:model.defer="eventDate" />
                                      @error('eventDate') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                              </div>

                              <div class="col-md-6 col-lg-6">
                                  <div class="form-group">
                                      <label for="eventDis">Event Description</label>
                                      <textarea class="form-control" id="eventDis" rows="2" placeholder="Enter Event Description" wire:model.defer="eventDiscription"></textarea>
                                      @error('eventDiscription') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                              </div>

                              <div class="col-md-6 col-lg-6">
                                  <div class="form-group">
                                      <label for="imageUpload">Upload Event Image</label>
                                      <input type="file" class="form-control" id="imageUpload" accept="image/*" wire:model="eventImg" />
                                      <small id="imageHelp" class="form-text text-muted">Please upload a clear image (jpg, png, etc.).</small>
                                      @error('eventImg') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  @if ($eventImg)
                                      <div class="mt-2">
                                          <img src="{{ $eventImg->temporaryUrl() }}" class="img-fluid rounded" width="150" />
                                      </div>
                                  @elseif ($eventImgPath)
                                      <div class="mt-2">
                                          <img src="{{ asset('storage/' . $eventImgPath) }}" class="img-fluid rounded" width="150" />
                                      </div>
                                  @endif
                              </div>

                          </div>
                      </div>
                      <div class="card-action text-end">
                          <button class="btn btn-success" type="submit">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
