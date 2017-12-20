# Kimsufi Monitor
这是一个用于监控kimsufi独立服务器的PHP程序。
将kimsufi.php放在任意文件夹之中，比如/var/www/html下。
###### 1.安装PHP5.x或者PHP7.x环境
Redhat/CentOS系：
```
yum install php
```
Debian系：
```
apt-get install php5
```
###### 2.使用crontab定时运行
```
crontab -e
*/1 * * * * /usr/bin/php -f /var/www/html/kimsufi.php
```
###### 3.使用方糖实现微信推送
将kimsufi.php最后一行的file_get_contents内容更换为你自己的key，申请地址为：http://sc.ftqq.com

原始技术来源于来源于http://www.hostloc.com/thread-408681-1-1.html.</br>
