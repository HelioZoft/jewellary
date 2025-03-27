@include('admin.includes.header');
  <div class="container-scroller">
    @include('admin.includes.navbar');
    <div class="container-fluid page-body-wrapper">
      @include('admin.includes.sidebar');
      {{$slot}}
    </div>
  </div>
@include('admin.includes.footer');