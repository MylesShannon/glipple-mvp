// window.onload = loadXMLDoc('index');

$(document).ready(function() {	
	//dynamic tab loading
	//load index by default
	content('index');
	//load tab on what is clicked
    $("#menu li a").click(function (event) {
        var page = event.target.id;
		content(page);
    });
	function content(page) {
		$.ajax({
			url: "/views/"+page+".php",
			context: document.body,
			success: function(result) {
				$("#filler").html(result);
			}
		});
	};
	
});

/*
function loadsearchresults(s)
{
	$.ajax({
        url: "/views/search.php?s="+s,
        context: document.body,
        success: function(result) {
            $("#filler").html(result);
        }	
    });

}
	function loadprofile(s)
{
	$.ajax({
        url: "/views/profile.php?id="+s,
        context: document.body,
        success: function(result) {
            $("#filler").html(result);
        }	
    });

}
*/