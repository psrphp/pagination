# 分页器

一个功能简单的分页生成器

## 安装

``` bash
composer require psrphp/pagination
```

## 用例

``` php
<?php
$phpcode='<?php echo 123;';
$pagination=new \PsrPHP\Pagination\Pagination();
$pagination->render($current, $total, $pagenum = 20, $round = 2):array;
```
