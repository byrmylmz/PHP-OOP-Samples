<?php

class BankAccount
{
	public $payload;

    public $result =array();

	

	function __construct( $payload)
	{
      
        $this->payload= $payload;
	}

    public function test()
    {   
       foreach($this->payload as $pay){
           array_push($this->result,'1');
       }
       return $this->result;
    }

}
$payload=[
    ['type'=>'board_reorder','items'=>['id'=>'105','order'=>'123']],
    ['type'=>'board_reorder','items'=>['id'=>'105','order'=>'123']],
    ['type'=>'board_reorder','items'=>['id'=>'105','order'=>'123']],
    ['type'=>'board_reorder','items'=>['id'=>'105','order'=>'123']],
];

$news = new BankAccount($payload);

print_r($news->test());