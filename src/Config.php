<?php
namespace MyBuilder;

class Config
{
    public $config;

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
                '/vendor/myseries/mybuilder/src/asstes/js/vendor/modernizr-3.3.1.min.js',
                '/vendor/myseries/mybuilder/src/asstes/js/vendor/jquery-2.2.4.min.js',
                '/vendor/myseries/mybuilder/src/asstes/js/plugins.js',
                '/vendor/myseries/mybuilder/src/asstes/js/app.js',
                '/vendor/myseries/mybuilder/src/asstes/js/pages/formsComponents.js',
                '/vendor/myseries/mybuilder/src/asstes/js/plugins/ckeditor/ckeditor.js',
                '/vendor/myseries/mybuilder/src/asstes/js/vendor/bootstrap.min.js'
            ],
            'css' => [
                '/vendor/myseries/mybuilder/src/asstes/css/bootstrap.min.css',
                '/vendor/myseries/mybuilder/src/asstes/css/plugins.css',
                '/vendor/myseries/mybuilder/src/asstes/css/main.css',
                '/vendor/myseries/mybuilder/src/asstes/css/themes.css',
            ]
        ];
    }
}