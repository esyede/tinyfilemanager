<?php

defined('DS') or exit('No direct script access.');

class Tinyfilemanager_Home_Controller extends Controller
{
    public function __construct()
    {
        // Proteksi route dengan middleware
        $middlewares = Config::get('tinyfilemanager::main.middleware');
        $middlewares = array_merge($middlewares, ['auth']);
        $this->middleware('before', $middlewares);
    }

    public function action_index($uri = null)
    {
        return require dirname(__DIR__).DS.'libraries'.DS.'tinyfilemanager.php';
    }
}
