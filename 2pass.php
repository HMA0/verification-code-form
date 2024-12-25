<?php
// بدء الجلسة لتخزين البيانات عبر الصفحات
session_start();

// التحقق من وجود رمز التحقق
if (isset($_POST['verification-code']) && !empty($_POST['verification-code'])) {
    // حفظ رمز التحقق في الجلسة
    $_SESSION['verification_code'] = $_POST['verification-code'];

    // توجيه المستخدم مع رسالة تأكيد عبر الرابط
    header("Location: index.php?message=تم حفظ رمز التحقق بنجاح!");
    exit();
} else {
    // في حال لم يتم إدخال الرمز
    header("Location: index.php?message=الرجاء إدخال رمز التحقق.");
    exit();
}
?>
