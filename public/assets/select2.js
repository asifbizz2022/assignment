!function(e,t,r){"use strict";function s(e){e.element;return e.id?"<i class='fa fa-"+r(e.element).data("icon")+"'></i>"+e.text:e.text}r(".select2").select2(),r(".select2-placeholder").select2({placeholder:"Select a state",allowClear:!0}),r(".select2-icons").select2({minimumResultsForSearch:1/0,templateResult:s,templateSelection:s,escapeMarkup:function(e){return e}}),r(".select2-placeholder-multiple").select2({placeholder:"Select State"}),r(".hide-search").select2({minimumResultsForSearch:1/0}),r(".max-length").select2({maximumSelectionLength:2,placeholder:"Select maximum 2 items"});var a=r(".js-example-events");a.select2({placeholder:"DOM Events"}),a.on("select2:open",function(e){alert("Open Event Fired.")}),a.on("select2:close",function(e){alert("Close Event Fired.")}),a.on("select2:select",function(e){alert("Select Event Fired.")}),a.on("select2:unselect",function(e){alert("Unselect Event Fired.")}),a.on("change",function(e){alert("Change Event Fired.")});var c=r(".js-example-programmatic").select2(),l=r(".js-example-programmatic-multi").select2();l.select2({placeholder:"Programmatic Events"}),r(".js-programmatic-set-val").on("click",function(){c.val("CA").trigger("change")}),r(".js-programmatic-open").on("click",function(){c.select2("open")}),r(".js-programmatic-close").on("click",function(){c.select2("close")}),r(".js-programmatic-init").on("click",function(){c.select2()}),r(".js-programmatic-destroy").on("click",function(){c.select2("destroy")}),r(".js-programmatic-multi-set-val").on("click",function(){l.val(["CA","AL"]).trigger("change")}),r(".js-programmatic-multi-clear").on("click",function(){l.val(null).trigger("change")});function i(e,t){return 0===t.toUpperCase().indexOf(e.toUpperCase())}function o(e){return e.id?r('<span><img src="../../../app-assets/images/flags/'+e.element.value.toLowerCase()+'.png" class="img-flag" /> '+e.text+"</span>"):e.text}r(".select2-data-array").select2({data:[{id:0,text:"enhancement"},{id:1,text:"bug"},{id:2,text:"duplicate"},{id:3,text:"invalid"},{id:4,text:"wontfix"}]}),r(".select2-data-ajax").select2({placeholder:"Loading remote data",ajax:{url:"http://api.github.com/search/repositories",dataType:"json",delay:250,data:function(e){return{q:e.term,page:e.page}},processResults:function(e,t){return t.page=t.page||1,{results:e.items,pagination:{more:30*t.page<e.total_count}}},cache:!0},escapeMarkup:function(e){return e},minimumInputLength:1,templateResult:function(e){if(e.loading)return e.text;var t="<div class='select2-result-repository clearfix'><div class='select2-result-repository__avatar'><img src='"+e.owner.avatar_url+"' /></div><div class='select2-result-repository__meta'><div class='select2-result-repository__title'>"+e.full_name+"</div>";e.description&&(t+="<div class='select2-result-repository__description'>"+e.description+"</div>");return t+="<div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='fa fa-code-branch mr-0'></i> "+e.forks_count+" Forks</div><div class='select2-result-repository__stargazers'><i class='fa fa-star mr-0'></i> "+e.stargazers_count+" Stars</div><div class='select2-result-repository__watchers'><i class='fa fa-eye mr-0'></i> "+e.watchers_count+" Watchers</div></div></div></div>"},templateSelection:function(e){return e.full_name||e.text}}),r(".select2-tags").select2({tags:!0}),r(".select2-tokenizer").select2({tags:!0,tokenSeparators:[","," "]}),r.fn.select2.amd.require(["select2/compat/matcher"],function(e){r(".select2-customize-result").select2({placeholder:"Search by 'a'",matcher:e(i)})}),r(".select2-language").select2({language:"es"}),r(".select2-rtl").select2({placeholder:"RTL Select",dir:"rtl"}),r(".select2-diacritics").select2({placeholder:"Type 'aero'"}),r(".select2-theme").select2({placeholder:"Classic Theme",theme:"classic"}),r(".select2-templating").select2({templateResult:o,templateSelection:o}),r(".select2-size-lg").select2({containerCssClass:"select-lg"}),r(".select2-size-sm").select2({containerCssClass:"select-sm"}),r(".select2-size-xs").select2({containerCssClass:"select-xs"}),r(".select2-bg").each(function(e,t){var s="",a="",c=r(this).data("bgcolor");s=r(this).data("bgcolor-variation"),""!==(a=r(this).data("text-variation"))&&(a=" "+a),""!==s&&(s=" bg-"+s);var l="bg-"+c+s+" "+r(this).data("text-color")+a+" border-"+c+" border-darken-2 ";r(this).select2({containerCssClass:l})}),r(".select2-border").each(function(e,t){var s="",a="",c=r(this).data("border-color");""!==(a=r(this).data("text-variation"))&&(a=" "+a),""!==(s=r(this).data("border-variation"))&&(s=" border-"+s);var l="border-"+c+" "+s+" "+r(this).data("text-color")+a;r(this).select2({containerCssClass:l})}),r(".select2-menu-bg").each(function(e,t){var s="",a="",c=r(this).data("bgcolor");""!==(s=r(this).data("bgcolor-variation"))&&(s=" bg-"+s),""!==(a=r(this).data("text-variation"))&&(a=" "+a);var l="bg-"+c+s+" "+r(this).data("text-color")+a+" border-"+c+" border-darken-2 ";r(this).select2({dropdownCssClass:l})}),r(".select2-full-bg").each(function(e,t){var s="",a="",c=r(this).data("bgcolor");""!==(s=r(this).data("bgcolor-variation"))&&(s=" bg-"+s),""!==(a=r(this).data("text-variation"))&&(a=" "+a);var l="bg-"+c+s+" "+r(this).data("text-color")+a+" border-"+c+" border-darken-2 ";r(this).select2({containerCssClass:l,dropdownCssClass:l})}),r("select[data-text-color]").each(function(e,t){var s,a=r(this).data("text-color");""!==(s=r(this).data("text-variation"))&&(s=" "+s),r(this).next(".select2").find(".select2-selection__rendered").addClass(a+s)})}(window,document,jQuery);