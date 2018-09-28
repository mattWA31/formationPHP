<?php
/**
 * Created by PhpStorm.
 * User: Boudha
 * Date: 16/09/2018
 * Time: 04:19
 */

namespace WaFramework\Core;


class View extends AppManager
{
    protected $contentFile;
    protected $params = [];

    public function addParam($param, $value){
        if(!is_string($param) || is_numeric($param) || empty($param)){
            throw new \InvalidArgumentException("Le nom du parametre doit être une chaine de caractère non nulle");
        }

        $this->params[$param] = $value;
    }

    public function getView(){

        if(!file_exists($this->contentFile)){
            throw new \RuntimeException("La vue n'existe pas");
        }

        extract($this->params);

        ob_start();
        require $this->contentFile;
        $content = ob_get_clean();

        ob_start();
        require __DIR__ . '/../../../App/' . $this->getApp()->getName() . '/Templates/layout.php';
        return ob_get_clean();

    }

    public function setContentFile($contentFile){
        if (!is_string($contentFile) || empty($contentFile)) {
            throw new \InvalidArgumentException('La vue spécifiée est invalide');
        }
        $this->contentFile = $contentFile;
    }
}