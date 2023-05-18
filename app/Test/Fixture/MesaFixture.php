<?php
/**
 * MesaFixture
 *
 */
class MesaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'serie' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'puestos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'posicion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf32_spanish_ci', 'charset' => 'utf32'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'mesero_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'serie' => 'Lorem ip',
			'puestos' => 'Lorem ipsum dolor ',
			'posicion' => 'Lorem ipsum dolor sit amet',
			'created' => '2023-05-09 23:52:10',
			'modified' => '2023-05-09 23:52:10',
			'mesero_id' => 1
		),
	);

}
