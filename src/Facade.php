<?php


namespace KingHang\LaravelTranslate;

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
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return TranslateService::class;
    }
}
