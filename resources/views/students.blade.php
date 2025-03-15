<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت دانشجویان</title>
</head>
<body>

    <h2>لیست دانشجویان</h2>
    <table border="1">
        <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شماره تماس</th>
                <th>درس</th>
                <th>استاد</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody id="studentTable">
        </tbody>
    </table>

    <script>
        function loadStudents() {
            fetch("/students")
                .then(response => response.json())
                .then(data => {
                    let tableBody = document.getElementById("studentTable");
                    tableBody.innerHTML = "";
                    data.forEach(student => {
                        let row = `<tr>
                            <td>${student.name}</td>
                            <td>${student.email}</td>
                            <td>${student.phone}</td>
                            <td>${student.course}</td>
                            <td>${student.teacher}</td>
                            <td><button onclick="deleteStudent(${student.id})">حذف</button></td>
                        </tr>`;
                        tableBody.innerHTML += row;
                    });
                });
        }

        function deleteStudent(id) {
            fetch(`/students/${id}`, {
                method: "DELETE"
            })
            .then(response => response.json())
            .then(result => {
                alert(result.message);
                loadStudents();
            });
        }

        window.onload = loadStudents;
    </script>
</body>
</html>
