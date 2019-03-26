/*js
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
*/

(function($){

CSetup = {

	jqo_page : {},

	init : function( opt ) {
		for ( var key in opt ) { this[key] = opt[key]; }

		var _this = this;

		this.jqo_page[1] = this.jqo_page1;
		this.jqo_btn_start = this.jqo_page[1].find(".btn-start");

		this.cajax = new CCAjax();
		this.jms = new CJMS();

		//-- start
		this.jqo_btn_start.click( function(e){
			e.preventDefault();
			_this.pc_goto_page(2);
		});

	},

	pc_goto_page : function( idx, reload ) {

		//-- add form to wdata
		var form = CForm.get(this.jqo_page[idx-1]);
		var page_key = this.jqo_page[idx-1].find("input[name='page-key']").val();

		var json = JSON.parse($("#wdata").val());
		json[page_key] = form;
		$("#wdata").val(JSON.stringify(json));

		//-- reload
		reload = ( reload === undefined ) ? false : reload;

		//-- check data-reload of class(.psect)
		if ( this.jqo_page[idx] ) {
			var jqo = this.jqo_page[idx].find(".psect");
			if ( (jqo.length) && ( parseInt(jqo.attr("data-reload")) == 1 ) ) {
				reload = true;
			}
		}

		if ( this.jqo_page[idx] && !reload ) {
			this.jqo_page[idx-1].hide();
			this.jqo_page[idx].show();
			CForm.setFRes(this.jqo_page[idx]);
		} else {
			var requ = {
				cmd:"goto_page"+idx,
				form:form,
				wdata:$("#wdata").val()
			};
			this.cajax.send(requ,this,function(resp){
				if ( CFRes.execute(resp,this.jqo_page[idx-1]) ) {
					if ( this.jqo_page[idx] ) {
						this.jqo_page[idx].remove();
					}
					this.jqo_page[idx] = $("<div>")
						.attr("class","page"+idx)
						.html(resp.html);

					this.jqo_page[idx-1]
						.after(this.jqo_page[idx])
						.hide();

					var _this = this;
					this.jqo_page[idx].find(".btn-back").click( function(e){
						e.preventDefault();
						_this.pc_backto_page(idx-1);
					});
					this.jqo_page[idx].find(".btn-next").click( function(e){
						e.preventDefault();
						_this.pc_goto_page(idx+1);
					});
					this.jqo_page[idx].find(".btn-reload").click( function(e){
						e.preventDefault();
						_this.pc_goto_page(idx, true);
					});
				}
			});
		}
	},

	pc_backto_page : function( idx ) {
		this.jqo_page[idx].show();
		this.jqo_page[idx+1].hide();
	}

};

$(document).ready(function(){
	CSetup.init({ jqo_page1: $(".page1") });
});

}(jQuery));
