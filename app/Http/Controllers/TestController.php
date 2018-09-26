<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
/**
 * Created by PhpStorm.
 * User: wangguan
 * Date: 2018/9/13
 * Time: 下午5:15
 */
class TestController extends Controller
{

    public function __construct()
    {

    }


    public function index(){

        echo '测试11111';die;
    }


}
