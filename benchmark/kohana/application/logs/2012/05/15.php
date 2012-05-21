<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-15 13:05:23 --- ERROR: View_Exception [ 0 ]: The requested view action_hello could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-15 13:05:23 --- STRACE: View_Exception [ 0 ]: The requested view action_hello could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\bench\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('action_hello')
#1 C:\wamp\www\bench\kohana\application\classes\controller\say.php(7): Kohana_View->__construct('action_hello')
#2 [internal function]: Controller_Say->action_hello()
#3 C:\wamp\www\bench\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Say))
#4 C:\wamp\www\bench\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\bench\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\bench\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-15 13:05:32 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\say.php [ 8 ]
2012-05-15 13:05:32 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\say.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:05:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:05:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:06:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:06:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:07:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:07:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:09:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:09:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:09:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:09:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:09:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:09:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:11:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:11:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:11:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:11:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:11:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:11:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:11:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:11:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:11:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:11:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:14:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:14:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:15:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:15:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:16:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:16:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:18:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:18:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:19:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_U
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}ser' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-15 13:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}