<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Copyright (C) 2019 Kyle Coots <Kyle Coots @ cooterscomputers.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('landing');
	}
}
