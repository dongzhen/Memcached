<?php
// date_default_timezone_set('PRC');
//a. 如果欲使用gb2312编码，那么php要输出头：header(“Content-Type: text/html; charset=gb2312")，静态页面添加<meta http-equiv="Content-Type" content="text/html; charset=gb2312">，所有文件的编码格式为ANSI，可用记事本打开，另存为选择编码为ANSI，覆盖源文件。
//b. 如果欲使用utf-8编码，那么php要输出头 ：header(“Content-Type: text/html; charset=utf-8")，静态页面添加<meta http-equiv="Content-Type" content="text/html; charset=utf-8">，所有文件的编码格式为utf-8。
//header("Content-Type: text/html;charset=utf-8");
//$m=new Memcached(); //创建Memcache对象
 //连接Memcache服务器
//$m->addServer("114.215.109.3",11111);
include_once "Mem.class.php";

$n=new Mem();

$n->addServer("114.215.109.3",11111);

//$n->S('key','dongzhen','20');

$n->S('a','value',40);

//echo $n->S('a');

echo $n->get('a');

echo $n->getError();
//$array=array(
//    array("114.215.109.3",11111),
////    array("127.0.0.1",11211)
//);

//$m->addServers($array);

//$m->set('numer',5,0);
//
//$m->increment('numer',5);
//
//echo $m->get('numer');
//$data=array(
//    'key'=>'董震',
//    'key2'=>'帅',
//);
//$m->setMulti($data,0);

//$result=$m->getMulti(array('key','key2'));
//
//$m->deleteMulti(array('key','key2'));
//
//echo $m->getResultCode();
//
//echo $m->getResultMessage();
//
//
//print_r($result);

//$m->add('dongzhen','hero',600);
//$m->add('dongzhen','cool',600);
//$m->add('zero','dongzhen',12);

//echo $m->get('zero');
//$hero=$m->get('dongzhen');
//echo $m->get('dongzhen');
//print_r($hero);
//print_r($m->getStats());

//print_r($m->getVersion());
//$val = "这是一个Memcache的测试.";

//$key = md5($val);
//
//if($mem->set($key, $val, 0, 120)){
//    echo 'success';
//}else{
//    echo 'fales';
//}
//
//$a=$men->get('key');

//echo $a;
//$mem->set($key, $val, 0, 120);
//增加插入一条缓存，缓存时间为120s

//if(($k = $mem->get('key'))){
////判断是否获取到指定的key
//
//    echo "fromcache:".$k;
//
//} else {
//
//    echo 'normal';
    //这里我们在实际使用中就需要替换成查询数据库并创建缓存.

//}






