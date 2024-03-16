<?php

require_once '../app/controllers/LoginController.php';
require_once '../app/controllers/ChiHoiController.php';
require_once '../app/controllers/HoiVienController.php';
require_once '../app/controllers/ThongKeController.php';
require_once '../app/controllers/HoatDongController.php';

define('APP_ROOT', dirname(__FILE__, 2));

class Web
{
    public function __construct()
    {
        $routes = [
            'login' => ['controller' => 'LoginController', 'method' => 'index'],
            'login-user' => ['controller' => 'LoginController', 'method' => 'login'],
            'logout' => ['controller' => 'LoginController', 'method' => 'logout'],
            'thong_ke' => ['controller' => 'ThongKeController', 'method' => 'index'],
            'quan_ly_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'index'],
            'them_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'create'],
            'xem_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'show'],
            'sua_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'edit'],
            'xoa_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'delete'],
            'luu_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'store'],
            'cap_nhat_chi_hoi' => ['controller' => 'ChiHoiController', 'method' => 'update'],
            'quan_ly_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'index'],
            'thong_tin_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'show'],
            'them_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'create'],
            'luu_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'store'],
            'sua_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'edit'],
            'cap_nhat_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'update'],
            'xoa_hoi_vien' => ['controller' => 'HoiVienController', 'method' => 'delete'],
            'hoat_dong_hoi_vien' => ['controller' => 'HoatDongController', 'method' => 'index'],
            'dang_ky_hoat_dong' => ['controller' => 'HoatDongController', 'method' => 'index']
        ];

        $route = $_GET['route'] ?? 'login';
        if (array_key_exists($route, $routes)) {
            $controllerName = $routes[$route]['controller'];
            $methodName = $routes[$route]['method'];
            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            echo '404 - Not Found';
        }
    }
}


?>
