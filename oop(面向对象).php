<?php  
	//创建一个类(变量和函数写到类里面)
	class Person{
		private $name;
		private $email;
		private static $age=40;
		public static function getAge(){  //通过调用这个拿到静态变量
			return Person::$age;   
		}
		public function setName($sbqname){
          $this->name=$sbqname;   //name就是$name  但是定义的时候用$ 调用时不用$
		}
		public function getName(){
			return $this->name;
		}
		public function setEmail($sbqemail){
			$this->email=$sbqemail;
		}
		public function getEmail(){
			return $this->email;
		}
		//构造函数(解决方法1)
		public function __construct($sbqname,$sbqemail){
			$this->name=$sbqname;
			$this->email=$sbqemail;
			// echo "Person 对象已被创建";
			// 神奇变量
			echo __CLASS__."对象已被创建";
		}
		//析构函数 当对象销毁之前调用的函数
		// public function __destruct(){
		// 	echo __CLASS__."对象已被销毁";
		// }
		
	}
	// $person1=new Person;
	// $person1->name="miao";
	// echo $person1->name;

	// $person1->setName("小明");
	// echo $person1->getName();
	// $person1->setEmail("555@qq.com");
	// echo $person1->getEmail();

	$person1=new Person("miao","mj@qq.com");
	echo $person1->getName();

	//继承
	class Customers extends Person{
		private $salary;
        public function setSalary($salary){
        	$this->salary=$salary;
        }
         public function getSalary(){
        	return $this->salary;
        }
        public function setName($name){
        	$this->name=$name;
        }
        public function __construct($sbqname,$sbqemail,$sbqsalary){
			parent::__construct($sbqname,$sbqemail); //相当于重写构造函数
			$this->salary=$sbqsalary; 
		}

	}
	$customer=new Customers("Ann","Ann@qq.com",3000);
	// $customer->setSalary(3000);
	// echo $customer->getName();
	// echo $customer->getEmail();
	// echo $customer->getSalary();
    
    $customer->setName("aaa");
    // $customer->getName();
    echo $customer->name;
	//调用静态变量
	// echo Person::$age;
	// echo Person::getAge();
?>