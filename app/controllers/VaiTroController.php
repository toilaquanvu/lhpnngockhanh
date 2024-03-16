<?php

require_once('../app/libs/DBConnection.php');
require_once('../app/services/VaiTroServices.php');
class VaiTroController {

  public function __construct()
  {
    $this->vaiTroServices = new VaiTroServices();
  }

  public function checkPermission($role, $permission)
  {
    $roleServices = new VaiTroServices();

  }
}