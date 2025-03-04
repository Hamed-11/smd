<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست دروس</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>لیست دروس</h2>
    <table>
        <thead>
            <tr>
                <th>شناسه</th>
                <th>عنوان</th>
                <th>مدت زمان</th>
                <th>مشاهده جزئیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->duration }} ساعت</td>
                    <td><a href="{{ route('courses.show', $course->id) }}">مشاهده</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
