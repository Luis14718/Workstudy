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
	CEnv::useLib("app");

	$lca = CEnv::locale("install/page.personal");
	$rs["time_zone"] = $lca["init:time_zone"];

	$req = _req();
?>
<div class="psect">
<input type="hidden" name="page-key" value="personal"/>

	<div class="psect-body">
		<div class="ctar-form">

			<div class="task-title">
			<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			<?php echo $lca["page:title"]; ?>
			</div>

			<p class="task-inst text-info">
				<?php echo $lca["text:inst"]; ?>
			</p>

			<div class="ctar-falert"></div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label><?php echo $lca["label:time_zone"]; ?>
							<?php echo $req; ?></label>
						<select class="form-control _ffe_" name="time_zone">
						<?php CHtmlMacro::printOptions(
							CEnv::locale("util/time-zone"),
							"time-zone", $rs["time_zone"]); ?>
						</select>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php include("tpl.navi.inc.php"); ?>
</div>
<?php // ?>