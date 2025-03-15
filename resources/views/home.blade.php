<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت ساده با تم مشکی</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>به سایت من خوش آمدید</h1>
        <nav>
            <ul>
                <li><a href="#">خانه</a></li>
                <li><a href="#">درباره ما</a></li>
                <li><a href="#">تماس با ما</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>صفحه اصلی</h2>
        <p>این یک سایت ساده با تم مشکی است.</p>
        <button id="clickBtn">کلیک کنید</button>
    </main>
    <script src="js/script.js"></script>
</body>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت دانشجویان و دروس</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <div class="container">
        <h2>ثبت دانشجویان برای درس</h2>

        <label for="course">نام درس:</label>
        <input type="text" id="course" placeholder="مثال: برنامه‌نویسی وب">

        <label for="teacher">نام استاد:</label>
        <input type="text" id="teacher" placeholder="مثال: دکتر احمدی">

        <table id="studentTable">
            <thead>
                <tr>
                    <th>نام دانشجو</th>
                    <th>ایمیل</th>
                    <th>شماره تماس</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <!-- اطلاعات دانشجوها اینجا اضافه می‌شوند -->
            </tbody>
        </table>

        <h3>افزودن دانشجو جدید</h3>
        <div class="form-container">
            <input type="text" id="studentName" placeholder="نام دانشجو">
            <input type="email" id="studentEmail" placeholder="ایمیل">
            <input type="text" id="studentPhone" placeholder="شماره تماس">
            <button onclick="addStudent()">افزودن دانشجو</button>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
</html>
