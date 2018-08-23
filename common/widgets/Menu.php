<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-08-23
 * Time: 17:23
 */

namespace common\widgets;


use yii\bootstrap\Widget;

class Menu extends Widget
{
    public function run()
    {
        $menu     = \common\models\site\Menu::find()->asArray()->all();
        $menuTree = $this->getTree($menu, 0);

        $html = '';
        foreach ($menuTree as $item) {
            $html .= '<li>';
            if (!empty($item['parent_id'])){
                $html .= '<a href="'.$item['link'].'" title="'.$item['intro'].'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$item['name'].'<span class="caret"></span></a>';
                $html .= '<ul class="dropdown-menu">';
                foreach ($item['parent_id'] as $child) {
                    $html .= '<li><a href="'.$child['link'].'">'.$child['name'].'</a></li>';
                }
                $html .= '</ul>';
            }else{
                $html .= '<a href="'.$item['link'].'" title="'.$item['intro'].'">'.$item['name'].'</a>';
            }

            $html .= '</li>';
        }

        echo $html;

    }

    private function getTree($data, $pId)
    {
        $tree = [];
        foreach ($data as $k => $v) {
            if ($v['parent_id'] == $pId) { //父亲找到儿子
                $v['parent_id'] = $this->getTree($data, $v['id']);
                $tree[]             = $v;
            }
        }
        return $tree;
    }
}