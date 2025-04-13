<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Events</h3>
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
            <div class="card-header">
              <div class="card-title">Events Table</div>
            </div>
            <div class="card-body">
              <table class="table table-head-bg-primary mt-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Events Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($eventData as $index => $events)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if ($events->eventImg)
                          <img src="{{Storage::url($events->eventImg) }}" alt="Event Image" class="img-thumbnail shadow-lg" style="height: 5rem;">
                        @else
                            No Image available
                        @endif
                    </td>
                    <td>{{ $events->title }}</td>
                    <td>
                        <a href="{{route('edit-events',['id' => $events->id])}}" title="Edit" style="margin-right: 10px;">
                            <i class="fa-solid fa-pen-to-square" style="font-size: 20px; color: #007bff; cursor: pointer;"></i>
                        </a>
                        <a title="Delete">
                            <i class="fa-solid fa-trash" style="font-size: 20px; color: #dc3545; cursor: pointer;"></i>
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