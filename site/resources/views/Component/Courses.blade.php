
<div class="container section-marginTop text-center">
    <h1 class="section-title">কোর্স সমূহ </h1>
    <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
    <div class="row">
        @forelse($data as $value)
        <div class="col-md-4 thumbnail-container">
                <img src="{{$value->course_img}}" alt="Avatar" class="thumbnail-image ">
                <div class="thumbnail-middle">
                    <h1 class="thumbnail-title"> {{$value->course_title}}</h1>
                    <h1 class="thumbnail-subtitle">{{$value->course_sub_title}}</h1>
                    <button class="normal-btn btn">শুরু করুন</button>
                </div>
        </div>
        @empty
        <div class="col-md-4 thumbnail-container">
                <div class="thumbnail-middle">
                    <h3>No Data Found!</h3>
                </div>
        </div>
        @endforelse
    </div>
</div>