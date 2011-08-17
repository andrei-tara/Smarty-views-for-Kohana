<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-03 14:08:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/welcome.php [ 7 ]
2011-08-03 14:08:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 14:23:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH/views/test.php [ 7 ]
2011-08-03 14:23:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH/views/test.php [ 7 ]
--
#0 /home/servus/kohana/application/views/test.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/servus/ko...', 7, Array)
#1 /home/servus/kohana/system/classes/kohana/view.php(61): include('/home/servus/ko...')
#2 /home/servus/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/servus/ko...', Array)
#3 /home/servus/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/servus/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/servus/kohana/application/classes/controller/welcome.php(8): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-03 15:54:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH/views/test.php [ 7 ]
2011-08-03 15:54:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH/views/test.php [ 7 ]
--
#0 /home/servus/kohana/application/views/test.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/servus/ko...', 7, Array)
#1 /home/servus/kohana/system/classes/kohana/view.php(61): include('/home/servus/ko...')
#2 /home/servus/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/servus/ko...', Array)
#3 /home/servus/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/servus/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/servus/kohana/application/classes/controller/welcome.php(8): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-03 16:09:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH/views/test.php [ 7 ]
2011-08-03 16:09:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH/views/test.php [ 7 ]
--
#0 /home/servus/kohana/application/views/test.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/servus/ko...', 7, Array)
#1 /home/servus/kohana/system/classes/kohana/view.php(61): include('/home/servus/ko...')
#2 /home/servus/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/servus/ko...', Array)
#3 /home/servus/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/servus/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/servus/kohana/application/classes/controller/welcome.php(8): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-03 16:15:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH/views/test.php [ 7 ]
2011-08-03 16:15:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH/views/test.php [ 7 ]
--
#0 /home/servus/kohana/application/views/test.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/servus/ko...', 7, Array)
#1 /home/servus/kohana/system/classes/kohana/view.php(61): include('/home/servus/ko...')
#2 /home/servus/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/servus/ko...', Array)
#3 /home/servus/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/servus/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/servus/kohana/application/classes/controller/welcome.php(8): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-03 16:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Smarty_View' not found ~ APPPATH/classes/controller/welcome.php [ 8 ]
2011-08-03 16:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Smarty_View' not found ~ APPPATH/classes/controller/welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 16:20:31 --- ERROR: ErrorException [ 1 ]: Class 'Smarty_View_Exception' not found ~ MODPATH/smarty/classes/smarty/view.php [ 69 ]
2011-08-03 16:20:31 --- STRACE: ErrorException [ 1 ]: Class 'Smarty_View_Exception' not found ~ MODPATH/smarty/classes/smarty/view.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 16:20:56 --- ERROR: View_Exception [ 0 ]: The requested Smarty_View test could not be found ~ MODPATH/smarty/classes/smarty/view.php [ 69 ]
2011-08-03 16:20:56 --- STRACE: View_Exception [ 0 ]: The requested Smarty_View test could not be found ~ MODPATH/smarty/classes/smarty/view.php [ 69 ]
--
#0 /home/servus/kohana/modules/smarty/classes/smarty/view.php(45): Smarty_View->set_filename('test')
#1 /home/servus/kohana/application/classes/controller/welcome.php(8): Smarty_View->__construct('test')
#2 [internal function]: Controller_Welcome->action_index()
#3 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-03 16:21:59 --- ERROR: View_Exception [ 0 ]: The requested Smarty_View test could not be found ~ MODPATH/smarty/classes/smarty/view.php [ 69 ]
2011-08-03 16:21:59 --- STRACE: View_Exception [ 0 ]: The requested Smarty_View test could not be found ~ MODPATH/smarty/classes/smarty/view.php [ 69 ]
--
#0 /home/servus/kohana/modules/smarty/classes/smarty/view.php(45): Smarty_View->set_filename('test')
#1 /home/servus/kohana/application/classes/controller/welcome.php(8): Smarty_View->__construct('test')
#2 [internal function]: Controller_Welcome->action_index()
#3 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-03 16:22:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Smarty_View::capture() ~ MODPATH/smarty/classes/smarty/view.php [ 143 ]
2011-08-03 16:22:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Smarty_View::capture() ~ MODPATH/smarty/classes/smarty/view.php [ 143 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 16:22:54 --- ERROR: ErrorException [ 4096 ]: Method Smarty_View::__toString() must return a string value ~ SYSPATH/classes/kohana/response.php [ 160 ]
2011-08-03 16:22:54 --- STRACE: ErrorException [ 4096 ]: Method Smarty_View::__toString() must return a string value ~ SYSPATH/classes/kohana/response.php [ 160 ]
--
#0 /home/servus/kohana/system/classes/kohana/response.php(160): Kohana_Core::error_handler(4096, 'Method Smarty_V...', '/home/servus/ko...', 160, Array)
#1 /home/servus/kohana/application/classes/controller/welcome.php(8): Kohana_Response->body(Object(Smarty_View))
#2 [internal function]: Controller_Welcome->action_index()
#3 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-03 16:23:38 --- ERROR: ErrorException [ 4096 ]: Method Smarty_View::__toString() must return a string value ~ SYSPATH/classes/kohana/response.php [ 160 ]
2011-08-03 16:23:38 --- STRACE: ErrorException [ 4096 ]: Method Smarty_View::__toString() must return a string value ~ SYSPATH/classes/kohana/response.php [ 160 ]
--
#0 /home/servus/kohana/system/classes/kohana/response.php(160): Kohana_Core::error_handler(4096, 'Method Smarty_V...', '/home/servus/ko...', 160, Array)
#1 /home/servus/kohana/application/classes/controller/welcome.php(8): Kohana_Response->body(Object(Smarty_View))
#2 [internal function]: Controller_Welcome->action_index()
#3 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-03 16:35:30 --- ERROR: ErrorException [ 1 ]: Class 'Smarty' not found ~ MODPATH/smarty/classes/smarty/view.php [ 52 ]
2011-08-03 16:35:30 --- STRACE: ErrorException [ 1 ]: Class 'Smarty' not found ~ MODPATH/smarty/classes/smarty/view.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 16:37:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Smarty_View::$_data ~ MODPATH/smarty/classes/smarty/view.php [ 49 ]
2011-08-03 16:37:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Smarty_View::$_data ~ MODPATH/smarty/classes/smarty/view.php [ 49 ]
--
#0 /home/servus/kohana/modules/smarty/classes/smarty/view.php(49): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/servus/ko...', 49, Array)
#1 /home/servus/kohana/application/classes/controller/welcome.php(8): Smarty_View->__construct('test', Array)
#2 [internal function]: Controller_Welcome->action_index()
#3 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#7 {main}