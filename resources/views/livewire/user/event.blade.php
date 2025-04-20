<section>
    <div class="container-fluid position-relative p-0">

        @include('livewire.user.nav.navbar')
        @include('livewire.user.banner.event-banner')

    </div>

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('user/img/new/img4.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Our Events</h5>
                        <h1 class="mb-0">Highlights of Our Events & Celebrations</h1>
                    </div>
                    <p class="mb-4">
                        Stay updated with our latest events and celebrations that bring our community together.
                        From company functions to cultural fests, explore the vibrant moments that define our journey.
                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+91 9876543200</h4>
                        </div>
                    </div>
                    {{-- <a href="#" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a> --}}
                </div>
            </div>
        </div>
    </div>
        <!-- Blog Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Our Events</h5>
                    <h1 class="mb-0">Be There! Check Out Our Latest Event Lineup.</h1>
                </div>
                <div class="row g-5">
                    @foreach ($EventDatas as $event)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img
                                    class="img-fluid"
                                    src="{{ Storage::url($event->eventImg) }}"
                                    alt="Event Image"
                                    style="height: 280px; width: 400px; object-fit: cover; border-radius: 8px;">

                                {{-- <img class="img-fluid" src="{{Storage::url($event->eventImg) }}" alt=""> --}}
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Our Branch Opening</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    {{-- <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small> --}}
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ \Carbon\Carbon::parse($event->event_date)->format('j-F-Y') }}</small>
                                </div>
                                <h4 class="mb-3">{{ $event->title }}</h4>
                                <p>{{ $event->description }}</p>
                                {{-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
    
                </div>
            </div>
        </div>
        <!-- Blog End -->
</section>