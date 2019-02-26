<?php
/**
 * Created by PhpStorm.
 * User: luoxulx
 * Date: 2019/2/26
 * Time: 下午7:40
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('Web.Index.index');
    }
}
