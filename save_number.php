<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // التحقق من وجود قيمة الرقم
    if (isset($_POST['number'])) {
        $number = $_POST['number'];

        // تحديد اسم الملف الذي سيتم تخزين الأرقام فيه
        $file = 'numbers.txt';

        // فتح الملف لكتابة الرقم فيه
        $file_handle = fopen($file, 'a');  // 'a' تعني إضافة النص في نهاية الملف

        // التأكد من فتح الملف بشكل صحيح
        if ($file_handle) {
            fwrite($file_handle, $number . "\n");  // إضافة الرقم مع فاصل سطر جديد
            fclose($file_handle);  // إغلاق الملف بعد الكتابة

            echo "<p>تم تخزين الرقم بنجاح!</p>";
        } else {
            echo "<p>حدث خطأ أثناء تخزين الرقم.</p>";
        }
    } else {
        echo "<p>الرجاء إدخال رقم.</p>";
    }
} else {
    echo "<p>الطريقة غير صحيحة.</p>";
}
?>
