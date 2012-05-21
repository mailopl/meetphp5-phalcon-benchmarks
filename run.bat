cls
@ECHO off
@ECHO ------------------------
@ECHO BENCHMARK: ab -q -n 1000 -c 5 
@ECHO ------------------------

@ECHO.
@ECHO.
@ECHO ------------------------
@ECHO Zend framework
@ECHO ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/zend/test/public/ | grep "Requests per second"
@ECHO.
@ECHO.
@ECHO ------------------------
@ECHO Kohana framework
@ECHO ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/kohana/index.php/say/hello | grep "Requests per second"

@ECHO.
@ECHO.
@ECHO ------------------------
@ECHO CodeIgniter framework
@ECHO ------------------------

ab -q  -n 1000 -c 5 http://localhost/benchmark/codeigniter/index.php/say/hello | grep "Requests per second"

@ECHO.
@ECHO.
@ECHO ------------------------
@ECHO Yii framework
@ECHO ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/yii/index.php?r=say/hello | grep "Requests per second"

@ECHO.
@ECHO.
@ECHO ------------------------
@ECHO Phalcon framework
@ECHO ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/phalcon/?_url=say/hello | grep "Requests per second"