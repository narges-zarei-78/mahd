<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مهد کودک نرگس</title>
    @yield('header-style')

    @yield('header-script')
</head>
<!-- --------favicon-------- -->
<link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
<link rel="manifest" href="/icon/site.webmanifest">
<!-- --------link bootstrap-------- -->
<link rel="stylesheet" href="/bootstrap/bootstrap.rtl.min.css">
<link rel="stylesheet" href="/bootstrap/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- --------link css-------- -->
<link rel="stylesheet" href="/css/{{$style_file}}">
<body>
<div class="container cont-body">
    <!-- --------navbar-------- -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4  ">
        <a href="index.html" class="navbar-brand">
            <h4 class="fw-bold titr"><i class="fa fa-book-reader me-3"></i><img src="/icon/android-chrome-192x192.png" alt="Bootstrap" width="40" height="34"> مهدکودک نرگس</h4>
        </a>
        <button type="button " class="navbar-toggler btn-narengi1" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto nav-meno">
                <li class="nav-item">
                    <a class="nav-link  fw-bold me-2 p-2" href="/">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  fw-bold me-2 p-2" href="/about-us">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  fw-bold me-2 p-2" href="/class"> کلاس ها و ثبت نام</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  fw-bold me-2 p-2" href="/tasviri"> ارتباط تصویری </a>
                </li>
                <div class=" dropdown ">
                    <a href="#" class="nav-link dropdown-toggle fw-bold " data-bs-toggle="dropdown">صفحات دیگر</a>
                    <div class="dropdown-menu rounded-0 border-0">
                        <li class="nav-item">
                            <a class="nav-link  fw-bold me-2 p-2" href="/estekhdam">درخواست استخدام </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  fw-bold me-2 p-2" href="/morabi">مربیان محبوب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  fw-bold me-2 p-2" href="/gallery">گالری</a>
                        </li>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link  fw-bold me-2 p-2" href="/contact-us"> تماس با ما</a>
                </li>

            </div>
            <a href="/admin" class="btn btn-narengi btn-warning rounded-pill px-3"> ورود</a>
        </div>
    </nav>

@yield('content')

<!-- --------footer-------- -->
    <footer>
        <div class="row footer-conteiner pt-4 pb-5">
            <!-- ---------------------- -->
            <div class="mt-4 onvan-footer">
                <h4 class="fw-bold text "><i class="fa fa-book-reader me-3"></i><img src="/icon/android-chrome-192x192.png" alt="Bootstrap" width="40" height="34"> مهدکودک نرگس
                </h4>
                <p class="darbare-ma-footer text-center text-white-50 pt-2 ">
                    ما محیطی را فراهم کرده ایم که کودکان آموزش را زندگی کنند.
                    خود تجربه کنند، خود مهارتها و ارزشهای انسانی را
                    بیاموزند، خود ارزیابی کنند و خود هیجاناتشان را بیفزایند.
                </p>
                <img src="/image/footer.jpg" alt="" class="image-footer mt-4">
            </div>
            <!-- ---------------------- -->
            <div class="mt-4 fehrest">
                <div class="row  "><h5 class="-fooer fw-bold text-light">فهرست</h5></div>
                <div class="navbar-nav mx-auto nav-meno">
                    <li class="nav-item  nav-item-footer">
                        <a class="nav-link  fw-bold me-2 p-2" href="/">صفحه اصلی</a>
                    </li>
                    <li class="nav-item nav-item-footer">
                        <a class="nav-link  fw-bold me-2 p-2" href="/about-us">درباره ما</a>
                    </li>
                    <li class="nav-item nav-item-footer">
                        <a class="nav-link  fw-bold me-2 p-2" href="/class"> کلاس ها و ثبت نام</a>
                    </li>
                    <li class="nav-item nav-item-footer">
                        <a class="nav-link  fw-bold me-2 p-2" href="/estekhdam">درخواست استخدام </a>
                    </li>
                    <li class="nav-item nav-item-footer">
                        <a class="nav-link  fw-bold me-2 p-2" href="/morabi">مربیان محبوب</a>
                    </li>
                    <li class="nav-item nav-item-footer">
                        <a class="nav-link  fw-bold me-2 p-2" href="/gallery">گالری</a>
                    </li>
                    <li class="nav-item nav-item-footer">
                        <a class="nav-link  fw-bold me-2 p-2 pb-5" href="/tasviri"> ارتباط تصویری </a>
                    </li>
                    <div class="border-top border-3 border-white-50 pt-2">
                        <h6 class="text mb-1 malekiat">
                            تمامی حقوق این سایت متعلق به مهدکودک نرگس می باشد
                        </h6>
                    </div>

                </div>
            </div>
            <!-- ---------------------- -->
            <div class=" mt-4 tamas-ba-ma-footer ms-3">
                <div class="row  "><h5 class="onvan-tamas-ba-ma-fooer fw-bold text-light">با ما در تماس باشید</h5></div>
                <div class="mt-3">
                    <div class="row text-white-50 icon-footer">
                        <span class=" text-white-50 fs-5 "><i class="bi bi-geo-alt-fill"></i></span>
                        <p class="ms-2">مشهد_خیابان صبا _ صبا77_ پلاک 78</p>
                    </div>
                    <div class="row text-white-50 icon-footer">
                        <span class=" text-white-50 fs-5 "><i class="bi bi-telephone-fill"></i></span>
                        <p class="ms-2">+05133126923</p>
                    </div>
                    <div class="row text-white-50 icon-footer">
                        <span class=" text-white-50 fs-5 "><i class="bi bi-envelope-fill"></i></span>
                        <p class="ms-2">@narges</p>
                    </div>
                    <div class="row text-white-50 icon-footer">
                        <span class=" text-white-50 fs-5 "><i class="bi bi-clock-fill"></i></span>
                        <p class="ms-2">شنبه تا چهارشنبه ها از ساعت 7 صبح تا 4 عصر</p>
                    </div>
                    <div class=" row icon-footer-2 pt-3">
                        <div class=" me-3">
                            <a class="icon-footers nav-item " href=""><i class="bi bi-instagram fs-5 p-2"></i></a>
                        </div>
                        <div class=" me-3">
                            <a class="icon-footers nav-item" href=""><i class="bi bi-whatsapp fs-5 p-2"></i></a>
                        </div>
                        <div class=" me-3">
                            <a class="icon-footers nav-item" href=""><i class="bi bi-twitter fs-5 p-2"></i></a>
                        </div>
                        <div class=" me-3">
                            <a class="icon-footers nav-item" href=""><i class="bi bi-send-fill  fs-5 p-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- --------end-footer-------- -->
</div>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
