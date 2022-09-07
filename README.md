# 前言
幻想西游游戏源代码

## 修改说明
 - 兼容 PHP 7.4
 - 合并玩家数据表，避免数据表过多
 - 修复影响游戏正常游玩的错误
 - 删除家园页面
 - 更多修改请查看 [Commits](https://github.com/zither/xiyou/commits/master) 信息
 
## 代码演示
 - http://81.68.206.179:81

## 技术栈
php + mysql

## 项目运行
1. 新建 xyy 和 xxjyuser 数据库，并导入 data 目录中的数据表
2. 复制 config/config_example.php，重命名为 config/config.php，修改家园地址和数据库配置
4. 复制 fqxy/config/config_example.php，重命名为 fqxy/config/config.php，修改分区地址和数据库配置
6. 通过域名进行访问

## 运行环境
- php 7.4
- mysql 5.7.22

## 技术交流
qq群：39387037

![群二维码](images/qun.jpg)

## 其他说明
[README_old.md](./README_old.md)
