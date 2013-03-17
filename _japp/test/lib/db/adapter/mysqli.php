<?php
jf::import("jf/test/lib/db/adapter/base");
class LibDbMysqliTest extends LibDbBaseTest
{
	public static function setUpBeforeClass()
	{
		parent::setUpBeforeClass();
		$setting=\jf\DatabaseManager::Configuration();
		$setting->Adapter="pdo_mysql";
		\jf\DatabaseManager::AddConnection($setting);
		\jf\DatabaseManager::$DefaultIndex=2;
	}
	public static function tearDownAfterClass()
	{
		parent::tearDownAfterClass();
		\jf\DatabaseManager::$DefaultIndex=0;
	}
}

class LibDbStatementMysqliTest extends LibDbStatementBaseTest
{
	public static function setUpBeforeClass()
	{
		parent::setUpBeforeClass();
		$setting=\jf\DatabaseManager::Configuration();
		$setting->Adapter="pdo_mysql";
		\jf\DatabaseManager::AddConnection($setting);
		\jf\DatabaseManager::$DefaultIndex=2;
	}
	public static function tearDownAfterClass()
	{
		parent::tearDownAfterClass();
		\jf\DatabaseManager::$DefaultIndex=0;
	}
}