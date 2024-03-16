<?php

class AuthMiddleware {
  public function handle($request, $next) {
    session_start();
    if (!isset($_SESSION['id'])) {
      echo "You not permission";
      header('Location:' . DOMAIN . '?route=login');
    }
    return $next($request);
  }
}