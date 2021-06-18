<?php
namespace src\Controller;

abstract class AbstractController {
    protected $loader;
    protected $twig;

    public function getTwig(){
        try {
            return $this->twig;
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    public function __construct(){
        try {
            $this->loader = new \Twig\Loader\FilesystemLoader($_SERVER["DOCUMENT_ROOT"]."./../templates");
            $this->twig = new \Twig\Environment($this->loader,[
                "debug" => true,
                "cache" => $_SERVER["DOCUMENT_ROOT"]."/../var/cache"
            ]);
            $this->twig->addExtension(new \Twig\Extension\DebugExtension());
            $this->twig->addGlobal('session', $_SESSION);
            $this->twig->addGlobal('root', ROOT);
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
}