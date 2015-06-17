<?php
/**
 * InvoiceFixture
 *
 */
class InvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'invoice_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'invoice_number_int' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'invoice_number_ext' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'amount_excl' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'VAT' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount_incl' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'date_exp' => array('type' => 'date', 'null' => false, 'default' => null),
		'paydate' => array('type' => 'date', 'null' => false, 'default' => null),
		'virtual' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'paid' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'workmonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'hourrate' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'hours' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'days' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'descr' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'company_id' => 1,
			'invoice_type_id' => 1,
			'invoice_number_int' => 'Lorem ipsum dolor sit amet',
			'invoice_number_ext' => 'Lorem ipsum dolor sit amet',
			'amount_excl' => 1,
			'VAT' => 1,
			'amount_incl' => 1,
			'date' => '2015-06-17',
			'date_exp' => '2015-06-17',
			'paydate' => '2015-06-17',
			'virtual' => 1,
			'paid' => 1,
			'workmonth' => 'Lorem ipsum dolor ',
			'hourrate' => 1,
			'hours' => 1,
			'days' => 1,
			'descr' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2015-06-17 21:04:05',
			'modified' => '2015-06-17 21:04:05'
		),
	);

}
