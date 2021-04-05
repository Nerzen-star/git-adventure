<?php
    class A{

    }		
    class B extends A{
        public function __construct($a3){
            $this->a3 = $a3;
            }
        protected $a3;
    }
    class C extends B{
        public function __construct($a1, $a2, $a3, $b1){
            $this->a1 = $a1;
            $this->a2 = $a2;
            parent::__construct($a3);
            $this->b1 = $b1;
        }
        protected $a1, $a2, $b1;
    }

    /*$a1 = new A();
    $a2 = new A();
    $a3 = new A();
    $b1 = new B($a3);
    $c1 = new C($a1, $a2, $a3, $b1);*/

    // Решение в одну строку

    $c1 = new C(new A(), new A(), $a3 = new A(), new B($a3));

    var_dump($c1);
?>