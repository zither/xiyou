# 前言
幻想西游游戏源代码

## 修改说明
 - 修改代码，基本兼容 PHP 7.4
 - 合并玩家数据表，避免数据表过多
 - 修复主线任务中断问题
 - 删除家园部分页面

## 技术栈
php + mysql

## 项目运行
1. 新建 xyy 和 xxjyuser 数据库，并导入 data 目录中的数据表
2. 复制 config/config_example.php 到 config/config.php，修改域名和https配置
3. 复制 sql/mysql_example.php 到 sql/mysql.php，修改数据库配置
4. 复制 fqxy/sql/mysql_example.php 到 fqxy/sql/mysql.php，修改数据库配置
5. 通过域名进行访问

## 运行环境
- php 7.4
- mysql 5.7.22

## 技术交流
qq群：39387037

![群二维码](images/qun.jpg)

## 其他说明
[README_old.md](./README_old.md)
