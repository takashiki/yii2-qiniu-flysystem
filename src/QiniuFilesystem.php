<?php

namespace takashiki\yii2\flysystem;

use creocoder\flysystem\Filesystem;
use Overtrue\Flysystem\Qiniu\QiniuAdapter;
use yii\base\InvalidConfigException;

class QiniuFilesystem extends Filesystem
{
    public $accessKey;
    public $secretKey;
    public $bucket;
    public $domain;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        if ($this->accessKey === null) {
            throw new InvalidConfigException('The "accessKey" property must be set.');
        }

        if ($this->secretKey === null) {
            throw new InvalidConfigException('The "secretKey" property must be set.');
        }

        if ($this->bucket === null) {
            throw new InvalidConfigException('The "bucket" property must be set.');
        }

        if ($this->domain === null) {
            throw new InvalidConfigException('The "domain" property must be set.');
        }

        parent::init();
    }

    /**
     * @return QiniuAdapter
     */
    protected function prepareAdapter()
    {
        return new QiniuAdapter(
            $this->accessKey,
            $this->secretKey,
            $this->bucket,
            $this->domain
        );
    }
}
