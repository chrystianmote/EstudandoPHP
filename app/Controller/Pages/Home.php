<?php
/**
 * Created by PhpStorm.
 * User: Chrystian
 * Date: 20/04/2024
 * Time: 14:08
 */

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page
{

    /***
     * Metodo responsável por retornar o conteúdo (view) da Home
     * @return string
     */
    public static function getHome()
    {
        $obOrganization = new Organization();

        $content = View::render('pages/home', [
            'name' => $obOrganization->name,
            'site' => $obOrganization->site,
            'description' => $obOrganization->description
        ]);
        $title = "Pagina Home";


        //Retorna a View da página base (page.html)
        return parent::getPage($title, $content);

    }

}