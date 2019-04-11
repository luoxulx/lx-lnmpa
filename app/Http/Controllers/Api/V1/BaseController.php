<?php
/**
 * Created by PhpStorm.
 * User: luoxulx
 * Date: 2019/4/11
 * Time: 下午7:27
 */

namespace App\Http\Controllers\Api\V1;

use App\Support\Response;
use App\Support\Transform;
use League\Fractal\Manager;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $response;

    /**
     * ApiController constructor.
     */
    public function __construct()
    {
        $manager = new Manager();

        $this->response = new Response(response(), new Transform($manager));
    }
}
