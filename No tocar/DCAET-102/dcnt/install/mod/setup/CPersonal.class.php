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

class CPersonal {

	private static function validate( $data ) {

		//-- locale
		$lca = CEnv::locale( "install/validate" );

		//-- vali macro
		CValiMacro::setup($data, $lca);
		CValiMacro::vStr("time_zone");
	}

	public static function process( $data ) {
		$data->vx = array();
		$data->fm = $data->requ["form"];

		//-- validate
		self::validate( $data );
		if ( !CFRes::isValidated() ) {
			return false;
		}

		//-- setup
		if ( !self::setup( $data ) ) {
			return false;
		}

		return true;
	}

}

?>