<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Awards</h3>
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
              <div class="card-title mb-0">Awards Table</div>
              <a href="{{ route('add-awards') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Add Awards
              </a>
            </div>  
            <div class="card-body">
              <table class="table table-head-bg-primary mt-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Award Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($awardDatas as $index => $award)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if ($award->awardImg)
                          <img src="{{Storage::url($award->awardImg) }}" alt="Award Image" class="img-thumbnail shadow-lg" style="height: 5rem;">
                        @else
                            No Image available
                        @endif
                    </td>
                    <td>{{ $award->title }}</td>
                    <td>
                        <a href="{{route('edit-awards',['id' => $award->id])}}" title="Edit" style="margin-right: 10px;">
                            <i class="fa-solid fa-pen-to-square" style="font-size: 20px; color: #007bff; cursor: pointer;"></i>
                        </a>

                        <a href="javascript:void(0);" onclick="confirmDelete('{{ $award->id }}')">
                          <i class="fa-solid fa-trash text-danger" style="font-size: 20px; color: #dc3545; cursor: pointer;"></i>
                        </a>
                                          
                    </td>
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
  <script>
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
</script>



@endpush
