<ul class="layui-nav layui-row" lay-filter="">
    <li class="layui-nav-item layui-col-md2"><a href=""><?=\common\models\system\SysConfig::findOne('siteName')->value;?></a></li>
    <li class="layui-nav-item layui-col-md1 layui-col-md-offset9">
        <a href=""><img src="//t.cn/RCzsdCq" class="layui-nav-img">我</a>
        <dl class="layui-nav-child">
            <dd><a href="javascript:;">修改信息</a></dd>
            <dd><a href="javascript:;">安全管理</a></dd>
            <dd><a href="javascript:;">退了</a></dd>
        </dl>
    </li>
</ul>

<div class="menu">
    <ul class="layui-nav layui-nav-tree layui-nav-side" lay-filter="test">
        <!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
        <li class="layui-nav-item layui-nav-itemed">
            <a href="javascript:;">默认展开</a>
            <dl class="layui-nav-child">
                <dd><a href="javascript:;">选项1</a></dd>
                <dd><a href="javascript:;">选项2</a></dd>
                <dd><a href="">跳转</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item">
            <a href="javascript:;">解决方案</a>
            <dl class="layui-nav-child">
                <dd><a href="">移动模块</a></dd>
                <dd><a href="">后台模版</a></dd>
                <dd><a href="">电商平台</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="">产品</a></li>
        <li class="layui-nav-item"><a href="">大数据</a></li>
    </ul>
</div>
