<?php


namespace KingHang\LaravelTranslate;

use Illuminate\Support\Facades\Facade;
use KingHang\Translate\TranslateService;

/**
 * @method static array|string translate(string $string, boolean $source = false)
 * @method static TranslateService driver(string $driver)
 * @method static TranslateService from(string $from)
 * @method static TranslateService to(string $to)
 * @method static TranslateService options(array $options)
 *
 * @see \KingHang\Translate\TranslateService
 */
class Translate extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'KingHang\\LaravelTranslate\\TranslateService';
    }
}
