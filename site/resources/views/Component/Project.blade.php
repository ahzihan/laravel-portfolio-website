<div class="container section-marginTop text-center">
        <h1 class="section-title">প্রজেক্ট</h1>
        <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
        <div class="row">

            <div id="one" class="owl-carousel mb-4 owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1725px, 0px, 0px); transition: all 0.1s ease 0s; width: 3163px;">

                        @forelse($projects as $project)
                        <div class="owl-item" style="width: 277.5px; margin-right: 10px;">
                            <div class="item m-1 card">
                                <div class="text-center">
                                    <img class="" src="{{ $project->project_img }}" alt="Card image cap">
                                    <h5 class="service-card-title mt-4">{{ $project->project_name }}</h5>
                                    <h6 class="service-card-subTitle p-0 m-0">{{ $project->project_des }}</h6>
                                    <button class="normal-btn-outline mt-2 mb-4 btn">বিস্তারিত</button>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="owl-item" style="width: 277.5px; margin-right: 10px;">< class="item m-1 card">
                            <h3 class="text-center">No Data Found!</h3>
                        </div>
                        @endforelse

                        </div>
                    </div>
                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                    </button>
                    <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                    </button>
                </div>
                <div class="owl-dots disabled">
                    <button role="button" class="owl-dot active"><span></span></button>
                </div>
            </div>

        </div>
        <div class="d-inline ml-2">
            <i id="customPrevBtn" class="btn normal-btn">&lt;</i>
            <i id="customNextBtn" class="btn normal-btn">&gt;</i>
            <button class="normal-btn  btn">সব গুলো </button>
        </div>
    </div>