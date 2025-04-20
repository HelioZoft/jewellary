<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{asset('user/img/carousel-1.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Start Your Journey Today!</h5>
                    <h3 class="display-1 text-white mb-md-4 animated zoomIn">Connecting Talent with the Right Jobs </h3>
                    {{-- <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a> --}}
                    {{-- <a href="" class="animated slideInRight" style="display: inline-block; background: transparent; color: #fff; border: 2px solid #fff; padding: 1rem 3rem; font-size: 1.5rem; border-radius: 0.5rem; text-decoration: none;">Apply now</a> --}}
                    <a  href="{{route('carrer')}}"
                        class="animated slideInRight"
                        style="display: inline-block;
                                background: #007BFF;        /* Blue background */
                                color: #fff;
                                border: 2px solid #007BFF;  /* Blue border */
                                padding: 1rem 3rem;
                                font-size: 1.5rem;
                                border-radius: 0.5rem;
                                text-decoration: none;
                                transition: all 0.3s ease;"
                        onmouseover="this.style.background='#fff'; this.style.color='#007BFF';"
                        onmouseout="this.style.background='#007BFF'; this.style.color='#fff';">
                        Apply now
                        </a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{asset('user/img/carousel-2.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Unlock Your Future</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Explore Exciting Career Opportunities!</h1>
                    {{-- <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a> --}}
                    {{-- <a href="" class="animated slideInRight" style="display: inline-block; background: transparent; color: #fff; border: 2px solid #fff; padding: 1rem 3rem; font-size: 1.5rem; border-radius: 0.5rem; text-decoration: none;">Apply now</a> --}}
                    <a  href="{{route('carrer')}}"
                    class="animated slideInRight"
                    style="display: inline-block;
                            background: #007BFF;        /* Blue background */
                            color: #fff;
                            border: 2px solid #007BFF;  /* Blue border */
                            padding: 1rem 3rem;
                            font-size: 1.5rem;
                            border-radius: 0.5rem;
                            text-decoration: none;
                            transition: all 0.3s ease;"
                    onmouseover="this.style.background='#fff'; this.style.color='#007BFF';"
                    onmouseout="this.style.background='#007BFF'; this.style.color='#fff';">
                    Apply now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
