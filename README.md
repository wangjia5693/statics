# statics
use class function like static function;more like laravel facade
eg: 
include_once  __ROOT__ .'/vendor/autoload.php';
#引入excel配置文件

$aliases = [
    'Cache' => 'Statics\Src\Cache',
    'Config'=> 'Statics\Src\Config'
];
$autoloader = (new Statics\Src\Autoload($aliases))->register();

$locale = Config::get('app.locale', 'en_us');
