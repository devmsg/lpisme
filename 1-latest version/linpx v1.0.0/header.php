<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<title><?php $this->archiveTitle(array(
        'category'  =>  _t(' %s '),
        'search'    =>  _t(' %s '),
        'tag'       =>  _t(' %s '),
        'author'    =>  _t(' %s ')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply='); ?>
<link rel="shortcut icon" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
<link rel="apple-touch-icon" href="<?php $this->options->themeUrl('images/apple-touch-icon.png'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/prism.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
    <body class="null" gtools_scp_screen_capture_injected="true">
        <div class="header">
            <div class="logo left">
                <a href="<?php $this->options->siteUrl(); ?>">
                    <?php $this->options->title() ?>
                </a>
            </div>
            <div class="slogan">
                <span class="description"><?php $this->options->description() ?></span>
            </div>
            <div class="buttons">
                <div id="search-toggle"><i class="icon-search"></i></div>
                <div id="menu-toggle"><i class="icon-nav"></i></div>
            </div>
        </div>
        <form id="search">
                <input type="text" class="input" name="s" id="s" required="true" placeholder="...Search" dir="rtl">
        </form>
        <nav class="nav">
            <div class="right">
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
            </div>
        </nav>