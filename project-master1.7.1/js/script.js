$( document ).ready(function() {
    console.log( "ready!" );

    $('.delete-content').html("");

    $("a[href=#menuExpand]").click(function(e) {
        $(".collapse").toggleClass("menuOpen");
        $(".hamburger-icon").toggleClass("hide-icon");
        $(".cancel-icon").toggleClass("show-icon");
        console.log("OPEN");
        e.preventDefault();
    });

    $("#manage-button").click(function() {

    	$(".manage-menu").toggle();
    	$("#manage-button").toggleClass("active-dropdown");
    	console.log("test");

    });

    $("#logout-button").click(function() {

    	$(".logout-menu").toggle();
    	$("#logout-button").toggleClass("active-dropdown");
    	console.log("test");

    });

    $( ".next" ).click(function(e) {
        id = $(this).attr('id');
        userID = $(this).attr('userID');
        vraagID = $(this).attr('vraagID');

        $("." + vraagID).fadeOut('slow', function() {
            $("." + vraagID).html("<p>Plus 1coin!</p>");
            $("." + vraagID).fadeIn();
        });
        e.preventDefault();

        $(".next").click(addOne(id));
        $(".next").click(addCoin(userID));
        $(".next").click(addUser(userID, vraagID));
        console.log('clicked');
    });
                       
    function addOne(id) {
        $.get('antwoord/'+id);
        console.log('addone');
    }

    function addCoin(userID) {
        $.get('antwoord/coin/'+userID);
        console.log('coin');
    }

    function addUser(userID, vraagID) {
        $.get('antwoord/'+userID+'/'+vraagID);
        console.log('user');
    }


});