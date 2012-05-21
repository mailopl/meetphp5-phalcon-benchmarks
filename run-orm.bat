cls
@ECHO off
@ECHO ------------------------
@ECHO BENCHMARK: ab -q -n 1000 -c 5 
@ECHO ------------------------
@ECHO.
@ECHO.
@ECHO ------------------------
@ECHO Yii framework
@ECHO ------------------------
ab -q -n 1000 -c 5 http://localhost/orm-benchmark/yii/index.php?r=say/hello | grep "Requests per second"

@ECHO.
@ECHO.
@ECHO ------------------------
@ECHO Phalcon framework
@ECHO ------------------------
ab -q -n 1000 -c 5 http://localhost/orm-benchmark/phalcon/?_url=say/hello | grep "Requests per second"