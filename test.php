<?php
class Test{
	protected $name = 'nameless';
	protected $age  = 29;
	
    	public function myTest(String $str = 'test String') {
	    echo $str;
	}

	public function sayHello(String $hello = 'hello') {
	    echo $hello.' '.$this->name;
	}
}

$test = new Test();

$test->myTest();
echo '<br>';
$test->sayHello();
