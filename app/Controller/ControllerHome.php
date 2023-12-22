<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct(){
        $this->setTitle("LRV Web - Sites, Lojas Virtuais e Marketing");
        $this->setDescription("Você imagina, nós construímos. Na LRV Web, transformamos ideias em experiências digitais extraordinárias. Seja um site elegante, uma loja online vibrante ou uma presença única na web, estamos aqui para concretizar sua visão.");
        $this->setKeywords("portfolio, lucas, vacari, planos, precos, hospedagem, site, lrvweb, lrv, web, desenvolvimento, criacao, sites, ecommerce, marketing, marcas, memoria");
        $this->setDir("home");
        $this->renderLayout();
    }
}