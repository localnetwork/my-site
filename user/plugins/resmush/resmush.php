<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\Uri;

define('WEBSERVICE', 'http://api.resmush.it/ws.php?img=');
$s = '/images/*.jpg';
$o = json_decode(file_get_contents(WEBSERVICE . $s));  

echo $o->dest; //URL of the optimized picture


// if(isset($o->error)){
//         die('Error');
// }



    
class ResmushPlugin extends Plugin
{
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }
        // require_once __DIR__ . '/classes/optimus.php';
        // $this->optimus = new Optimus($this->config->get('plugins.optimus.license_key'));
        // $this->enable([
        //     'onImageMediumSaved' => ['onImageMediumSaved', 0],
        // ]);
    }
}