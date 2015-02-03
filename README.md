极其简单的webserver示例
======

## http协议DEMO运行
<code>
php http.php
</code>

浏览器访问 http://127.0.0.1:2017/

## https协议DEMO运行
<code>
php https.php
</code>

浏览器访问 https://127.0.0.1:2016/


## ab 压测 HTTP DEMO 结果
ab -n100000  -c100 http://127.0.0.1:2017/

<pre>
Concurrency Level:      100
Time taken for tests:   4.082 seconds
Complete requests:      100000
Failed requests:        0
Write errors:           0
Total transferred:      3100000 bytes
HTML transferred:       1200000 bytes
Requests per second:    24498.50 [#/sec] (mean)
Time per request:       4.082 [ms] (mean)
Time per request:       0.041 [ms] (mean, across all concurrent requests)
Transfer rate:          741.65 [Kbytes/sec] received
</pre>

