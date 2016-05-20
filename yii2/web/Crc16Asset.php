<?php
/**
 * @link https://github.com/ftlmars/javascript-crc16
 * @license https://en.wikipedia.org/wiki/MIT_License
 */

namespace ftlmars\crc\yii2\web;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [Aes javascript library](https://github.com/ftlmars/javascript-crc16)
 */
class Crc16Asset extends AssetBundle
{
    public $sourcePath = '@vendor/ftlmars/javascript-crc16';
    
    public $js = [
        'crc16.js',
    ];
}
