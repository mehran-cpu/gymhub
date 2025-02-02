<?php include 'header.php'; ?>
<!-- Include Bootstrap CSS -->

<!-- Header -->
<header class="rtl custom-header" style="direction: rtl; text-align: center;">
    <div class="container">
        <h1 class="animated-text">ثبت‌نام</h1>
        <p class="lead">حساب کاربری جدید بسازید و از امکانات سایت استفاده کنید.</p>
    </div>
</header>

<div class="container content-section register-content" style="direction: rtl; text-align: right;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card glass-card">
                <div class="card-body">
                    <h4 class="card-title text-center">فرم ثبت‌نام</h4>
                    <form action="confing.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">نام کاربری</label>
                            <input type="text" name="name" class="form-control input-effect" id="username" placeholder="نام کاربری خود را وارد کنید" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">ایمیل</label>
                            <input type="email" name="email" class="form-control input-effect" id="email" placeholder="ایمیل خود را وارد کنید" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">رمز عبور</label>
                            <input type="password" name="password" class="form-control input-effect" id="password" placeholder="رمز عبور خود را وارد کنید" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block w-100 glowing-button">ثبت‌نام</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>قبلاً حساب کاربری دارید؟ <a href="login.php">ورود به حساب</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background: url('gym.jpg') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        margin: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        overflow: hidden;
    }

    header.custom-header {
        background: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        text-align: right;
    }

    .animated-text {
        font-size: 2.5rem;
        font-weight: bold;
        background: linear-gradient(90deg, #ffd700, #ff8c00);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: glow 2s infinite alternate;
    }

    @keyframes glow {
        from { text-shadow: 0 0 10px #ffd700; }
        to { text-shadow: 0 0 20px #ff8c00; }
    }

    .glass-card {
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
        transition: transform 0.3s ease;
        text-align: right;
    }

    .glass-card:hover {
        transform: scale(1.05);
    }

    .input-effect {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.3);
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .input-effect:focus {
        background: rgba(255, 255, 255, 0.2);
        border-color: #ffd700;
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.8);
    }

    .glowing-button {
        background: linear-gradient(90deg, #007bff, #00d4ff);
        border: none;
        font-size: 16px;
        padding: 12px;
        border-radius: 50px;
        color: #fff;
        font-weight: bold;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .glowing-button:hover {
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.8);
        transform: translateY(-5px);
    }

    a {
        color: #ffd700;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #ff8c00;
    }
</style>

<?php include 'footer.php'; ?>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>