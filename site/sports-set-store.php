<?php include 'header.php'; ?>
<!-- Include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Header -->
<header class="rtl custom-header" style="direction: rtl; text-align: right;">
    <div class="container">
        <h1>فروش ست‌های ورزشی</h1>
        <p class="lead">ست‌های ورزشی با کیفیت عالی برای تمرینات بدنی شما</p>
    </div>
</header>

<div class="container content-section" style="direction: rtl; text-align: right;">
    <!-- کارت فروش ست ورزشی -->
    <div class="row" id="product-section">
        <!-- ست ورزشی 1 -->
        <div class="col-md-6 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="lebas2.webp" class="card-img-top" alt="ست ورزشی 1">
                <div class="card-body">
                    <h5 class="card-title">ست ورزشی مردانه - مشکی</h5>
                    <p class="card-text">ست ورزشی شامل تیشرت، شلوار و کفش مناسب برای تمرینات روزانه. ساخته شده از مواد با کیفیت و راحت برای حرکت آزاد.</p>
                    <p><strong>قیمت: 419,000 تومان</strong></p>
                    <a href="#" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> خرید
                    </a>
                </div>
            </div>
        </div>

        <!-- ست ورزشی 2 -->
        <div class="col-md-6 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="lebas1.jpg" class="card-img-top" alt="ست ورزشی 2">
                <div class="card-body">
                    <h5 class="card-title">ست ورزشی زنانه - صورتی</h5>
                    <p class="card-text">ست ورزشی برای بانوان شامل تاپ، شلوار و کفش مخصوص بدنسازی. طراحی مناسب برای راحتی و انعطاف‌پذیری بیشتر.</p>
                    <p><strong>قیمت: 1,199,000 تومان</strong></p>
                    <a href="#" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> خرید
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ست ورزشی 3 و 4 -->
    <div class="row" id="product-section-more">
        <!-- ست ورزشی 3 -->
        <div class="col-md-6 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="lebas3.webp" class="card-img-top" alt="ست ورزشی 3">
                <div class="card-body">
                    <h5 class="card-title">ست ورزشی مردانه - خاکی</h5>
                    <p class="card-text">ست ورزشی شامل تیشرت، شلوارک و کفش مناسب برای ورزش‌های فیتنس و تمرینات استقامتی.</p>
                    <p><strong>قیمت: 599,000 تومان</strong></p>
                    <a href="#" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> خرید
                    </a>
                </div>
            </div>
        </div>

        <!-- ست ورزشی 4 -->
        <div class="col-md-6 mb-4">
            <div class="card product-card" data-aos="fade-up">
                <img src="lebas4.webp" class="card-img-top" alt="ست ورزشی 4">
                <div class="card-body">
                    <h5 class="card-title">ست ورزشی زنانه - بنفش</h5>
                    <p class="card-text">ست ورزشی شامل تاپ، شلوارک و کفش مخصوص تمرینات تناسب اندام و یوگا. مناسب برای راحتی بیشتر در تمرینات روزانه.</p>
                    <p><strong>قیمت: 249,000 تومان</strong></p>
                    <a href="#" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> خرید
                    </a>
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
    document.querySelectorAll('.btn-primary').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            alert('شما محصول را خریداری کرده‌اید!');
        });
    });
</script>
