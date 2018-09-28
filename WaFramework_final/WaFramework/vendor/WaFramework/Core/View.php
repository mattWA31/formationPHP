<?php
/**
 * Created by PhpStorm.
 * User: MDO
 * Date: 28/09/2018
 * Time: 11:15
 */

namespace WaFramework\Core;


class View extends AppManager
{
    private $contentFile;
    private $params = [];


    public function addParam($param, $value){
        $this->params[$param] = $value;
    }

    public function getView(){

        if(!file_exists($this->contentFile)){
            throw new \RuntimeException("La vue n'existe pas");
        }

        // Extraction des clé du tableau params et conversion en variables
        extract($this->params);

        // Creation d'un buffer de temporisation
        ob_start();
        require $this->contentFile;
        $content = ob_get_clean();

        ob_start();
        require __DIR__ . '/../../../App/' . $this->getApp()->getName() . '/Templates/layout.php';
        return ob_get_clean();
    }

    /**
     * @return mixed
     */
    public function getContentFile()
    {
        return $this->contentFile;
    }

    /**
     * @param mixed $contentFile
     */
    public function setContentFile($contentFile)
    {
        $this->contentFile = $contentFile;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }


}