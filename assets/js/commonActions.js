$(document).ready(function() {

    $(".navShowHide").click(function() {
        // console.log("hello");
        var main = $("#mainSectionContainer");
        var nav = $("#sideNavContainer");

        if(main.hasClass("leftPadding")) {
            nav.hide();
        } else {
            nav.show();
        }

        main.toggleClass("leftPadding");
    });
});