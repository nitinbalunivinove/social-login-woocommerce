jQuery(document).ready(function($){
	$(document).on("click", ".navigation-tab-wrap a", function (){
        //alert( $(this).attr("href") );
        $(".navigation-tab-wrap a").removeClass('nav-tab-active');
        $(this).addClass("nav-tab-active");
        $(".snl-tab-content").hide();
        var selected_tab = $(this).attr("href");
        $(selected_tab).show();
        var selected    = selected_tab.split('-');
        var clickedTab  = selected[0].replace("#",'');

        $(".snl-tab-content").removeClass('woo-slg-selected-tab');
        $('#snl_selected_tab').val( clickedTab );
        return false;
    });
});