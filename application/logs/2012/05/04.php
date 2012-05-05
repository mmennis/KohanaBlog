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
2012-05-04 18:28:56 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/article.php [ 15 ]
2012-05-04 18:28:56 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/article.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 18:29:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 24 ]
2012-05-04 18:29:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 24 ]
--
#0 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/application/views/template.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/qa/PhpToo...', 24, Array)
#1 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(61): include('/home/qa/PhpToo...')
#2 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/qa/PhpToo...', Array)
#3 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#6 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/index.php(109): Kohana_Request->execute()
#9 {main}
2012-05-04 19:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/view3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-04 19:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/view3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-04 19:25:54 --- ERROR: View_Exception [ 0 ]: The requested view comment/single could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-04 19:25:54 --- STRACE: View_Exception [ 0 ]: The requested view comment/single could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(137): Kohana_View->set_filename('comment/single')
#1 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(30): Kohana_View->__construct('comment/single', Array)
#2 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/application/views/article/single.php(13): Kohana_View::factory('comment/single', Array)
#3 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(61): include('/home/qa/PhpToo...')
#4 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/qa/PhpToo...', Array)
#5 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/application/views/template.php(24): Kohana_View->__toString()
#7 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(61): include('/home/qa/PhpToo...')
#8 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/qa/PhpToo...', Array)
#9 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#12 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/index.php(109): Kohana_Request->execute()
#15 {main}
2012-05-04 19:38:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/article/edit.php [ 9 ]
2012-05-04 19:38:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/article/edit.php [ 9 ]
--
#0 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/application/views/article/edit.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/qa/PhpToo...', 9, Array)
#1 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(61): include('/home/qa/PhpToo...')
#2 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/qa/PhpToo...', Array)
#3 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/application/views/template.php(24): Kohana_View->__toString()
#5 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(61): include('/home/qa/PhpToo...')
#6 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/qa/PhpToo...', Array)
#7 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#10 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/qa/PhpTools/httpd-2.2.19-bin/htdocs/kohana-blog/index.php(109): Kohana_Request->execute()
#13 {main}