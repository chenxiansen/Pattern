<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 12:10
 */

namespace Pattern\Strategy;

//策略模式
class Page
{
    protected $strategy;
    public function index()
    {
        echo "Ad";
        $this->strategy->showAdd();
        echo "category";
        $this->strategy->showCategory();

    }

    function setStrategy(userStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page();
if(isset($_GET['female']))
{
    $strategy = new FemaleuserStrategy();
}else
{
    $strategy = new MaleuserStrategy();
}
$page->setStrategy($strategy);