<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <base href="<?php echo base_url();?>">
    <link rel="stylesheet" href="static/css/sitepoint.css" type="text/css">
    <script src="static/common/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <title>Bug1024</title>
</head>
<body>
<header class="main-header" role="banner">
    <nav class="top-bar" role="navigation">
    <ul class="title-area">
    <li class="name">
    <div class="logo">
    <a class="logomark" href="" tabindex="1"><img src="" alt="bug1024"></a>
    </div>
    </li>
    <li class="toggle-topbar menu-icon">
    <a href="<?php echo base_url();?>"><span>Bug</span></a>
    </li>
    </ul>
    <section class="top-bar-section">
      <ul class="right">
        <li class="has-dropdown">
        <a href="<?php echo base_url('#');?>" tabindex="-1">频道</a>
          <ul class="dropdown">
          <li class="title back js-generated"><h5><a href="<?php echo base_url('#');?>">« Back</a></h5></li>
            <li>
            <a class="category-html menuitem" href="<?php echo site_url('channel/index/html');?>">HTML</a>
            </li>
            <li>
            <a class="category-css menuitem" href="<?php echo site_url('channel/index/css');?>">CSS</a>
            </li>
            <li>
            <a class="category-javascript menuitem" href="<?php echo site_url('channel/index/javascript');?>">JS</a>
            </li>
            <li>
            <a class="category-php menuitem" href="<?php echo site_url('channel/index/php');?>">PHP</a>
            </li>
            <li>
            <a class="category-ruby menuitem" href="<?php echo site_url('channel/index/database');?>">DB</a>
            </li>
            <li>
            <a class="category-mobile menuitem" href="<?php echo site_url('channel/index/linux');?>">Linux</a>
            </li>
            <li>
            <a class="category-ux menuitem" href="<?php echo site_url('channel/index/tool');?>">Tool</a>
            </li>
            <li>
            <a class="category-design menuitem" href="<?php echo site_url('channel/index/story');?>">story</a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="#" target="_blank" tabindex="1">书籍</a>
        </li>
         <li>
          <a href="#" tabindex="2">源码</a>
        </li>
        <li class="top-bar_search">
        <form method="get" action="">
            <input class="searchquery" id="search-box" placeholder="搜索…" type="text" tabindex="3">
            <button tabindex="-1"></button>
        </form>
        </li>
      </ul>
    </section>
    </nav>
</header>
