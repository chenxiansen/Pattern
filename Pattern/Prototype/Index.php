<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 14:03
 */

namespace Pattern\Prototype;

//原型模式适用于大对象的创建
class Index
{

}
//初始化第一次
$canvas1 = new Canvas();
$canvas1->init();
$canvas1->rect(3,6,4,12);
$canvas1->draw();
//初始化第二次
$canvas2 = new Canvas();
$canvas2->init();
$canvas2->rect(1,3,2,6);
$canvas2->draw();

//--------------原型模型如下
$prototype = new Canvas();
$prototype->init();
//clone对象
$canvas3 = clone $prototype;
$canvas3->rect(3,6,4,12);
$canvas3->draw();
//clone对象
$canvas4 = clone $prototype;
$canvas4->rect(3,6,4,12);
$canvas4->draw();