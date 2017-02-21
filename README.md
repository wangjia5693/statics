# statics
use class function like static function;more like laravel facade
eg: 
include_once  __ROOT__ .'/vendor/autoload.php';

$aliases = [
    'Cache' => 'Statics\Cache',
    'Config'=> 'Statics\Config'
];
$autoloader = (new Statics\Autoload($aliases))->register();

$locale = Config::get('app.locale', 'en_us');
