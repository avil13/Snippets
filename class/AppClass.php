<?php

class AppClass {

    public $folders = array();

    function __construct($folders = array()) {
        $this->folders = $folders;
    }

    /**
     * Получение списка файлов в папке
     * @param  string $f_name название папки с файлами
     * @return array
     */
    public function file_list($folder){
        return empty($this->folders[$folder]) ? [] : $this->folders[$folder];
    }

    /**
     * проверка на AJAX
     * @return boolean
     */
    public function is_ajax(){
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest');
    }

    /**
     * функция поиска сниппетов в папке
     * @param  string $dir
     * @return array
     */
    public function search($dir) {
        return glob('snippets/'. $dir . '/*html');
    }



    /**
     * получение данных из файла
     * @param  string $path путь к файлу
     * @return [type]       [description]
     */
    public function get_info($path){

        $res = array(
            'desc' => '',
            'html' => '',
            'css' => '',
            'js' => '',
            );

        $cont = file_get_contents($path);
        preg_match('/<!--==([\s\S]*)==-->/', $cont, $res['desc']);
        preg_match('/<style>([\s\S]*)<\/style>/', $cont, $res['css']);
        preg_match('/<script>([\s\S]*)<\/script>/', $cont, $res['js']);

        $pattern = '/<!--==([\s\S]*)==-->|<style>([\s\S]*)<\/style>|<script>([\s\S]*)<\/script>/i';
        $res['html'] = preg_replace($pattern, '', $cont);
        $res['html'] = trim($res['html']);

        // print_r($res);
        // exit();

        foreach ($res as $k => $v) {
            $str = (is_array($v) && !empty($v[1])) ? $v[1] :  (is_string($v) ? $v : '');
            $res[$k] = htmlspecialchars($str);
        }

        $res['desc'] = $this->title($res['desc']);

        return $res;
    }


    private function title($str){
        preg_match('/title:(.*)/', $str, $title);
        preg_match('/description:(.*)/', $str, $description);

        $res = array(
            'title'       => is_array($title) ? $title[1] : $title,
            'description' => is_array($description) ? $description[1] : $description,
            );

        return $res;
    }


}