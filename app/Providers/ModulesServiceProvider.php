<?php 

namespace App\Providers;
 
/**
* ServiceProvider
*
* The service provider for the modules. After being registered
* it will make sure that each of the modules are properly loaded
* i.e. with their routes, views etc.
*
* @author Kamran Ahmed <kamranahmed.se@gmail.com>
* @package App\Modules
*/
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Will make sure that the required modules have been fully loaded
     * @return void
     */
    public function boot()
    {
        // For each of the registered modules, include their routes and Views
        $modules = config("module.modules");
        $path =  realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'). DIRECTORY_SEPARATOR .'Modules';
        //while (list(,$module) = each($modules)) {
        
        foreach ($modules as $module) {

            // Load the routes for each of the modules
            if(file_exists($path. DIRECTORY_SEPARATOR .$module.DIRECTORY_SEPARATOR.'routes.php')) {
                include $path.DIRECTORY_SEPARATOR.$module. DIRECTORY_SEPARATOR.'routes.php';
            }

            // Load the views
            if(is_dir($path.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.'Views')) {
                $this->loadViewsFrom($path.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR.'Views', $module);
            }
        }
    }

    public function register() {}

}