$(document).ready(function(){
    $(".news-logo-1").click(function(){
      
        $(".news-detail-1").removeClass("hidden");
        $(".news-detail-2").addClass("hidden");
        $(".news-detail-3").addClass("hidden");        
    });
    $(".news-logo-2").click(function(){
        $(".news-detail-2").removeClass("hidden");
        $(".news-detail-1").addClass("hidden");
        $(".news-detail-3").addClass("hidden");       
    });
    $(".news-logo-3").click(function(){
        $(".news-detail-3").removeClass("hidden");
        $(".news-detail-1").addClass("hidden");
        $(".news-detail-2").addClass("hidden");        
    });
 });

