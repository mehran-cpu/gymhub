<?php include 'header.php'; ?>
<!-- Header -->
<header class="rtl custom-header" style="direction: rtl; text-align: center;">
    <div class="container">
        <h1 style="color: #fff;">محاسبه‌گر نیاز روزانه پروتئین</h1>
        <p class="lead" style="color: #e0e0e0;">با وارد کردن اطلاعات خود، میزان پروتئین روزانه مورد نیازتان را محاسبه کنید.</p>
    </div>
</header>

<div class="container content-section" style="direction: rtl; text-align: right;">
    <!-- فرم ورودی محاسبه پروتئین -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="background: rgba(0, 0, 0, 0.7); backdrop-filter: blur(10px); border: none; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);">
                <div class="card-header text-center" style="background: rgba(0, 0, 0, 0.8); border-bottom: 1px solid rgba(255, 255, 255, 0.2); color: #fff;">
                    <h4>ورود اطلاعات برای محاسبه پروتئین</h4>
                </div>
                <div class="card-body">
                    <form id="proteinForm">
                        <div class="mb-3">
                            <label for="weight" class="form-label" style="color: #e0e0e0;">وزن (کیلوگرم):</label>
                            <input type="number" class="form-control" id="weight" name="weight" placeholder="وزن خود را وارد کنید" style="background: rgba(255, 255, 255, 0.1); color: #fff; border: 1px solid rgba(255, 255, 255, 0.3);" required>
                        </div>
                        <div class="mb-3">
                            <label for="activityLevel" class="form-label" style="color: #e0e0e0;">سطح فعالیت:</label>
                            <select class="form-control" id="activityLevel" name="activityLevel" style="background: rgba(255, 255, 255, 0.1); color: #fff; border: 1px solid rgba(255, 255, 255, 0.3);" required>
                                <option value="1.2">خیلی کم تحرک (بدون ورزش)</option>
                                <option value="1.4">کم تحرک (ورزش سبک 1-3 روز در هفته)</option>
                                <option value="1.6">فعال متوسط (ورزش متوسط 3-5 روز در هفته)</option>
                                <option value="1.8">خیلی فعال (ورزش شدید 6-7 روز در هفته)</option>
                                <option value="2.0">بسیار فعال (ورزش شدید یا هدف افزایش حجم)</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background: #007bff; border: none; font-size: 16px;">محاسبه</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- نمایش نتیجه -->
    <div id="resultSection" class="row justify-content-center mt-4" style="display: none;">
        <div class="col-md-6">
            <div class="card" style="background: rgba(0, 0, 0, 0.7); backdrop-filter: blur(10px); border: none; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);">
                <div class="card-header text-center" style="background: rgba(0, 0, 0, 0.8); border-bottom: 1px solid rgba(255, 255, 255, 0.2); color: #ffd700;">
                    <h4>نتیجه محاسبه پروتئین</h4>
                </div>
                <div class="card-body text-center">
                    <p id="proteinResult" style="color: #fff; font-size: 18px;">میزان پروتئین روزانه مورد نیاز شما: <strong></strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('proteinForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // دریافت مقادیر ورودی
        var weight = parseFloat(document.getElementById('weight').value);
        var activityLevel = parseFloat(document.getElementById('activityLevel').value);

        // بررسی مقادیر ورودی
        if (isNaN(weight) || weight <= 0) {
            alert('لطفاً مقدار صحیحی برای وزن وارد کنید!');
            return;
        }

        // محاسبه نیاز پروتئین
        var proteinNeeded = weight * activityLevel;

        // گرد کردن نتیجه
        proteinNeeded = proteinNeeded.toFixed(2);

        // نمایش نتیجه
        document.getElementById('proteinResult').innerHTML = 'میزان پروتئین روزانه مورد نیاز شما: <strong>' + proteinNeeded + ' گرم</strong>';
        document.getElementById('resultSection').style.display = 'block';
    });
</script>

<?php include 'footer.php'; ?>
