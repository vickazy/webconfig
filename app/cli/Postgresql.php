<?php
namespace App;

/**
* 
*/
class Postgresql
{
	
	private $server;

	function __construct(Server $server)
	{
		$this->server = $server;
	}

	public function isActive()
	{
		return $this->server->isActive();
	}

	public function restart()
	{
		return $this->server->restart();
	}

	public function up()
	{
		return $this->server->up();
	}

	public function down()
	{
		return $this->server->down();
	}
}