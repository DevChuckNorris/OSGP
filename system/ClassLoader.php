<?php
namespace system;

class ClassLoader {

    private $fileEnds;

    /**
     * Create the class loader instance and register the autoload
     */
    public function __construct() {
        $this->directories = array();
        $this->fileEnds = array("class.php", "php", "interface.php", "plugin.php");

        spl_autoload_register(array($this, "load"));
    }

    /**
     * Try to load a class
     *
     * @param $name string class name
     * @throws \Exception
     */
    public function load($name) {
        // Cancel if class already loaded and ignore smarty classes
        if(class_exists($name) || strpos($name, "Smarty") !== false) {
            return;
        }
        $path = $this->getFilePath($name);
        if($path !== false) {
            require($path);
        } else {
            throw new \Exception("Failed to load class " . $name);  // Only throw a normal Exception here
                                                                    // because of preventing php fatal error
        }
    }

    /**
     * Search for the file
     *
     * @param $name string class name
     * @return bool|string
     */
    public function getFilePath($name) {
        // Fixing directory seperator for linux systems
        $name = str_replace("\\", DS, $name);

        foreach ($this->fileEnds as $fileEnd) {
            if(file_exists(ROOT_DIR . $name . "." . $fileEnd)) {
                return ROOT_DIR . $name . "." . $fileEnd;
            }
        }
        return false;
    }

}