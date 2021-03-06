<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

class acp_storage_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_storage',
			'title'		=> 'ACP_STORAGE_SETTINGS',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_STORAGE_SETTINGS', 'auth' => 'acl_a_storage', 'cat' => array('ACP_SERVER_CONFIGURATION')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
