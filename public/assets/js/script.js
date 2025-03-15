document.getElementById("clickBtn").addEventListener("click", function() {
    alert("دکمه کلیک شد!");
});
function addStudent() {
    var studentName = document.getElementById("studentName").value;
    var studentEmail = document.getElementById("studentEmail").value;
    var studentPhone = document.getElementById("studentPhone").value;

    if (studentName === "" || studentEmail === "" || studentPhone === "") {
        alert("لطفاً تمامی اطلاعات دانشجو را وارد کنید!");
        return;
    }

    var table = document.getElementById("studentTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow();

    newRow.innerHTML = `
        <td>${studentName}</td>
        <td>${studentEmail}</td>
        <td>${studentPhone}</td>
        <td><button class="delete-btn" onclick="deleteStudent(this)">حذف</button></td>
    `;

    // پاک کردن فیلدهای ورودی
    document.getElementById("studentName").value = "";
    document.getElementById("studentEmail").value = "";
    document.getElementById("studentPhone").value = "";
}

function deleteStudent(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
}
