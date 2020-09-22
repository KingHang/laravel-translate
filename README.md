# laravel-translate
集合百度、谷歌、有道翻译的Laravel扩展包

# 安装

```
$ composer require kinghang/laravel-translate
```
> 如果你安装了 `kinghang/translate` 包，请执行命令前把它在 `composer.json` 中移除。

# 设置

1. 安装完成后，把服务 `KingHang\LaravelTranslate\ServiceProvider` 注册到 `config/app.php` 配置文件中：

  ```
  'providers' => [
      // Other service providers...
      KingHang\LaravelTranslate\ServiceProvider::class,
  ],
  ```

2. 将以下内容添加到 `config/app.php` 的 `aliases` 中：

  ```
  'Translate' => KingHang\LaravelTranslate\Translate::class,
  ```

3. 发布配置文件：
 ```shell script
    php artisan vendor:publish --provider="KingHang\LaravelTranslate\ServiceProvider::class"
```

# 使用

```php
<?php

namespace App\Http\Controllers;

use KingHang\LaravelTranslate\Translate;

class IndexController
{
    /**
     * 根据配置文件翻译
     * @param string $content
     * @return string
    **/
    public function translateDefault($content)
    {
        return Translate::translate($content);
    }

    /**
     * 自定翻译目标语言
     * @param string $content
     * @return string
    **/
    public function translateToJp($content)
    {
        return Translate::to('jp')->translate($content);
    }

    /**
     * 自定源及目标语言
     * @param string $content
     * @return string
    **/
    public function translateFromEnToJp($content)
    {
        return Translate::from('en')->to('jp')->translate($content);
    }
}

```
# License
MIT
