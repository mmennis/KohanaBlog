<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-04 17:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-04 17:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-04 17:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/edit/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-04 17:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/edit/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/index.php(109): Kohana_Request->execute()
#3 {main}