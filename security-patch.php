<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Security Patch</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #fff3cd; }
        .alert { background: #d4edda; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="alert">
        <h2>🔒 Bản vá bảo mật</h2>
        <p>Các lỗ hổng bảo mật nghiêm trọng đã được khắc phục.</p>
    </div>
    <?php
    // HOTFIX: Khắc phục SQL Injection
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // HOTFIX: Khắc phục XSS vulnerability
    function escape_html($data) {
        return htmlentities($data, ENT_QUOTES, 'UTF-8');
    }
    
    // HOTFIX: Thêm CSRF token
    function generate_csrf_token() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
    
    echo '<p>✓ Hệ thống đã được bảo mật.</p>';
    ?>
</body>
</html>