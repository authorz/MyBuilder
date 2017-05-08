<?php
namespace MyBuilder;

class Config
{
    public $config;

    public $tableConfig;

    public function __construct($config = NULL)
    {
        if (isset($config)) {
            $this->config = $config;
        } else {
            $this->defaultConfig();
        }
    }

    protected function defaultConfig()
    {

        $this->config = [
            'js' => [
                '/asstes/js/vendor/modernizr-3.3.1.min.js',
                '/asstes/js/vendor/jquery-2.2.4.min.js',
                '/asstes/js/plugins.js',
                '/asstes/js/app.js',
                '/asstes/js/pages/formsComponents.js',
                '/asstes/js/plugins/ckeditor/ckeditor.js',
                '/asstes/js/vendor/bootstrap.min.js',
                '/asstes/js/pages/uiTables.js',
                '/asstes/plugin/toast/src/jquery.toast.js'
            ],
            'css' => [
                '/asstes/css/bootstrap.min.css',
                '/asstes/css/plugins.css',
                '/asstes/css/main.css',
                '/asstes/css/themes.css',
                '/asstes/plugin/toast/src/jquery.toast.css'
            ]
        ];

        $this->tableConfig = [
            'js' => [

            ],
            'css' => [

            ]
        ];
    }
}