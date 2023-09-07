@extends('layouts', ['style_file' => 'index.css'])
@section('content')
    <!-- --------slider-------- -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/image/1-slider.jpg" class="d-block w-100 slid-bar-andaze" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/2-slider.jpg" class="d-block w-100 slid-bar-andaze" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- --------end-slider-------- -->

    <!-- --------emkanat-------- -->
    <section class="section  my-5" id="articles">
        <div class="section-title">
            <h3 class=" fw-bold pt-5 pb-2 "><span class="rang-titr-1">امکانات</span> <span class="rang-titr-2">مهد</span><span class="rang-titr-3">کودک</span></h3>
        </div>
        <div class="section-center articles-center pt-5">
            <article class="article-card article-card-1 p-5">
                <div>
                    <span class="bus-rang-emkanat fs-1"><i class="bi bi-bus-front"></i></span>
                </div>
                <div class="article-info">
                    <h4 class="article-title fw-bold py-2 bus-rang-emkanat">سرویس</h4>
                    <p class="matn-emkanat">
                        دارای سرویس و رفت و برگشت برای دانش آموزان
                    </p>
                </div>
            </article>

            <article class="article-card article-card-2 p-5">
                <div class="article-img-container">
                    <span class=" gaza-rang-emkanat fs-1"><i class="bi bi-house-heart-fill"></i></span>
                </div>
                <div class="article-info">
                    <h4 class="article-title fw-bold py-2 gaza-rang-emkanat">تغذیه سالم</h4>
                    <p class="matn-emkanat">
                        دارای برنامه غذایی سالم برای دانش آموزان زیر نظر مشاور تغذیه
                    </p>
                </div>
            </article>

            <article class="article-card article-card-3 p-5">
                <div class="article-img-container">
                    <span class=" top-rang-emkanat fs-1"><i class="bi bi-hypnotize"></i></span>
                </div>
                <div class="article-info">
                    <h4 class="article-title fw-bold  top-rang-emkanat py-2">زمین بازی</h4>
                    <p class="matn-emkanat">
                        دارای زمین بازی برای دانش آموزان برای گذراندن اوقات فراغت
                    </p>
                </div>
            </article>

            <article class="article-card article-card-4 p-5">
                <div class="article-img-container">
                    <span class="yadgiry-rang-emkanat fs-1"><i class="bi bi-camera-video-fill"></i></span>
                </div>
                <div class="article-info">
                    <h4 class="article-title yadgiry-rang-emkanat fw-bold py-2">مجهز به دوربین مدار بسته</h4>
                    <p class="matn-emkanat">
                        مجهزبه دوربین مدار بسته و والدین میتوانند در هر زمان از ساعات آموزشی فرزندان خود را مشاهده کنند و از وضعیت او آگاه شوند
                    </p>
                </div>
            </article>
        </div>
    </section>
    <!-- --------end emkanat-------- -->

    <!-- --------darbare-ma-------- -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="darbare-ma bg-asli rounded">
                <div class="row ">
                    <div class="col-md-6 ">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4 fw-bold titr">درباره ما</h1>
                            <p class="mb-4 matn-darbare-ma">
                                مهدکودک و آمادگی خصوصی نرگس در مهرماه سال 1378 با حضور 40 ( چهل ) کودک و 8(هشت ) نفر کادر تاسیس و آغاز به کار نمود .دانش
                                و عشق پایه های اصلی این ساختار بود و تجربه های گرانبهایی که با کودکان شکل گرفت همراه با حمایت خانواده های محترم موجب تحکیم این
                                مجموعه شد . در طول سالها کار با کودک هیچ انگیزه ای جز تلاش برای بوجود آوردن شرایطی مطلوبتر برای کودکان مدنظر نبود و امروز هزاران
                                بار خداوند منان را شکر که علیرغم مشکلات فراوان آرزوهایم برای کودکان سرزمینم به بار نشست. فضایی مناسب با آموزشی پربار که بر پایه های
                                تربیت کودک شکل می گیرد همراه با برنامه ریزی سیستم آموزشی که میلیونها کودک در سراسر دنیا لذت آن را تجربه کرده اند فرا راه ماست.
                            </p>
                            <a class="btn btn-narengi btn-warning py-3 px-5" href="/about-us">مشاهده بیشتر <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 " style="min-height: 400px;">
                        <div class="position-relative h-100 d-flex justify-content-end">
                            <img class="position-absolute w-100 h-100 rounded image-darbare-ma" src="/image/1-darbare.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --------end-darbare-ma-------- -->

    <!-- --------class-------- -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5" style=" max-width: 600px;">
                <h4 class="mb-3 fw-bold titr-saie-tosi">کلاس های مهد کودک</h4>
                <p>با آموزش های هدفمند و منحصربه فرد مهارت های فکری، رفتاری و زندگی
                    فرزندان خود را در مسیر صحیح قرار دهید </p>
            </div>
            <!-- ---------------------- -->
            <div class="row g-4 align-items-center">
                @foreach($classes as $class)
                    <div class="col-lg-4 col-md-6">
                        <div class="classes-item">
                            <div class="bg-asli rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle image-class " src="/storage/{{$class->image}}" alt="">
                            </div>
                            <div class="bg-asli rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">{{$class->title}}</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 class="text mb-1">{{$class->user->name}}</h6>
                                            <small>{{$class->user->semat}} </small>
                                        </div>
                                    </div>
                                    <a class=" btn btn-narengi btn-warning text-white rounded-pill py-2 px-3" href="/admin/lesson/{{$class->id}}/show">مشاهده</a>
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text mb-1">سن:</h6>
                                            <small>{{$class->for_age}}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">ساعت کلاس:</h6>
                                            <small>{{$class->class_time}}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">ظرفیت:</h6>
                                            <small>{{$class->capacity}} کودک</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- --------end-class-------- -->

    <!-- --------stkhdam-morabi-------- -->
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

    <!-- --------morabi-------- -->
    <div class="container bg-asli rounded-4">
        <div class="row align-items-center">
            <h3 class="titr-saie-tosi text-center pt-5">مربی های <span class="titr">مهدکودک نرگس</span></h3>
        </div>
        <div class="row  my-5  row-cols-md-3 g-4 d-flex justify-content-center ms-5">
            @foreach($teachers as $teacher)
                <div class="col morabian mt-3 py-3 pb-5">
                    <div class="card image-andaze border border-0 rounded-4">
                        <img src="/storage/{{$teacher->image}}" class="card-img-top image-morabi rounded-top-4" alt="...">
                        <div class="card-body">
                            <h6 class="card-title text"> {{$teacher->name}}</h6>
                            <div class="border-top border-3 border-warning pt-2 "></div>
                            <p class="card-text">{{$teacher->madrak}} </p>
                            <p><i class="bi bi-mortarboard-fill text"></i> {{$teacher->semat}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- --------end-morabi-------- -->

    <!-- --------galeri-------- -->
    <section class="container galeri py-5 align-items-center ">
        <div class="row">
            <div class="col-md-4 text-center mt-5">
                <h3 class="titr mb-5">گالری</h3>
                <p class="fs-5 mb-4">ثبت تصاویر و خاطرات فرزندان شما در کلاس های آموزشی و اردوهای تفریحی</p>
                <a href="../html/galeri.html" class="btn btn-narengi btn-warning rounded-pill ms-4 p-3"> مشاهده همه تصاویر </a>
            </div>
            <div class="col-md-6 ">
                <div class="row galeri-images">
                    <div class=" ">
                        <img src="/image/galeri-1.jpg" class="  image-galeri  shadow " alt="...">
                    </div>
                    <div class="">
                        <img src="/image/galeri-2.jpeg" class="  image-galeri shadow" alt="...">
                    </div>
                    <div class="">
                        <img src="/image/galeri-3.jpg" class="  image-galeri shadow" alt="...">
                    </div>
                    <div class="">
                        <img src="/image/galeri-4.jpg" class="  image-galeri  shadow" alt="...">
                    </div>
                    <div class="">
                        <img src="/image/galeri-5.jpg" class="  image-galeri  shadow" alt="...">
                    </div>
                    <div class="">
                        <img src="/image/galeri-6.jpg" class="  image-galeri  shadow" alt="...">
                    </div>
                    <div class="">
                        <img src="/image/galeri-7.jpg" class="  image-galeri  shadow" alt="...">
                    </div>
                    <div class="">
                        <img src="/image/galeri-8.jpg" class="  image-galeri  shadow" alt="...">
                    </div>
                </div>
            </div>
    </section>
    <!-- --------end-galeri-------- -->
@endsection