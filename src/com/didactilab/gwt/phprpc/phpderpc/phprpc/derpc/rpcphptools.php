<?php
/*
 * Copyright 2011 DidactiLab SAS
 * 
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 * 
 * Date: 30 avr. 2011
 * Author: Mathieu LIGOCKI
 */

require_once PHPRPC_ROOT . 'exception.php';
require_once PHPRPC_ROOT . 'collections.php';

function array_peek($stack){
	//First see if the stack is empty
	$cnt=count($stack);
	if($cnt==0)return NULL;
	//Then set $where to top of stack if it is omitted
	$where = $cnt-1;
	//Next make sure $where is pointing to somewhere in the stack -
	//otherwise make it point to the top of the stack
	return $stack[$where];
}

function array_new($num, $value) {
	if ($num > 0) {
		return array_fill(0, $num, $value);
	}
	else {
		return array();
	}
}