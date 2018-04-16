<?php
/**
 * @copyright   Copyright (c) http://careyshop.cn All rights reserved.
 *
 * CareyShop    菜单管理控制器
 *
 * @author      zxm <252404501@qq.com>
 * @version     v1.1
 * @date        2018/3/9
 */

namespace app\api\controller\v1;

use app\api\controller\CareyShop;

class Menu extends CareyShop
{
    /**
     * 方法路由器
     * @access protected
     * @return array
     */
    protected static function initMethod()
    {
        return [
            // 添加一个菜单
            'add.menu.item'      => ['addMenuItem'],
            // 获取一个菜单
            'get.menu.item'      => ['getMenuItem'],
            // 编辑一个菜单
            'set.menu.item'      => ['setMenuItem'],
            // 删除一个菜单(影响下级子菜单)
            'del.menu.item'      => ['delMenuItem'],
            // 获取菜单列表
            'get.menu.list'      => ['getMenuList'],
            // 根据菜单Id生成导航数据
            'get.menu.id.navi'   => ['getMenuIdNavi'],
            // 根据菜单url生成导航数据
            'get.menu.url.navi'  => ['getMenuUrlNavi'],
            // 批量设置是否属于导航菜单
            'set.menu.navi'      => ['setMenuNavi'],
            // 设置菜单排序
            'set.menu.sort'      => ['setMenuSort'],
            // 设置菜单状态(影响上下级菜单)
            'set.menu.status'    => ['setMenuStatus'],
            // 根据权限获取菜单列表
            'get.menu.auth.list' => ['getMenuAuthList'],
        ];
    }
}