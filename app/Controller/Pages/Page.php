<?php
/**
 * Created by PhpStorm.
 * User: Chrystian
 * Date: 20/04/2024
 * Time: 14:08
 */

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{

    /***
     * Método responsável por renderizar o topo da página
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }


    /***
     * Método responsável por renderizar o rodapé da página
     * @return string
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }


    /***
     * Metodo responsável por retornar o conteúdo (view) da página genérica
     * @return string
     */
    public static function getPage($title, $content)
    {

        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }

}