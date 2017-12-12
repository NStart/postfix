#!/bin/bash
#mailto="511@qq.com,xxxxx@gmail.com,xxx@123.cn"
mailto="5112@qq.com,xxxx@gmail.cn";
subject="111111111"
(
    echo "To: $mailto"
    echo "From: test@dsddddd.com"
    echo "Subject: $subject"
    echo "MIME-Version: 1.0"
    echo "Content-Type: text/html; chatset=utf-8"
    echo "Content-Disposition: inline"
    echo "<html><body><pre>1111111111"
    echo "</pre></body></html>"
) | /usr/sbin/sendmail -t
