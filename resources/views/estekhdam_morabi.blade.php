@extends('layouts', ['style_file' => 'stekhdam-morabi.css'])
@section('content')
    <div>
        <img src="/image/stekhdam-morabi.JPG" class="img-fluid" alt="...">
    </div>
    <!-- --------stkhdam-morabi-------- -->
    <div class="container my-5 ">
        <h3 class="titr-saie-tosi fw-bold">مهد کودک نرگس استخدام می نماید:</h3>
    </div>

    <section class="stekhdam">
        <video
                class="video-container"
                autoplay
                muted
                loop
                poster="/images/img-1.jpg"
        >
            <source src="/videos/connect.mp4" type="video/mp4"/>
            شرمنده، مرورگر شما نمایش ویدیو را ساپورت نمیکند
        </video>

        <div class="video-banner">
            <div class="section-title">
                <h2 class="titr-class fw-bold"><span class="titr">فرصت</span> شغلی</h2>
                <div class="underline"></div>
            </div>

            <p class="video-text">
                اگر در زمینه های زیر متخصص هستید رزومه خود را برای ما بفرستید </p>
            <ul>
                <li class="estekhdam-shogl mb-2"> کارمند اداری</li>
                <li class="estekhdam-shogl mb-2"> مشاور تغذیه</li>
                <li class="estekhdam-shogl mb-2"> کارمند خدمات</li>
                <li class="estekhdam-shogl mb-2"> مربی زبان انگلیسی</li>
                <li class="estekhdam-shogl mb-2"> مربی قرآن</li>
            </ul>
            <a href="#" class="btn btn-narengi btn-warning rounded-pill ms-4"> ارسال رزومه </a>
        </div>
    </section>
    <!-- --------end-stkhdam-morabi-------- -->
@endsection