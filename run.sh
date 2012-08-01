clear
set +v
echo ------------------------
echo BENCHMARK: ab -q -n 1000 -c 5 
echo ------------------------

echo
echo
echo ------------------------
echo Zend framework
echo ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/zend/test/public/ | grep "Requests per second"
echo
echo
echo ------------------------
echo Kohana framework
echo ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/kohana/index.php/say/hello | grep "Requests per second"

echo
echo
echo ------------------------
echo CodeIgniter framework
echo ------------------------

ab -q  -n 1000 -c 5 http://localhost/benchmark/codeigniter/index.php/say/hello | grep "Requests per second"

echo
echo
echo ------------------------
echo Yii framework
echo ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/yii/index.php?r=say/hello | grep "Requests per second"


echo
echo
echo ------------------------
echo YAF
echo ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/yaf/ | grep "Requests per second"

echo
echo
echo ------------------------
echo Phalcon framework
echo ------------------------
ab -q -n 1000 -c 5 http://localhost/benchmark/phalcon/?_url=say/hello | grep "Requests per second"