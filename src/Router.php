<?php

class Router
{
    public static function route($request)
    {
        $base = dirname($_SERVER['SCRIPT_NAME']);
        $path = str_replace($base, '', $request);

        // Kiểm tra nếu yêu cầu là API
        if (strpos($path, '/api/') === 0) {
            $apiPath = '../api' . $path . '.php';
            if (file_exists($apiPath)) {
                require_once $apiPath;
            } else {
                http_response_code(404);
                echo json_encode(['message' => 'API not found']);
            }
        } else {
            // Kiểm tra ngôn ngữ
            $language = 'vn'; // Default language
            if (preg_match('#^/(en|vn|cn)#', $path, $matches)) {
                $language = $matches[1];
                $path = substr($path, 3); // Loại bỏ phần ngôn ngữ khỏi đường dẫn
            }

            // Xử lý yêu cầu đến giao diện người dùng
            switch ($path) {
                case '/':
                case '/home':
                    require_once "../public/views/$language/home.php";
                    break;
                case '/about':
                    require_once "../public/views/$language/about.php";
                    break;
                case '/contact':
                    require_once "../public/views/$language/contact.php";
                    break;
                case '/staff':
                    require_once "../public/views/$language/staff.php";
                    break;
                case '/vision':
                    require_once "../public/views/$language/vision.php";
                    break;
                case '/responsibility':
                    require_once "../public/views/$language/responsibility.php";
                    break;
                case '/product':
                    require_once "../public/views/$language/product.php";
                    break;
                case '/Crc-60Mhm-166':
                    require_once "../public/views/$language/Crc-60Mhm-166.php";
                    break;
                case '/Crc-72Mhm-166':
                    require_once "../public/views/$language/Crc-72Mhm-166.php";
                    break;
                case '/technology':
                    require_once "../public/views/$language/technology.php";
                    break;
                case '/quality':
                    require_once "../public/views/$language/quality.php";
                    break;
                case '/news':
                    require_once "../public/views/$language/news.php";
                    break;
                case '/pictures':
                    require_once "../public/views/$language/pictures.php";
                    break;
                case '/FAQs':
                    require_once "../public/views/$language/FAQs.php";
                    break;
                case '/recruitment':
                    require_once "../public/views/$language/recruitment.php";
                    break;
                default:
                    http_response_code(404);
                    echo 'Page not found';
                    break;
            }
        }
    }
}
?>