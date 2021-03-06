<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 16.07.2015
 * Time: 15:05
 */

namespace app\project\exceptions;


use app\core\http\HttpStatusCodes;
use Exception;

class UnauthorizedException extends BackendException {
    public function __construct() {
        parent::__construct("This action requires you to be authorized", HttpStatusCodes::HTTP_UNAUTHORIZED);
    }
}