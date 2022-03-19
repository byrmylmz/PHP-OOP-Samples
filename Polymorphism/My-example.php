<?php

class Result
{
	public function result($get){
		$result= array();
		array($result,$get);
		return $result;
	}
}

class Apply
{
	public static function run($action)
	{		
			
			echo $action->handle() . '<br>';
	}
}

abstract class Action
{
	abstract public function handle();

}

// ...
class Move extends Action
{
	public function handle()
	{	
		new Result('move');
		return 'Move!';
	}
}

class Reorder extends Action
{
	public function handle()
	{	
		new Result('reaorder');

		return 'Reorder!';
	}
}

class Delete extends Action
{
	public function handle()
	{
		new Result('delete');

		return 'Delete!';
	}
}

// ...
class Update extends Action
{
	public function handle()
	{
		return 'Update!';
	}
}


$actionArray= ['Move','Reorder','Delete','Update'];

foreach($actionArray as $action){
	 Apply::run(new $action);
}

print_r($result);


// //...
// $actions = [
// 	new Move(),
// 	new Reorder(),
// 	new Delete(),
//     new Update()
// ];

// Apply::run($actions);