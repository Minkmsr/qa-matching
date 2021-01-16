<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MenusModel;

class SystemPermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->menuManagement();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    /**
     * Render Menu
     *
     * @return void
     */
    public function menuManagement()
    {

        $this->app->bind('renderMenu', function () {
            $arr_menus = array('parent_menus' => ['1', '2']);
            $dd = [1, 2];
            $arr_menus = [];
            $parent_menus = MenusModel::where('is_delete', '=', '0')->where('sys_level_no', '=', '0')->orderBy('sys_menu_sort', 'asc')->get()->toArray();
            if (count($parent_menus) > 0) {
                for ($parent_index = 0; $parent_index < count($parent_menus); $parent_index++) {
                    $arr_menus['result'][$parent_index]['parent_menus'][$parent_index] = $parent_menus[$parent_index];
                    $sub_menus = MenusModel::where('sys_parent_id', '=', $parent_menus[$parent_index]['sys_menu_id'])->where('sys_level_no', '=', '1')->orderBy('sys_menu_sort', 'asc')->get()->toArray();
                    if (count($sub_menus) > 0) {
                        for ($submenu_index = 0; $submenu_index < count($sub_menus); $submenu_index++) {
                            $arr_menus['result'][$parent_index]['parent_menus'][$parent_index]['sub_menus'][$submenu_index] = $sub_menus[$submenu_index];
                            $sub_sub_menus = MenusModel::where('sys_parent_id', '=', $sub_menus[$submenu_index]['sys_menu_id'])->where('sys_level_no', '=', '2')->orderBy('sys_menu_sort', 'asc')->get()->toArray();
                            if (count($sub_sub_menus) > 0) {
                                for ($sub_submenu_index = 0; $sub_submenu_index < count($sub_sub_menus); $sub_submenu_index++) {
                                    $arr_menus['result'][$parent_index]['parent_menus'][$parent_index]['sub_menus'][$submenu_index]['sub_sub_menus'][$sub_submenu_index] = $sub_sub_menus[$sub_submenu_index];
                                }
                            }
                        }
                    }
                }
            }

//            foreach ($parent_menus as $key => $data_parent_menu) {
//                $menu = array('menu' => $data_parent_menu['sys_menu_name'], 'items' => []);
//                $sub_menus = MenusModel::all()->where('sys_parent_id', '=', $data_parent_menu['sys_menu_id'])->where('sys_level_no', '=', 1);
//                if (count($sub_menus) > 0) {
//                    foreach ($sub_menus as $skey => $data_sub_menu) {
//                        $data_sub_menu['items'] = [];
//                        $sub_sub_menus = MenusModel::all()->where('sys_parent_id', '=', $data_sub_menu['sys_parent_id'])->where('sys_level_no', '=', 3);
//                        if (count($sub_sub_menus) > 0) {
//                            foreach ($sub_sub_menus as $sskey => $data_sub_sub_menu) {
//                                $data_sub_menu['items'][] = $data_sub_sub_menu['sys_parent_id'];
//                            }
//                        }
//                        $menu['items'][] =  $data_sub_menu;
//                    }
//                }
//                $arr_menus['parent_menus'][] = $menu;
//            }
//            $i = 1;

            return $arr_menus;
        });
    }


}
