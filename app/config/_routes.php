<?php
/*
* Author: Alex Kot
* Date: 2019/01/20
* EMail: kot.oleksandr.v@gmail.com
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 2
* of the License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details:
* http://www.gnu.org/licenses/gpl.html
*/

// ROUTE LIST

return [
	'' => [
		'controller'  => 'home',
		'action'      => 'home',
	],

	'admin' => [
		'controller'  => 'admin',
		'action'      => 'admin',
	],

	'profile' => [
		'controller'  => 'profile',
		'action'      => 'profile',
	],

	'signin' => [
		'controller'  => 'signin',
		'action'      => 'signin',
	],

	'signup' => [
		'controller'  => 'signup',
		'action'      => 'signup',
	],

	'signout' => [
		'controller'  => 'signout',
		'action'      => 'signout',
	],
];