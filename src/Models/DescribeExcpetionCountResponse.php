<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeExcpetionCountResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $exceptionIpCount;

    /**
     * @var int
     */
    public $expireTimeCount;
    protected $_name = [
        'requestId'        => 'RequestId',
        'exceptionIpCount' => 'ExceptionIpCount',
        'expireTimeCount'  => 'ExpireTimeCount',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('exceptionIpCount', $this->exceptionIpCount, true);
        Model::validateRequired('expireTimeCount', $this->expireTimeCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->exceptionIpCount) {
            $res['ExceptionIpCount'] = $this->exceptionIpCount;
        }
        if (null !== $this->expireTimeCount) {
            $res['ExpireTimeCount'] = $this->expireTimeCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExcpetionCountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExceptionIpCount'])) {
            $model->exceptionIpCount = $map['ExceptionIpCount'];
        }
        if (isset($map['ExpireTimeCount'])) {
            $model->expireTimeCount = $map['ExpireTimeCount'];
        }

        return $model;
    }
}
