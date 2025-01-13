<?php
// اسم الملف الذي يحتوي على الأرقام المدخلة
$file = "numbers.txt";

// التحقق إذا كان الملف موجودًا
if (file_exists($file)) {
    // قراءة محتويات الملف في مصفوفة (كل سطر سيكون عنصرًا في المصفوفة)
    $numbers = file($file, FILE_IGNORE_NEW_LINES);

    // إذا كانت هناك أرقام في الملف، نقوم بعرضها
    if ($numbers) {
        echo "<h3>الأرقام المدخلة:</h3>";
        echo "<ul>";
        foreach ($numbers as $number) {
            // عرض كل رقم داخل عنصر <li> مع إضافة htmlspecialchars لتحسين الأمان
            echo "<li>" . htmlspecialchars($number) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "لا توجد أرقام مدخلة.";
    }
} else {
    echo "لا يوجد ملف لحفظ الأرقام.";
}
?>
