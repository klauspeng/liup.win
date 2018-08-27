<table class="layui-table">
    <thead>
    <tr>
        <th>配置项</th>
        <th>值</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $html = '';
    foreach ($configs as $k => $v) {
        $html .= '<tr>';
        $html .= '<td>' . $k . '</td>';
        $html .= '<td>' . $v . '</td>';
        $html .= '<td>操作</td>';
    }
    echo $html;
    ?>
    </tbody>
</table>