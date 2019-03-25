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
	$rs["db-hostname"] = "localhost";
	$rs["db-database"] = "";
	$rs["db-username"] = "";
	$rs["db-password"] = "";

	$lca = CEnv::locale("install/page.dbsetup");
	$req = _req();
?>
<div class="psect">
<input type="hidden" name="page-key" value="dbsetup"/>

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
						<label><?php echo $lca["label:db-hostname"]; ?>
							<?php echo $req; ?></label>
						<input type="text"
							class="form-control _ffe_"
							name="db-hostname"
							value="<?php echo _hsc( $rs["db-hostname"] ); ?>"
							placeholder="<?php echo $lca["plh:db-hostname"]; ?>"
							>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						<label><?php echo $lca["label:db-database"]; ?>
							<?php echo $req; ?></label>
						<input type="text"
							class="form-control _ffe_"
							name="db-database"
							value="<?php echo _hsc( $rs["db-database"] ); ?>"
							placeholder="<?php echo $lca["plh:db-database"]; ?>"
							>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label><?php echo $lca["label:db-username"]; ?>
							<?php echo $req; ?></label>
						<input type="text"
							class="form-control _ffe_"
							name="db-username"
							value="<?php echo _hsc( $rs["db-username"] ); ?>"
							placeholder="<?php echo $lca["plh:db-username"]; ?>"
							>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						<label><?php echo $lca["label:db-password"]; ?>
							<?php echo $req; ?></label>
						<input type="text"
							class="form-control _ffe_"
							name="db-password"
							value="<?php echo _hsc( $rs["db-password"] ); ?>"
							placeholder="<?php echo $lca["plh:db-password"]; ?>"
							>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("tpl.navi.inc.php"); ?>
</div>
<?php // ?>