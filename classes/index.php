<?php

class Team
{  
    protected $name;
    protected $members=[];

    public function __construct($name, $members=[])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function add($name)
    {
        $this->members[]=$name;
    }

    public function members()
    {
        return $this->members;
    }

}

class Member
{   
    protected $name;
    
    public function __construct($name)
    {
        $this->name=$name;
    }

    public function lastViewed()
    {

    }

}



$acme = Team::start('Acme',[
   new Member('bayram'),
   new Member('yilmaz')
]);


// $acme = Team::start('Acme',[
//     'initial bayram',
//     'initial yilmaz'
// ]);

// $acme->add('bayram');
// $acme->add('yilmaz');

var_dump($acme);