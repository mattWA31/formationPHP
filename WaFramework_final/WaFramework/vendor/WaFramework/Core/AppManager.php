<?php

namespace WaFramework\Core;


abstract class AppManager {

    protected $app;

    public function __construct(App $app) {
        $this->app = $app;
    }

    public function getApp() {
        return $this->app;
    }

}