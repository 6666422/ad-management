<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbb\admanagement\tests\functional;

/**
* @group functional
*/
class location_above_header_test extends location_base
{
	/**
	* {@inheritDoc}
	*/
	public function setUp()
	{
		parent::setUp();
	}

	public function test_location_above_header()
	{
		$ad_code = $this->create_ad('above_header');

		$crawler = self::request('GET', "index.php");

		// Confirm above header ad is first child of body
		$this->assertContains($ad_code, $crawler->filter('body')->children()->first()->html());
	}
}
