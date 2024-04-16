<?php
class student
{
    public $name;
    public $mark;
    public function __construct($n,$m)
    {
        $this->name=$n;
        $this->mark=$m;
    }
    public function display()
    {
        echo $this->name;
    }
}

$s1 = new student('anu',100);
$s2 = new student('bala',90);
$s3 = new student('ammu',70);

$stuarray=array($s1,$s2,$s3);

foreach($stuarray as $val)
{
    if($val->mark >= 90)
    {
        $val->display();
    }
}
?>
