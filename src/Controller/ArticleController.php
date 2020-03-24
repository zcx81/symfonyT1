<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/19
 * Time: 19:27
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     *@Route("/test")
     */
    public function homePage(){
        return new Response("aaaasss");
        //return new Response(" my fist");
        // return new Response("oh my god");

    }

    /**
     * @Route("/news/{params}")
     */
    public  function newsPage($params){
        return new Response(sprintf("news %s", $params));
    }
}