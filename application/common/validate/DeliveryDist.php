<?php
/**
 * @copyright   Copyright (c) http://careyshop.cn All rights reserved.
 *
 * CareyShop    配送轨迹验证器
 *
 * @author      zxm <252404501@qq.com>
 * @version     v1.1
 * @date        2017/4/27
 */

namespace app\common\validate;

class DeliveryDist extends CareyShop
{
    /**
     * 验证规则
     * @var array
     */
    protected $rule = [
        'client_id'     => 'require|integer|gt:0',
        'order_code'    => 'require|max:50',/*|unique:delivery_dist'*/
        'delivery_id'   => 'require|integer|gt:0',
        'logistic_code' => 'require|max:50',
        'exclude_code'  => 'array',
        'is_trace'      => 'in:0,1',
        'state'         => 'in:0,1,2,3,4,201',
        'account'       => 'max:80',
        'timeout'       => 'integer|egt:0',
        'page_no'       => 'integer|gt:0',
        'page_size'     => 'integer|between:1,40',
        'order_type'    => 'in:asc,desc',
        'order_field'   => 'in:delivery_dist_id,order_code,delivery_item_id,logistic_code,state',
    ];

    /**
     * 字段描述
     * @var array
     */
    protected $field = [
        'client_id'     => '账号编号',
        'order_code'    => '流水号',
        'delivery_id'   => '配送方式编号',
        'logistic_code' => '快递单号',
        'exclude_code'  => '排除快递单号',
        'is_trace'      => '是否获取配送轨迹',
        'state'         => '配送状态',
        'account'       => '账号或昵称',
        'timeout'       => '超时配送',
        'page_no'       => '页码',
        'page_size'     => '每页数量',
        'order_type'    => '排序方式',
        'order_field'   => '排序字段',
    ];

    /**
     * 场景规则
     * @var array
     */
    protected $scene = [
        'item' => [
            'order_code'    => 'require|max:50',
            'logistic_code' => 'max:50',
            'exclude_code',
        ],
        'list' => [
            'order_code'    => 'max:50',
            'logistic_code' => 'max:50',
            'is_trace',
            'state',
            'account',
            'timeout',
            'page_no',
            'page_size',
            'order_type',
            'order_field',
        ],
    ];
}