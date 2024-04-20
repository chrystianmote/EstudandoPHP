<?php
/**
 * Created by PhpStorm.
 * User: Chrystian
 * Date: 20/04/2024
 * Time: 14:16
 */

namespace App\Utils;

class View
{

    /***
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view)
    {

        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';

    }

    /***
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @param string $view
     * @param array $vars
     * @return string
     */
    public static function render($view, $vars = [])
    {
        $contentView = self::getContentView($view);

        $keys = array_keys($vars);
        $keysView = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);


        return str_replace($keysView, array_values($vars), $contentView);
    }
}