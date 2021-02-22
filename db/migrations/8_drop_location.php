<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DropLocation extends Doctrine_Migration_Base
{
    public function up()
    {
		$this->dropTable('location');
    }

    public function down()
    {
		$this->createTable('location', array(
             'user_id' => 
             array(
              'type' => 'integer',
              'unsigned' => '1',
              'primary' => '1',
              'length' => '11',
             ),
             'country' => 
             array(
              'type' => 'string',
              'length' => '2',
             ),
             'region' => 
             array(
              'type' => 'string',
              'length' => '64',
             ),
             'city' => 
             array(
              'type' => 'string',
              'length' => '64',
             ),
             'latitude' => 
             array(
              'type' => 'string',
              'length' => '64',
             ),
             'longitude' => 
             array(
              'type' => 'string',
              'length' => '64',
             ),
             ), array(
             'type' => '',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'user_id',
             ),
             'collate' => 'utf8mb4_unicode_ci',
             'charset' => '',
             ));
    }
}