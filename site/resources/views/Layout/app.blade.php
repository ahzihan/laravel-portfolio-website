<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>@yield('site-title')</title>
    <meta name="google-site-verification" content="J2K-awrLm--LtTSkUGmFsRpFFTU0W1V5PqZTQp0b6pg" />
    <meta name="description" content="Md Akbar Hossain is an Expert Web Developer in Bangladesh. Expert Mobile App Developer in Bangladesh.He is highly talented, experienced, professional and cooperative software engineer, working in programming and web world for more than 4 years. Moreover Md Akbar Hossain has a skilled team for achieving his goal named “Team ahzihan”.Team ahzihan assure you a wide range of quality IT services. ">
    <meta name="keywords" content="Expert Web Developer in Bangladesh, Expert Mobile App Developer in Bangladesh, Android App Developer in Bangladesh">
    <meta name="author" content="Md Akbar Hossain">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" >
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" >
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
</head>
<body>
@include('Layout.menu')

@yield('content')


<div class="jumbotron  jumbotron-fluid section-marginTop mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h3 class="service-card-title">অনুসরণ </h3>
                <hr>
                <p><a target="_blank" href="" class="footer-link"><i class="fab fa-facebook-f"></i> ফেছবুক </a></p>
                <p><a target="_blank" href="" class="footer-link"><i class="fab fa-youtube"></i> ইউটিউব </a></p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h3 class="service-card-title">ঠিকানা</h3>
                <hr>
                <p class="footer-text"><i class="fas fa-map-marker-alt"></i> শেখেরটেক ৮ মোহাম্মদপুর, ঢাকা </p>
                <p class="footer-text"><i class="fas fa-phone"></i> ০১৭৮৫৩৮৮৯১৯ </p>
                <p class="footer-text"><i class="fas fa-envelope"></i> akbarhossain5813@gmail.com</p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h3 class="service-card-title">তথ্য </h3>
                <hr>
                <a class="footer-link" target="_blank"  href="http://rabbil.com/">যোগাযোগ</a><br>
                <a class="footer-link" target="_blank"  href="http://rabbil.com/">প্রজেক্ট সমূহ</a><br>
                <a class="footer-link" target="_blank"  href="http://rabbil.com/">কোর্স সমূহ </a><br>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h3 class="service-card-title">আইনি</h3>
                <hr>
                <a class="footer-link" target="_blank" href="">ফেরত নীতি</a><br>
                <a class="footer-link" target="_blank" href="">শর্ত সমূহ </a><br>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white m-0 text-center p-3">
    <p class="rights-text  my-2 ">সর্বস্বত্ব রাব্বিল হাসান দ্বারা সংরক্ষিত; ২০১৯-২০২০ </p>
</div>

<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>


</body>
</htm>