<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponse;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponse\instanceSpecs\packConfig;
use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $availableDeleteBlackholeCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $availableDefenseTimes;

    /**
     * @var int
     */
    public $totalDefenseTimes;

    /**
     * @var int
     */
    public $isFullDefenseMode;

    /**
     * @var packConfig
     */
    public $packConfig;
    protected $_name = [
        'region'                        => 'Region',
        'availableDeleteBlackholeCount' => 'AvailableDeleteBlackholeCount',
        'instanceId'                    => 'InstanceId',
        'availableDefenseTimes'         => 'AvailableDefenseTimes',
        'totalDefenseTimes'             => 'TotalDefenseTimes',
        'isFullDefenseMode'             => 'IsFullDefenseMode',
        'packConfig'                    => 'PackConfig',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('availableDeleteBlackholeCount', $this->availableDeleteBlackholeCount, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('availableDefenseTimes', $this->availableDefenseTimes, true);
        Model::validateRequired('totalDefenseTimes', $this->totalDefenseTimes, true);
        Model::validateRequired('isFullDefenseMode', $this->isFullDefenseMode, true);
        Model::validateRequired('packConfig', $this->packConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->availableDeleteBlackholeCount) {
            $res['AvailableDeleteBlackholeCount'] = $this->availableDeleteBlackholeCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->availableDefenseTimes) {
            $res['AvailableDefenseTimes'] = $this->availableDefenseTimes;
        }
        if (null !== $this->totalDefenseTimes) {
            $res['TotalDefenseTimes'] = $this->totalDefenseTimes;
        }
        if (null !== $this->isFullDefenseMode) {
            $res['IsFullDefenseMode'] = $this->isFullDefenseMode;
        }
        if (null !== $this->packConfig) {
            $res['PackConfig'] = null !== $this->packConfig ? $this->packConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AvailableDeleteBlackholeCount'])) {
            $model->availableDeleteBlackholeCount = $map['AvailableDeleteBlackholeCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AvailableDefenseTimes'])) {
            $model->availableDefenseTimes = $map['AvailableDefenseTimes'];
        }
        if (isset($map['TotalDefenseTimes'])) {
            $model->totalDefenseTimes = $map['TotalDefenseTimes'];
        }
        if (isset($map['IsFullDefenseMode'])) {
            $model->isFullDefenseMode = $map['IsFullDefenseMode'];
        }
        if (isset($map['PackConfig'])) {
            $model->packConfig = packConfig::fromMap($map['PackConfig']);
        }

        return $model;
    }
}
