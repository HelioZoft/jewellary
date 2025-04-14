<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Enquiry</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <div class="card-title mb-0">Enquiry Table</div>
              <!-- <a href="{{ route('add-awards') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Add Awards
              </a> -->
            </div>  
            <div class="card-body">
              <table class="table table-head-bg-primary mt-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Role</th>
                    <th scope="col">Documents</th>
                    <th scope="col">License</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($carrerData as $index => $carrer)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    
                    <td>{{ $carrer->name }}</td>
                    <td>{{ $carrer->phone }}</td>
                    <td>{{ $carrer->email }}</td>
                    <td>{{ $carrer->age }}</td>
                    <td>{{ $carrer->role }}</td>
                    <td><a href="{{Storage::url($carrer->resume) }}" download>Resume</a></td>
                    <td>{{ $carrer->accepted ? 'Accepted' : 'Not Accepted' }}</td>
               
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @push('scripts')
  <!-- <script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Send Livewire event to backend
                Livewire.dispatch('confirmDelete', { id: id });
            }
        });
    }

    // Optional: Show success message when backend confirms deletion
    document.addEventListener('livewire:init', () => {
        Livewire.on('awardDeleted', () => {
            Swal.fire({
                icon: 'success',
                title: 'Deleted!',
                text: 'The award has been deleted.',
                timer: 2000,
                showConfirmButton: false
            });
        });
    });
</script> -->



@endpush
