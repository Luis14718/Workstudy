<?php
//==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>
//
// AjaxCountDown v1.02
// Copyright (c) phpkobo.com ( http://www.phpkobo.com/ )
// Email : admin@phpkobo.com
// ID : DCAET-102
// URL : http://www.phpkobo.com/ajax-countdown
//
// This software is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; version 2 of the
// License.
//
//==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<

class CAppSetup {

	public static function run($data) {
		//-- wdata
		$wdata = CJson::decode($data->requ["wdata"]);

		//-- init db
		CDb::open();

		//-- get root-admin id
		$cfg = CEnv::config("user/root-admin");
		$root_id = $cfg["root-admin-id"];

		//-- set time_zone
		$personal = $wdata["personal"];
		$time_zone = $personal["time_zone"];

		CTable::updateByID("user","user_id",$root_id,array(
			"time_zone"=>$time_zone,
		));

		$cfgapp = CCfgDb::get("cfgapp");
		$cfgapp["tbl:user:default_time_zone"] = $time_zone;
		CCfgDb::set("cfgapp",$cfgapp);
	}

}

?>