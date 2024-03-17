<?php

require_once '../app/controllers/LoginController.php';
require_once '../app/controllers/ChiHoiController.php';
require_once '../app/controllers/HoiVienController.php';
require_once '../app/controllers/ThongKeController.php';
require_once '../app/controllers/HoatDongController.php';
require_once '../app/middlewares/AuthMiddleware.php';

define('APP_ROOT', dirname(__FILE__, 2));

class Web
{
    public function __construct()
    {
        // Define routes
        $routes = [
            // Routes không cần middleware
            'login' => ['controller' => 'LoginController', 'method' => 'index'],
            'login-user' => ['controller' => 'LoginController', 'method' => 'login'],
            // Các routes cần middleware
            'logout' => ['controller' => 'LoginController', 'method' => 'logout'],
            'thong_ke' => ['controller' => 'ThongKeController', 'method' => 'index'],
            // Chi hội
            'quan_ly_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'index'],
            'them_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'create'],
            'chi_tiet_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'show'],
            'sua_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'edit'],
            'xoa_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'delete'],
            'luu_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'store'],
            'cap_nhat_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'update'],
            // Hội viên
            'quan_ly_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'index'],
            'thong_tin_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'show'],
            'them_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'create'],
            'luu_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'store'],
            'sua_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'edit'],
            'cap_nhat_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'update'],
            'xoa_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'delete'],
            // Hoạt động hội viên
            'hoat_dong_chi_hoi' => ['controller' => 'HoatDongController', 'method' => 'index'],
            'them_moi_hoat_dong' => ['controller' => 'HoatDongController', 'method' => 'create'],
            'luu_hoat_dong' => ['controller' => 'HoatDongController', 'method' => 'store'],
            'sua_hoat_dong' => ['controller' => 'HoatDongController', 'method' => 'edit'],
            'cap_nhat_hoat_dong' => ['controller' => 'HoatDongController', 'method' => 'update'],
            'dang_ky_hoat_dong' => ['controller' => 'HoatDongController', 'method' => 'updateHoatDongChiHoi'],
            'xoa_hoat_dong' => ['controller' => 'HoatDongController', 'method' => 'delete'],
        ];

        $route = $_GET['route'] ?? 'login';
        if (array_key_exists($route, $routes)) {
            $controllerName = $routes[$route]['controller'];
            $methodName = $routes[$route]['method'];

            if (in_array($route, [
                'logout', 'thong_ke', 'quan_ly_chi_hoi', 'them_chi_hoi',
                'xem_chi_hoi', 'sua_chi_hoi', 'xoa_chi_hoi', 'luu_chi_hoi',
                'cap_nhat_chi_hoi', 'quan_ly_hoi_vien', 'thong_tin_hoi_vien',
                'them_hoi_vien', 'luu_hoi_vien', 'sua_hoi_vien',
                'cap_nhat_hoi_vien', 'xoa_hoi_vien',
                'hoat_dong_chi_hoi', 'them_moi_hoat_dong', 'luu_hoat_dong',
                'sua_hoat_dong', 'cap_nhat_hoat_dong', 'xoa_hoat_dong',
                'dang_ky_hoat_dong'
            ])) {
                $middleware = new AuthMiddleware(); // Khởi tạo middleware
                $middleware->handle($_GET, function () use ($controllerName, $methodName) {
                    $controller = new $controllerName();
                    $controller->$methodName();
                });
            } else {
                $controller = new $controllerName();
                $controller->$methodName();
            }
        } else {
            echo '404 - Not Found';
        }
    }
}

?>
