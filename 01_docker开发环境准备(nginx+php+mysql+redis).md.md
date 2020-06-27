## 准备工作

### 安装docker引擎

> windows参考：https://docs.docker.com/docker-for-windows/install/
>
> ubuntu参考：https://docs.docker.com/engine/install/ubuntu/
>
> Mac参考：https://docs.docker.com/docker-for-mac/install/

我电脑操作系统是64位win10，点击 [下载地址](https://hub.docker.com/editions/community/docker-ce-desktop-windows/)(391M，版本2.3.0.3) 下载 `Docker Desktop installer.exe`，速度很快，约1分钟，双击 `Docker Desktop installer.exe`进行安装，很简单就装好了，安装好后，记得修改一个配置中的镜像配置，换为阿里云的镜像

```
{
  "registry-mirrors": [
    "https://d7xucqac.mirror.aliyuncs.com"
  ],
  "insecure-registries": [],
  "debug": true,
  "experimental": false
}
```

登录 `https://cr.console.aliyun.com/cn-hangzhou/instances/mirrors` ，将加速器的地址复制到上面，每个人的不一样，这里是我的加速器地址

### 目录准备

新建空目录 `E:\tutorials\vue_laravel_tutorial`，这里放所有的教程



### 下载

当前目录为 `E:\tutorials`


```bash
$ git clone git@gitee.com:advance/dump_for_tutorial.git         # 国内用户下载这个
$ git clone git@github.com:youshengyouse/dump_for_tutorial.git  # 国外用户下载这个
```

### 编写别名

参照`E:\tutorials\dump_for_tutorial\README.md`的alias部分写好别名，提高工作效率



### 启动docker中定义的容器

切换到 `E:\tutorials\dnpm_for_tutorial` 

```bash
$ on
```

### 测试

在浏览器中输入 

```bash
http://127.0.0.1     # 80 端口
https://127.0.0.1    # 443 端口
```



#### 填坑

`ERROR: Pool overlaps with other one on this address space`，原因是已有一个网络占用了subnet网段地址，`docker network ls`，查看，删除除了 `bridge`，`host `，`none`之外的网络