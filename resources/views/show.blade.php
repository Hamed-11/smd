<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشخصات درس</title>
</head>
<body>
    <h2>مشخصات درس</h2>
    <p><strong>عنوان:</strong> {{ $course->title }}</p>
    <p><strong>توضیحات:</strong> {{ $course->description }}</p>
    <p><strong>مدت زمان:</strong> {{ $course->duration }} ساعت</p>
    <a href="{{ route('courses.index') }}">بازگشت به لیست دروس</a>
</body>
</html>
