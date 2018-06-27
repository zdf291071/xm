<?php
return array(
    //'配置项'=>'配置值'
    //默认的路径方式
    'URL_MODEL'=>1,

    //页面调试工具
    'SHOW_PAGE_TRACE'=>true,

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'xmshop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'xm_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8



    //默认错误跳转对应的模板文件
    // 'TMPL_ACTION_ERROR' => THINK_PATH . 'Tpl/error.tpl',
    //默认成功跳转对应的模板文件
    //  'TMPL_ACTION_SUCCESS' => THINK_PATH . 'Tpl/success.tpl',


    //开启语言包功能
    'LANG_SWITCH_ON' => true,
    //自动侦测语言 开启多语言功能后有效
    'LANG_AUTO_DETECT' => true,
    //允许切换的语言列表 用逗号分隔
    'LANG_LIST' => 'zh-cn,en-us',
    //默认语言切换变量
    'VAR_LANGUAGE' => 'l',

    //开启默认过滤
    //'VAR_FILTERS'=>'filter_default,filter_exp',


);