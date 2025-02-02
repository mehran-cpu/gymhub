

    <!-- header.php -->
    <!DOCTYPE html>
    <html lang="fa">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GymHub</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="bootstrap.js">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <style>
            /* Global Styles */
            body {
                font-family: 'Arial', sans-serif;
                background:  url('gym.jpg')  no-repeat center center fixed;
                background-size: cover;
                color: #fff;
            }

            .navbar {
                background: rgba(0, 0, 0, 0.6);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                transition: background 0.3s ease-in-out;
            }
            
            .navbar:hover {
                background: rgba(0, 0, 0, 0.8);
            }

            .navbar-brand {
                font-size: 30px;
                font-weight: bold;
                color: #FFD700;
                letter-spacing: 2px;
                transition: color 0.3s ease-in-out;
            }

            .navbar-brand:hover {
                color: #fff;
            }
            .navbar-dark .nav-link {
    color: #fff; /* رنگ سفید برای لینک‌ها */
    transition: color 0.3s ease-in-out;
}

.navbar-dark .nav-link:hover {
    color: #FFD700; /* رنگ طلایی هنگام شناور */
}

.dropdown-menu {
    background: rgba(0, 0, 0, 0.9); /* پس‌زمینه مشکی برای منوی کشویی */
    border: none;
}

.dropdown-item {
    color: #fff; /* رنگ سفید برای گزینه‌های منو */
    font-size: 16px;
    transition: color 0.3s ease-in-out;
}

.dropdown-item:hover {
    color: #FFD700; /* رنگ طلایی هنگام شناور */
    background: rgba(255, 255, 255, 0.1); /* پس‌زمینه ملایم هنگام شناور */
}
    

            /* Animation on Navbar */
            .navbar-nav {
                animation: fadeIn 1s ease-in-out;
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                    transform: translateY(-30px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    <body dir="rtl" class="bg-dark text-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">GymHub</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">ورود</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">ثبت نام</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="supplementsDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                مکمل‌ها
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="supplementsDropdown">
                                <li><a class="dropdown-item" href="protein.php">پروتئین‌ها</a></li>
                                <li><a class="dropdown-item" href="vitamins.php">ویتامین‌ها</a></li>
                                <li><a class="dropdown-item" href="energyBoosters.php">افزایش‌دهنده‌های انرژی</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="clothesDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                لباس‌ها
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="clothesDropdown">
                                <li><a class="dropdown-item" href="sportswear.php">لباس‌های ورزشی</a></li>
                                <li><a class="dropdown-item" href="shoes.php">کفش‌ها</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="equipmentDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                لوازم ورزشی
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="equipmentDropdown">
                                <li><a class="dropdown-item" href="weights.php">وزنه‌ها</a></li>
                                <li><a class="dropdown-item" href="machines.php">دستگاه‌های بدنسازی</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="calculationsDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    محاسبات
                </a>
                <ul class="dropdown-menu" aria-labelledby="calculationsDropdown">
                    <li><a class="dropdown-item" href="bmi.php">محاسبه BMI</a></li>
                    <li><a class="dropdown-item" href="metabolism.php">محاسبه متابولیسم</a></li>
                    <li><a class="dropdown-item" href="protoincal.php">محاسبه پروتئین‌</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="storeDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    فروشگاه
                </a>
                <ul class="dropdown-menu" aria-labelledby="storeDropdown">
                    <li><a class="dropdown-item" href="supplements-store.php">خرید مکمل</a></li>
                    <li><a class="dropdown-item" href="sports-set-store.php">خرید ست ورزشی</a></li>
                </ul>
            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">سبد خرید</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">تماس با ما</a>
                        </li>
                        <a href="logout.php" class="btn btn-danger glowing-button">خروج از حساب</a>

                    </ul>
                </div>
            </div>
        </nav>
        <Style>
            .btn-danger {
    background: linear-gradient(90deg, #ff4d4d, #ff1a1a);
    border: none;
    color: #fff;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 50px;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.btn-danger:hover {
    box-shadow: 0 0 20px rgba(255, 26, 26, 0.8);
    transform: translateY(-5px);
}

        </Style>