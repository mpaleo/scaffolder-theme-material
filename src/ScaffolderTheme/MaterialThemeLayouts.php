<?php

namespace ScaffolderTheme;

use Illuminate\Support\Facades\File;

class MaterialThemeLayouts implements \Scaffolder\Themes\ScaffolderThemeLayoutsInterface
{
    const EXT = '.blade.php';

    private $layoutsDirectory;

    public function __construct()
    {
        $this->layoutsDirectory = __DIR__ . '/../../resources/layouts/';
    }

    public function getCreatePath()
    {
        return realpath($this->layoutsDirectory . 'create' . self::EXT);
    }

    public function getEditPath()
    {
        return realpath($this->layoutsDirectory . 'edit' . self::EXT);
    }

    public function getPagePath()
    {
        return realpath($this->layoutsDirectory . 'page' . self::EXT);
    }
}