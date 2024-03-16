<?php

class AuthMiddleware {
    public function handle($request, $next) {
        session_start();
        if (!isset($_SESSION['id'])) {
            header('Location: ' . DOMAIN . '?route=login');
            exit;
        }
        return $next($request);
    }
}

?>
