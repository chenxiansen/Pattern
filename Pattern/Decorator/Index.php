<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 14:03
 */

namespace Decorator;

//装饰器模式
class Index
{

}
//传统模式添加一个颜色 需要继承父类Canvas类重写他的方法
$canvas1 = new Canvas1();
$canvas1->init();
$canvas1->rect(3,6,4,12);
$canvas1->draw();

//装饰器实现
$canvas1 = new Canvas();
$canvas1->init();
//添加颜色装饰器
$canvas1->addDecorator(new ColorDrawDecorator('green'));
//添加大小装饰器
$canvas1->addDecorator(new SizeDrawDecorator('18px'));
$canvas1->rect(3,6,4,12);
$canvas1->draw();