<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag to query.
     *
     * >  The **ResourceIds.N** parameter and the key-value pair (Tag.N.Key and Tag.N.Value) cannot be left empty at the same time.
     * @example testKey1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag to query.
     *
     * >  The **ResourceIds.N** parameter and the key-value pair (Tag.N.Key and Tag.N.Value) cannot be left empty at the same time.
     * @example testValue1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
