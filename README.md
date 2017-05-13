# yii2-qiniu-flysystem

Yii2 qiniu flysystem 

## Install

```
composer require takashiki/yii2-qiniu-flysystem
```

## Usage

```php
'qiniuFs' => [
    'class' => \takashiki\yii2\flysystem\QiniuFilesystem::class,
    'accesskey' => 'xxx',
    'secretKey' => 'xxx',
    'bucket' => 'xxx',
    'domain' => 'xxx',
],
```

More information: [https://github.com/creocoder/yii2-flysystem](https://github.com/creocoder/yii2-flysystem)
