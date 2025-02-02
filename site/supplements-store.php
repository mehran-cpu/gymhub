<?php include 'header.php'; ?>
<!-- Include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Header -->
<header class="rtl custom-header" style="direction: rtl; text-align: right;">
    <div class="container">
        <h1>فروش مکمل‌های ورزشی</h1>
        <p class="lead">مکمل‌های ورزشی با کیفیت عالی برای بهبود عملکرد بدنی شما</p>
    </div>
</header>

<div class="container content-section" style="direction: rtl; text-align: right;">
    <!-- کارت فروش مکمل -->
    <div class="row" id="product-section">
        <!-- مکمل 1 -->
        <div class="col-md-4 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="mahsol1.webp" class="card-img-top" alt="مکمل 1">
                <div class="card-body">
                    <h5 class="card-title">پودر گینر گلد دکتر سان - 3 کیلوگرم</h5>
                    <p class="card-text">کمک به تامین کربوهیدرات و پروتئین مورد نیاز ورزشکار...</p>
                    <p><strong>قیمت: 1,997,690 تومان</strong></p>
                    <a href="#" class="btn btn-success">خرید</a>
                </div>
            </div>
        </div>

        <!-- مکمل 2 -->
        <div class="col-md-4 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="mahsol2.webp" class="card-img-top" alt="مکمل 2">
                <div class="card-body">
                    <h5 class="card-title">پودر پمپ فانتوم -600 گرم</h5>
                    <p class="card-text">مکمل پمپ برای افزایش جریان خون و اکسیژن به عضلات...</p>
                    <p><strong>قیمت: 1,194,810 تومان</strong></p>
                    <a href="#" class="btn btn-success">خرید</a>
                </div>
            </div>
        </div>

        <!-- مکمل 3 -->
        <div class="col-md-4 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="mahsol3.webp" class="card-img-top" alt="مکمل 3">
                <div class="card-body">
                    <h5 class="card-title">پودر وی پروتئین - 2 کیلوگرم</h5>
                    <p class="card-text">حاوی اسید آمینه‌های شاخه دار و مقادیر کمی چربی و کربوهیدرات...</p>
                    <p><strong>قیمت: 450,000 تومان</strong></p>
                    <a href="#" class="btn btn-success">خرید</a>
                </div>
            </div>
        </div>
    </div>

    <!-- بیشتر اضافه کنید -->
    <div class="row" id="product-section-more">
        <!-- مکمل 4 -->
        <div class="col-md-4 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="mahsol4.webp" class="card-img-top" alt="مکمل 4">
                <div class="card-body">
                    <h5 class="card-title">پودر کراتین مونوهیدرات - 300 گرم</h5>
                    <p class="card-text">پودر کراتین مونوهیدرات اولترا پاور پگاه...</p>
                    <p><strong>قیمت: 741,800 تومان</strong></p>
                    <a href="#" class="btn btn-success">خرید</a>
                </div>
            </div>
        </div>

        <!-- مکمل 5 -->
        <div class="col-md-4 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="mahsol5.webp" class="card-img-top" alt="مکمل 5">
                <div class="card-body">
                    <h5 class="card-title">کلستروم سام فیت -450 گرم</h5>
                    <p class="card-text">پودر کلستروم سام فیت برسام فارمد...</p>
                    <p><strong>قیمت: 841,260 تومان</strong></p>
                    <a href="#" class="btn btn-success">خرید</a>
                </div>
            </div>
        </div>

        <!-- مکمل 6 -->
        <div class="col-md-4 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="mahsol6.webp" class="card-img-top" alt="مکمل 6">
                <div class="card-body">
                    <h5 class="card-title">مکمل ال گلوتامین 5000 - 300 گرم</h5>
                    <p class="card-text">پودر ال گلوتامین ۵۰۰۰ یوروویتال...</p>
                    <p><strong>قیمت: 413,000 تومان</strong></p>
                    <a href="#" class="btn btn-success">خرید</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- Add JavaScript for smooth animations -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS for scroll animations
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        offset: 200
    });

    // Optional: Smooth scroll on button click
    document.querySelectorAll('.btn-success').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            alert('شما محصول را خریداری کرده‌اید!');
        });
    });
</script>
