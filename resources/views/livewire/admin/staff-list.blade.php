<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Staff</h3>
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
                        <div class="card-title mb-0">Staff Table</div>
                        <a href="{{ route('add-staff') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Add Staff
                        </a>
                    </div>

                    <div class="card-body">
                        <table class="table table-head-bg-primary mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Staff Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staffDatas as $index => $staff)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            @if ($staff->staffImg)
                                                <img src="{{ Storage::url($staff->staffImg) }}" alt="Staff Image" class="img-thumbnail shadow-lg" style="height: 5rem;">
                                            @else
                                                No Image available
                                            @endif
                                        </td>
                                        <td>{{ $staff->name }}</td>
                                        <td>{{ $staff->position }}</td>
                                        <td>
                                            <a href="{{ route('edit-staff', ['id' => $staff->id]) }}" title="Edit" style="margin-right: 10px;">
                                                <i class="fa-solid fa-pen-to-square" style="font-size: 20px; color: #007bff; cursor: pointer;"></i>
                                            </a>
                                            <a href="javascript:void(0)" title="Delete" onclick="confirmStaffDelete({{ $staff->id }})">
                                                <i class="fa-solid fa-trash" style="font-size: 20px; color: #dc3545; cursor: pointer;"></i>
                                            </a>
                                        </td>
                                    </tr>
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
    function confirmStaffDelete(id) {
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
                Livewire.dispatch('deleteStaff', { id: id });
            }
        });
    }
</script>
@endpush
