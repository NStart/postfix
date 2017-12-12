<?php

    $mailto="5112@qq.com";
    //$mailto = 'sssss@gmail.com';
     $from="domain@dsdsd.com";
     $curr_time=date("Y-m-d H:i:s",time());
     $str_content=$curr_time."(".$str_file_line.")error found!\r\n";
     $str_content="From:".$from."\nTo: ".$mailto."\n"."Subject:online php send Run_Time_Error\n\n".$str_content.$err_msg;
     $sh_cmd="/usr/sbin/sendmail -t -oi";
     if ( !($fp=popen($sh_cmd, "w")) ) {echo "fail"; pclose($fp); exit();}
     fwrite($fp,$str_content,strlen($str_content));
     pclose($fp);

~                                                                                                                                                                                                                               
~                                                                                                                                                                                                                               
~                      
