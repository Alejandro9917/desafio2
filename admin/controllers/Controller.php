<?php
    abstract class Controller
    {
        public function render($view, $viewBag = array()){
            $file = "../admin/views/" . static::class . "/" . $view;
            $file = str_replace("Controller", "", $file);

            if(is_file($file)){
                ob_start();
                require($file);
                $content = ob_get_contents();
                ob_end_clean();

                echo $content;
            }

            else{
                echo "no sale nada";
            }
        }    
    }
?>