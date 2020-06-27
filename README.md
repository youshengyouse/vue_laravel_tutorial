## git记录

```bash
$ git init
$ git add .
$ git commit -m 'vue和laravel搭建网站从零开始'
$ git config --global user.name "youshengyouse"
$ git config --global user.email "19722008@163.com"

# 先在gitee上新建空项目 vue_laravel_tutorial
# 说明：基于vue和laravel开发前后端完全分离网站
git remote add gitee https://gitee.com/advance/vue_laravel_tutorial.git
git push -u gitee master

# 先在github上新建空项目 vue_laravel_tutorial
git remote add github git@github.com:youshengyouse/vue_laravel_tutorial.git
git push -u github master

# git branch -b 01_docker开发环境，相当于创建并切换，也就是相当上面两句
$ git branch 01_docker开发环境     # 创建 01_docker开发环境 分支 
$ git branch 02_后端开发环境
$ git branch 03_前端开发环境 
$ git branch 04_前后端交互
$ git branch 05_用户登录_前端部分
$ git branch 06_用户登录_后端部分
$ git branch 07_用户注册_前端部分
$ git branch 08_用户注册_后端部分  

$ git checkout 01_docker开发环境   # 切换到 01_docker开发环境 分支
$ git add .
$ git commit -m 'dnmp初始状态‘



git push -u gitee 01_docker开发环境
git push -u github 01_docker开发环境

```

## dnmp部分

### 目录说明

- tmp，composer缓存，可随意删除
- logs，日志目录，包括nginx和php日志，可随意删除，不影响功能，但它是用来排错用的
- data，mysql数据库，redis数据等

### 待添加功能

*OpenResty*

### 修改日志

## 后端

## 前端

