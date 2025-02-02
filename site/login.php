<?php include 'header.php'; ?>
<!-- Include Bootstrap CSS -->

<!-- Header -->
<header class="rtl custom-header" style="direction: rtl; text-align: center;">
    <div class="container">
        <h1 class="animated-text">ورود به حساب</h1>
        <p class="lead">برای دسترسی به حساب خود وارد شوید.</p>
    </div>
</header>

<div class="container content-section login-content">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card glass-card">
                <div class="card-body">
                    <h4 class="card-title text-center">فرم ورود</h4>
                    <form action="confin2.php" method="post" style="direction: rtl; text-align: right;">
                        <div class="mb-3">
                            <label for="username" class="form-label form-text-bold">نام کاربری</label>
                            <input type="text" name="name" class="form-control input-effect" id="username" placeholder="نام کاربری خود را وارد کنید" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label form-text-bold">رمز عبور</label>
                            <input type="password" name="password" class="form-control input-effect" id="password" placeholder="رمز عبور خود را وارد کنید" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block w-100 glowing-button">ورود</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>حساب کاربری ندارید؟ <a href="register.php">ثبت‌نام کنید</a></p>
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
        overflow: hidden;
        color: #fff;
    }

    header.custom-header {
        background: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
    }

    .animated-text {
        font-size: 2.5rem;
        background: linear-gradient(90deg, #ffd700, #ff8c00);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: glow 2s infinite alternate;
        font-weight: bold;
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
    }

    .glass-card:hover {
        transform: scale(1.05);
    }

    .input-effect {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
        font-weight: bold;
        direction: rtl;
        text-align: right;
    }

    .input-effect:focus {
        background: rgba(255, 255, 255, 0.2);
        border-color: #ffd700;
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.8);
    }

    .form-text-bold {
        font-weight: bold;
    }

    .glowing-button {
        background: linear-gradient(90deg, #007bff, #00d4ff);
        border: none;
        font-size: 16px;
        padding: 12px;
        border-radius: 50px;
        color: #fff;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        font-weight: bold;
    }

    .glowing-button:hover {
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.8);
        transform: translateY(-5px);
    }

    a {
        color: #ffd700;
        transition: color 0.3s ease;
        font-weight: bold;
    }

    a:hover {
        color: #ff8c00;
    }
</style>

<?php include 'footer.php'; ?>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>