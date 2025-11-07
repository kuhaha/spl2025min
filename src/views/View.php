<?php
abstract class View
{
    static protected $template_dir = 'src/views/templates/';
    
    protected $url_base;
    
    protected $shared = []; # 複数画面に共通する変数
    
    public function __construct($base=null)
    {
        $this->url_base = $base;
    }

    function share($name, $value)
    {
        $this->shared[$name] = $value;
    }

    function render($template, $params)
    {
        ob_start();
        extract($this->shared); # 複数画面共通の変数を用意する
        extract($params); # 個別画面専用の変数を用意する
        include self::$template_dir . "pg_header.php";
        include self::$template_dir . "{$template}.php";
        include self::$template_dir . "pg_footer.php"; 
        ob_end_flush();
    }

    function redirect($url)
    {
        $real_url = $this->url_base . $url;//サイトに相対するURLから実のURLを求める
        header("Location:{$real_url}");
    }
}

class UserView extends View
{
    
}