<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class GetSlsOpenStatusRequest extends Model
{
    /**
     * @description The ID of the region where the Anti-DDoS Origin instance resides.
     *
     * For more information about the valid values of this parameter, see [Regions and zones](~~188196~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the Anti-DDoS Origin instance belongs in Resource Management. This parameter is empty by default, which indicates that the Anti-DDoS Origin instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](~~94485~~).
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSlsOpenStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
