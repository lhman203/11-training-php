<?php
function encryptUserId($user_id) {
    // Mã hóa ID người dùng
    $encoded = base64_encode($user_id);
    
    // Tạo 3 ký tự ngẫu nhiên
    $randomChars = bin2hex(random_bytes(2)); // 2 bytes = 4 hex characters
    $randomChars = substr($randomChars, 0, 3); // Chỉ lấy 3 ký tự đầu

    // Trả về chuỗi đã mã hóa kèm theo 3 ký tự ngẫu nhiên
    return $encoded . $randomChars;
}

function decryptUserId($user_id) {
    // Loại bỏ 3 ký tự ngẫu nhiên ở cuối
    $originalEncoded = substr($user_id, 0, -3);
    
    // Giải mã ID người dùng
    return base64_decode($originalEncoded);
}
?>
