<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 21.07.2015
 * Time: 16:47
 */

namespace app\project\handlers\fixed\api\track;


use app\core\router\RouteHandler;
use app\core\view\JsonResponse;
use app\project\models\Tracks;

class DoDelete implements RouteHandler {
    public function doPost(JsonResponse $response, $track_id) {
        Tracks::delete($track_id);
    }
} 