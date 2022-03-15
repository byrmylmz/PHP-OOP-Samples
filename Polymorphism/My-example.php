<?php

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
		return 'Move!';
	}
}

class Reorder extends Action
{
	public function handle()
	{
		return 'Reorder!';
	}
}

class Delete extends Action
{
	public function handle()
	{
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
// //...
// $actions = [
// 	new Move(),
// 	new Reorder(),
// 	new Delete(),
//     new Update()
// ];

// Apply::run($actions);