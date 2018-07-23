<?php

namespace Kanboard\Plugin\Nebula;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        global $themeNebulaConfig;

        if (file_exists('plugins/Nebula/config.php')) 
        {
            require_once('plugins/Nebula/config.php');
        }

        if (isset($themeNebulaConfig['logo'])) 
        {
            $this->template->setTemplateOverride('header/title', 'Nebula:layout/header/title');
        }
		
        $this->hook->on("template:layout:css", array("template" => "plugins/Nebula/Assets/css/nebula.css"));

        $this->hook->on("template:layout:css", array("template" => "plugins/Nebula/Assets/css/prism.css"));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Nebula/Assets/js/clipboard.min.js'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Nebula/Assets/js/prism.js'));
    }

    public function getPluginName()
    {
        return 'Nebula';
    }

    public function getPluginDescription()
    {
        return t('This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.');
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.5';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/nebula';
    }

}
