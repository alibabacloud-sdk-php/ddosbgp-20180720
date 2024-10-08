<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DetachFromPolicyShrinkRequest extends Model
{
    /**
     * @description The protected objects.
     *
     * This parameter is required.
     * @var string
     */
    public $ipPortProtocolListShrink;

    /**
     * @description The type of the policy. Valid values:
     *
     *   **default**: the default mitigation policies.
     *   **l3**: IP-specific mitigation policies.
     *   **l4**: port-specific mitigation policies.
     *
     * This parameter is required.
     * @example l3
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'ipPortProtocolListShrink' => 'IpPortProtocolList',
        'policyType'               => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipPortProtocolListShrink) {
            $res['IpPortProtocolList'] = $this->ipPortProtocolListShrink;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachFromPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpPortProtocolList'])) {
            $model->ipPortProtocolListShrink = $map['IpPortProtocolList'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
