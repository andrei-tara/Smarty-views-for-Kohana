<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-04 13:10:18 --- ERROR: View_Exception [ 0 ]: The requested Smarty_View test could not be found ~ MODPATH/smarty/classes/smarty/view.php [ 71 ]
2011-08-04 13:10:18 --- STRACE: View_Exception [ 0 ]: The requested Smarty_View test could not be found ~ MODPATH/smarty/classes/smarty/view.php [ 71 ]
--
#0 /home/servus/kohana/modules/smarty/classes/smarty/view.php(45): Smarty_View->set_filename('test')
#1 /home/servus/kohana/application/classes/controller/welcome.php(8): Smarty_View->__construct('test', Array)
#2 [internal function]: Controller_Welcome->action_index()
#3 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-04 13:27:59 --- ERROR: ErrorException [ 2 ]: mkdir(): Permission denied ~ MODPATH/smarty/classes/sysplugins/smarty_internal_write_file.php [ 28 ]
2011-08-04 13:27:59 --- STRACE: ErrorException [ 2 ]: mkdir(): Permission denied ~ MODPATH/smarty/classes/sysplugins/smarty_internal_write_file.php [ 28 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/home/servus/ko...', 28, Array)
#1 /home/servus/kohana/modules/smarty/classes/sysplugins/smarty_internal_write_file.php(28): mkdir('./templates_c', 505, true)
#2 /home/servus/kohana/modules/smarty/classes/sysplugins/smarty_internal_template.php(272): Smarty_Internal_Write_File::writeFile('./templates_c/0...', '<?php /* Smarty...', Object(Smarty))
#3 /home/servus/kohana/modules/smarty/classes/sysplugins/smarty_internal_template.php(424): Smarty_Internal_Template->compileTemplateSource()
#4 /home/servus/kohana/modules/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#5 /home/servus/kohana/modules/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#6 /home/servus/kohana/modules/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#7 /home/servus/kohana/modules/smarty/classes/smarty/view.php(147): Smarty->display('/home/servus/ko...')
#8 /home/servus/kohana/modules/smarty/classes/smarty/view.php(159): Smarty_View->render()
#9 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#10 /home/servus/kohana/application/classes/controller/welcome.php(8): Kohana_Response->body(Object(Smarty_View))
#11 [internal function]: Controller_Welcome->action_index()
#12 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#13 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#16 {main}
2011-08-04 13:28:38 --- ERROR: ErrorException [ 2 ]: mkdir(): Permission denied ~ MODPATH/smarty/classes/sysplugins/smarty_internal_write_file.php [ 28 ]
2011-08-04 13:28:38 --- STRACE: ErrorException [ 2 ]: mkdir(): Permission denied ~ MODPATH/smarty/classes/sysplugins/smarty_internal_write_file.php [ 28 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/home/servus/ko...', 28, Array)
#1 /home/servus/kohana/modules/smarty/classes/sysplugins/smarty_internal_write_file.php(28): mkdir('./templates_c', 505, true)
#2 /home/servus/kohana/modules/smarty/classes/sysplugins/smarty_internal_template.php(272): Smarty_Internal_Write_File::writeFile('./templates_c/0...', '<?php /* Smarty...', Object(Smarty))
#3 /home/servus/kohana/modules/smarty/classes/sysplugins/smarty_internal_template.php(424): Smarty_Internal_Template->compileTemplateSource()
#4 /home/servus/kohana/modules/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#5 /home/servus/kohana/modules/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#6 /home/servus/kohana/modules/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#7 /home/servus/kohana/modules/smarty/classes/smarty/view.php(146): Smarty->display('/home/servus/ko...')
#8 /home/servus/kohana/modules/smarty/classes/smarty/view.php(158): Smarty_View->render()
#9 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#10 /home/servus/kohana/application/classes/controller/welcome.php(8): Kohana_Response->body(Object(Smarty_View))
#11 [internal function]: Controller_Welcome->action_index()
#12 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#13 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#16 {main}
2011-08-04 13:29:23 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Core::find_file(), called in /home/servus/kohana/modules/smarty/classes/smarty/view.php on line 56 and defined ~ SYSPATH/classes/kohana/core.php [ 612 ]
2011-08-04 13:29:23 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Core::find_file(), called in /home/servus/kohana/modules/smarty/classes/smarty/view.php on line 56 and defined ~ SYSPATH/classes/kohana/core.php [ 612 ]
--
#0 /home/servus/kohana/system/classes/kohana/core.php(612): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/servus/ko...', 612, Array)
#1 /home/servus/kohana/modules/smarty/classes/smarty/view.php(56): Kohana_Core::find_file('views')
#2 /home/servus/kohana/application/classes/controller/welcome.php(8): Smarty_View->__construct('test', Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#8 {main}