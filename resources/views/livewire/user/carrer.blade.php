<section>
    <div class="container-fluid position-relative p-0">

        @include('livewire.user.nav.navbar')
        @include('livewire.user.banner.carrer-banner')

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
 


    <!-- Carrer Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Join Our Team</h5>
                    <h1 class="mb-0">Looking for a New Opportunity? We're Hiring!</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24/7 HR Support</h5>
                    </div>
                </div>
                <p class="mb-4">
                    At <strong>Our Company</strong>, we’re always on the lookout for talented individuals ready to bring new ideas, grow professionally, and contribute to exciting projects.
                    Whether you're a recent graduate or an experienced professional, we offer a supportive environment where you can thrive.
                </p>
                <p class="mb-4">
                    Submit your application today and take the next step in your career. We offer competitive compensation, a collaborative team culture, and opportunities for career advancement.
                </p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Need help with your application?</h5>
                        <h4 class="text-primary mb-0">+012 345 6789</h4>
                    </div>
                </div>
            </div>

                <div class="col-lg-6">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form wire:submit.prevent="submit">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" id="carrerName" style="height: 55px;" wire:model.defer="carrerName">
                                    
                                  </div>
                                  
                               
                                @error('carrerName') <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Phone" id="carrerPhone"  style="height: 55px;" wire:model.defer="carrerPhone">
                                    
                                </div>
                                @error('carrerPhone') <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" id="carrerEmail"  style="height: 55px;" wire:model.defer="carrerEmail">
                                    
                                </div>
                                @error('carrerEmail') <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" id="carrerAge"  style="height: 55px;" wire:model.defer="carrerAge">
                                        <option selected>Select a Age</option>
                                        @for ($i = 18; $i <= 30; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    
                                </div>
                                @error('carrerAge') <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" id="carrerRole"  style="height: 55px;" wire:model.defer="carrerRole">
                                        <option selected>Select a Role</option>
                                        <option value="Assistant Manager">Assistant Manager</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Executive">Executive</option>
                                        <option value="Accountant">Accountant</option> 
                                    </select>
                                    
                                </div>
                                @error('carrerRole') <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="col-12">
                                    <input type="file" class="form-control form-control-lg bg-light border-0" placeholder="Your Resume" id="carrerResume"  wire:model.defer="carrerResume">
                                    
                                </div>
                                @error('carrerResume') <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="col-12">
                                    <div class="form-check" style="padding-top: 10px;">
                                        <input class="form-check-input" type="checkbox" id="accepted" wire:model="accepted" style="border: 2px solid white;">
                                        <label class="form-check-label text-white" for="accepted">
                                            I accept the <a href="{{ route('download.agreement') }}" target="_blank" class="text-white text-decoration-underline">license agreement</a>.
                                        </label>

                                    </div>
                                    
                                </div>
                                @error('accepted') <span class="text-danger">{{ $message }}</span> @enderror

                                <!-- <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div> -->
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carrer End -->
</section>
@push('scripts')
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->



<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('downloadAgreement', () => {
            Swal.fire({
                title: 'Success!',
                text: 'Your application has been submitted.',
                icon: 'success',
                confirmButtonText: 'Download Agreement'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the download route
                    window.location.href = "{{ route('download.agreement') }}";  // This will trigger the file download
                }
            });
        });
    });
</script>


@endpush