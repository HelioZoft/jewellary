@include('admin.includes.header')
@include('admin.includes.sidebar')
<div class="main-panel">
  {{$slot}}
  @include('admin.includes.footer')
</div>
@include('admin.includes.settings')
@include('admin.includes.bottomfooter')