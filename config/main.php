<?php

defined('DS') or exit('No direct script access.');

return [

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Middleware untuk proteksi akses ke tiny file manager. Pastikan proteksi ini
    | diaktifkan dan pastikan HANYA ADMIN yang bisa mengakses tiny file manager.
    |
    */

    'middleware' => [
        'auth',
        // 'admin_only',
    ],
];
