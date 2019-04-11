<?php
/**
 * Created by PhpStorm.
 * User: luoxulx
 * Date: 2019/4/11
 * Time: 下午7:29
 */

namespace App\Http\Controllers\Api\V1;


class OpenController extends BaseController
{

    public function test()
    {
        return $this->response->json(['xx'=>22]);
    }
}
