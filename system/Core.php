<?php

namespace system;

class Core {

    /**
     * The core instance
     * @var Core
     */
    public static $instance;

    /**
     * The smarty instance
     * @var \Smarty
     */
    private $smarty;

    /**
     * The class loader
     * @var ClassLoader
     */
    private $classLoader;

    /**
     * The exception handler
     * @var ExceptionHandler
     */
    private $exceptionHandler;

    /**
     * The main Core it's the most important part of OSGP
     * @author DevChuckNorris
     */
    public function __construct() {
        $this->init();
        Core::$instance = $this;
    }

    public function run() {
        $this->smarty->display("login.tpl");
    }

    public function isDebug() {
        return true;
    }

    /**
     * Initialize smarty, database, config ...
     * @author DevChuckNorris
     */
    public function init() {
        $this->initDefines();
        $this->initClassLoader();
        $this->initLogger();
        $this->initExceptionHandler();
        $this->initSmarty();
    }

    /**
     * Init all defines:
     *
     * DS - Short form of DIRECTORY_SEPARATOR
     * ROOT_DIR - Root directory with system folder, template folder and libs folder
     * SYSTEM_DIR - System directory
     *
     * @author DevChuckNorris
     */
    private function initDefines() {
        if(!defined("DS")) {                    // Short form of DIRECTORY_SEPARATOR
            define("DS", DIRECTORY_SEPARATOR);
        }

        if(!defined("ROOT_DIR")) {              // The root directory (should be relative ../)
            define("ROOT_DIR", realpath(dirname(__FILE__) . DS . ".." . DS) . DS);
        }

        if(!defined("SYSTEM_DIR")) {
            define("SYSTEM_DIR", ROOT_DIR . "system" . DS);
        }
    }

    /**
     * Create a class loader instance to work without include / require
     */
    private function initClassLoader() {
        require(SYSTEM_DIR . "ClassLoader.php");

        $this->classLoader = new ClassLoader();
    }

    /**
     * Initialize the logger
     */
    private function initLogger() {
        Logger::init(0);
    }

    /**
     * Initialize Smarty
     */
    private function initSmarty() {
        require(ROOT_DIR . "libs" . DS . "smarty" . DS . "Smarty.class.php");

        $this->smarty = new \Smarty();
        $this->smarty->setTemplateDir(ROOT_DIR . "templates" . DS);
        $this->smarty->setCompileDir(ROOT_DIR . "templates" . DS . "compiled" . DS);
        $this->smarty->debugging = $this->isDebug();
        $this->smarty->caching = false;

        $this->smarty->assign('PATH', '/OSGP/');
        $this->smarty->assign('URL', $_GET['page']);
    }

    /**
     * Create a exception handler
     */
    private function initExceptionHandler() {
        $this->exceptionHandler = new ExceptionHandler();
    }

}