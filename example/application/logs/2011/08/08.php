<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-08 14:12:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: x ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_data.php [ 291 ]
2011-08-08 14:12:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: x ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_data.php [ 291 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_data.php(291): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/servus/Sm...', 291, Array)
#1 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(25): Smarty_Internal_Data->getVariable('x')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(152): Smarty->display('/home/servus/ko...')
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(163): Smarty_View->render()
#8 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#9 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#10 [internal function]: Controller_Welcome->action_index()
#11 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#15 {main}
2011-08-08 14:13:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: nasty_var ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_data.php [ 291 ]
2011-08-08 14:13:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: nasty_var ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_data.php [ 291 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_data.php(291): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/servus/Sm...', 291, Array)
#1 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(26): Smarty_Internal_Data->getVariable('nasty_var')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(152): Smarty->display('/home/servus/ko...')
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(163): Smarty_View->render()
#8 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#9 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#10 [internal function]: Controller_Welcome->action_index()
#11 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#15 {main}
2011-08-08 14:17:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant I18n - assumed 'I18n' ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 51 ]
2011-08-08 14:17:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant I18n - assumed 'I18n' ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 51 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(51): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/servus/Sm...', 51, Array)
#1 /home/servus/kohana/application/classes/controller/welcome.php(16): Smarty_View->__construct('profile', Array)
#2 [internal function]: Controller_Welcome->action_index()
#3 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-08 14:23:49 --- ERROR: ErrorException [ 1024 ]: function call 'register_object' is unknown or deprecated. ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_wrapper.php [ 57 ]
2011-08-08 14:23:49 --- STRACE: ErrorException [ 1024 ]: function call 'register_object' is unknown or deprecated. ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_wrapper.php [ 57 ]
--
#0 [internal function]: Kohana_Core::error_handler(1024, 'function call '...', '/home/servus/Sm...', 57, Array)
#1 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_wrapper.php(57): trigger_error('function call '...', 1024)
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(765): Smarty_Internal_Wrapper->convert('register_object', Array)
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(66): Smarty->__call('register_object', Array)
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(66): Smarty->register_object('I18n', Object(Smarty_View), Array)
#5 /home/servus/kohana/application/classes/controller/welcome.php(16): Smarty_View->__construct('profile', Array)
#6 [internal function]: Controller_Welcome->action_index()
#7 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-08 14:24:59 --- ERROR: ErrorException [ 8192 ]: Call-time pass-by-reference has been deprecated ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 66 ]
2011-08-08 14:24:59 --- STRACE: ErrorException [ 8192 ]: Call-time pass-by-reference has been deprecated ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 66 ]
--
#0 /home/servus/kohana/system/classes/kohana/core.php(496): Kohana_Core::error_handler(8192, 'Call-time pass-...', '/home/servus/Sm...', 66, Array)
#1 /home/servus/kohana/system/classes/kohana/core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Smarty_View')
#3 /home/servus/kohana/application/classes/controller/welcome.php(10): spl_autoload_call('Smarty_View')
#4 [internal function]: Controller_Welcome->action_index()
#5 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-08-08 14:25:59 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "/home/servus/kohana/application/views/profile.tpl"  on line 2 "{$I18n.get('asd')}"  - Unexpected "(", expected one of: "}" , " " ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php [ 441 ]
2011-08-08 14:25:59 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "/home/servus/kohana/application/views/profile.tpl"  on line 2 "{$I18n.get('asd')}"  - Unexpected "(", expected one of: "}" , " " ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php [ 441 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templateparser.php(2889): Smarty_Internal_TemplateCompilerBase->trigger_template_error()
#1 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templateparser.php(2954): Smarty_Internal_Templateparser->yy_syntax_error(35, '(')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_smartytemplatecompiler.php(51): Smarty_Internal_Templateparser->doParse(35, '(')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php(82): Smarty_Internal_SmartyTemplateCompiler->doCompile('<html>?{$I18n.g...')
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(260): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(424): Smarty_Internal_Template->compileTemplateSource()
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#8 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#9 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#10 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#11 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#12 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#13 [internal function]: Controller_Welcome->action_index()
#14 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#15 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#18 {main}
2011-08-08 14:26:37 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "/home/servus/kohana/application/views/profile.tpl"  on line 2 "{$I18n-&gt;get string='asd'}" unexpected "string" attribute ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php [ 441 ]
2011-08-08 14:26:37 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "/home/servus/kohana/application/views/profile.tpl"  on line 2 "{$I18n-&gt;get string='asd'}" unexpected "string" attribute ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php [ 441 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_compilebase.php(90): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unexpected "str...', 2)
#1 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_compile_private_print_expression.php(32): Smarty_Internal_CompileBase->_get_attributes(Array)
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php(294): Smarty_Internal_Compile_Private_Print_Expression->compile(Array, Object(Smarty_Internal_SmartyTemplateCompiler), Array, NULL, NULL)
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php(125): Smarty_Internal_TemplateCompilerBase->callTagCompiler('private_print_e...', Array, Array)
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templateparser.php(2338): Smarty_Internal_TemplateCompilerBase->compileTag('private_print_e...', Array, Array)
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templateparser.php(2846): Smarty_Internal_Templateparser->yy_r28()
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templateparser.php(2946): Smarty_Internal_Templateparser->yy_reduce(30)
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_smartytemplatecompiler.php(51): Smarty_Internal_Templateparser->doParse(11, '??')
#8 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php(82): Smarty_Internal_SmartyTemplateCompiler->doCompile('<html>?{$I18n->...')
#9 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(260): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#10 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(424): Smarty_Internal_Template->compileTemplateSource()
#11 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#12 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#13 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#14 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#15 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#16 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#17 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#18 [internal function]: Controller_Welcome->action_index()
#19 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#20 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#21 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#22 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#23 {main}
2011-08-08 14:27:16 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "/home/servus/kohana/application/views/profile.tpl"  on line 2 "{$I18n-&gt;get string='asd'}" unexpected "string" attribute ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php [ 441 ]
2011-08-08 14:27:16 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "/home/servus/kohana/application/views/profile.tpl"  on line 2 "{$I18n-&gt;get string='asd'}" unexpected "string" attribute ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php [ 441 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_compilebase.php(90): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unexpected "str...', 2)
#1 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_compile_private_print_expression.php(32): Smarty_Internal_CompileBase->_get_attributes(Array)
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php(294): Smarty_Internal_Compile_Private_Print_Expression->compile(Array, Object(Smarty_Internal_SmartyTemplateCompiler), Array, NULL, NULL)
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php(125): Smarty_Internal_TemplateCompilerBase->callTagCompiler('private_print_e...', Array, Array)
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templateparser.php(2338): Smarty_Internal_TemplateCompilerBase->compileTag('private_print_e...', Array, Array)
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templateparser.php(2846): Smarty_Internal_Templateparser->yy_r28()
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templateparser.php(2946): Smarty_Internal_Templateparser->yy_reduce(30)
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_smartytemplatecompiler.php(51): Smarty_Internal_Templateparser->doParse(11, '??')
#8 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_templatecompilerbase.php(82): Smarty_Internal_SmartyTemplateCompiler->doCompile('<html>?{$I18n->...')
#9 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(260): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#10 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(424): Smarty_Internal_Template->compileTemplateSource()
#11 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#12 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#13 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#14 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#15 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#16 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#17 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#18 [internal function]: Controller_Welcome->action_index()
#19 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#20 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#21 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#22 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#23 {main}
2011-08-08 14:27:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Smarty_View::$get ~ APPPATH/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php [ 21 ]
2011-08-08 14:27:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Smarty_View::$get ~ APPPATH/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php [ 21 ]
--
#0 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/servus/ko...', 21, Array)
#1 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#7 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#8 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#9 [internal function]: Controller_Welcome->action_index()
#10 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#14 {main}
2011-08-08 14:28:52 --- ERROR: ErrorException [ 1 ]: Call to private method Smarty_View::get() from context 'Smarty_Internal_Template' ~ APPPATH/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php [ 21 ]
2011-08-08 14:28:52 --- STRACE: ErrorException [ 1 ]: Call to private method Smarty_View::get() from context 'Smarty_Internal_Template' ~ APPPATH/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-08 14:29:25 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, none given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
2011-08-08 14:29:25 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, none given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(70): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/servus/Sm...', 70, Array)
#1 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(21): Smarty_View->get()
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#8 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#9 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#10 [internal function]: Controller_Welcome->action_index()
#11 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#15 {main}
2011-08-08 14:29:38 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
2011-08-08 14:29:38 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(70): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/servus/Sm...', 70, Array)
#1 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(21): Smarty_View->get('andrei')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#8 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#9 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#10 [internal function]: Controller_Welcome->action_index()
#11 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#15 {main}
2011-08-08 14:29:40 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
2011-08-08 14:29:40 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(70): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/servus/Sm...', 70, Array)
#1 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(21): Smarty_View->get('andrei')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#8 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#9 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#10 [internal function]: Controller_Welcome->action_index()
#11 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#15 {main}
2011-08-08 14:29:40 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
2011-08-08 14:29:40 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(70): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/servus/Sm...', 70, Array)
#1 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(21): Smarty_View->get('andrei')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#8 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#9 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#10 [internal function]: Controller_Welcome->action_index()
#11 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#15 {main}
2011-08-08 14:29:41 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
2011-08-08 14:29:41 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(70): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/servus/Sm...', 70, Array)
#1 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(21): Smarty_View->get('andrei')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#8 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#9 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#10 [internal function]: Controller_Welcome->action_index()
#11 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#15 {main}
2011-08-08 14:29:43 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
2011-08-08 14:29:43 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Smarty_View::get() must be an instance of string, string given, called in /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php on line 21 and defined ~ /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php [ 70 ]
--
#0 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(70): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/servus/Sm...', 70, Array)
#1 /home/servus/kohana/application/cache/smarty/compile/aead2f68ebf1b306f5edef2810f268a6c0363b45.file.profile.tpl.php(21): Smarty_View->get('andrei')
#2 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(434): include('/home/servus/ko...')
#3 /home/servus/Smarty-views-for-Kohana/smarty/classes/sysplugins/smarty_internal_template.php(569): Smarty_Internal_Template->renderTemplate()
#4 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(338): Smarty_Internal_Template->getRenderedTemplate()
#5 /home/servus/Smarty-views-for-Kohana/smarty/classes/Smarty.class.php(382): Smarty->fetch('/home/servus/ko...', NULL, NULL, NULL, true)
#6 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(161): Smarty->display('/home/servus/ko...')
#7 /home/servus/Smarty-views-for-Kohana/smarty/classes/smarty/view.php(172): Smarty_View->render()
#8 /home/servus/kohana/system/classes/kohana/response.php(160): Smarty_View->__toString()
#9 /home/servus/kohana/application/classes/controller/welcome.php(17): Kohana_Response->body(Object(Smarty_View))
#10 [internal function]: Controller_Welcome->action_index()
#11 /home/servus/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/servus/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/servus/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/servus/kohana/index.php(109): Kohana_Request->execute()
#15 {main}