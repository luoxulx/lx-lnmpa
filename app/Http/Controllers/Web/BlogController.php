<?php
/**
 * Created by PhpStorm.
 * User: luoxulx
 * Date: 2019/4/11
 * Time: 下午4:26
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index()
    {
        return view('web.blog.index');
    }
}
