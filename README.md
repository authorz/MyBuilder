## MyBuilder
[![Build Status](https://travis-ci.org/CrazyCodes/MyBuilder.svg?branch=master)](https://travis-ci.org/CrazyCodes/MyBuilder)
[![Code Climate](https://codeclimate.com/github/CrazyCodes/MyBuilder/badges/gpa.svg)](https://codeclimate.com/github/CrazyCodes/MyBuilder) 
- summary
    - [x] MyBuilder 是一款基于PHP的快速功能构建器.
    - [x] MyBuilder 完全遵守PSR-4开发规范.
    - [x] MyBuilder 提供From,Table的快速构建方法.
- plan
    - [x] 添加 Chart 构建方法
    - [x] 实现自动化创建构建起方法
    
## Directory Structure
- view 
    - FromView.php # From 模板
    - TableView.php # Table 模板
- widget
    - froms # From 子模板
    - tables # Table 子模板
    - FromBuilder.php # From 核心
    - TableBuilder.php # Table 核心
- Builder.php # builder 核心文件
- Common.php  # 公共配置文件
- Config.php  # 核心配置文件 

## Install

使用composer安装 <a href="https://getcomposer.org/">什么是composer?</a> :

<code>
    composer require myseries/mybuilder
</code>

使用github安装 

<code>
git clone git@github.com:CrazyCodes/MyBuilder.git
</code>

## Use
MyBuilder 使用简单,几行代码即可生成一个漂亮的页面。

### first step
<code>
use MyBuilder\Builder; # 引用Builder
</code>

### second step
<code>
$builder = Builder::forms() # 创建From构建器
$builder = Builder::tables() # 创建Table构建器
</code>

### last step
<code>
$builder->display() # 渲染模板,构建完成
</code>

## manual
详细中文手册 : http://www.kancloud.cn/crazy/mybuilder
