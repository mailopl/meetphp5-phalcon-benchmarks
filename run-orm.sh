clear
set +v
echo ------------------------
echo BENCHMARK: ab -q -n 1000 -c 5 
echo ------------------------
echo
echo
echo ------------------------
echo Yii framework
echo ------------------------
ab -q -n 1000 -c 5 http://localhost/orm-benchmark/yii/index.php?r=say/hello | grep "Requests per second"

echo
echo
echo ------------------------
echo Phalcon framework
echo ------------------------
ab -q -n 1000 -c 5 http://localhost/orm-benchmark/phalcon/?_url=say/hello | grep "Requests per second"