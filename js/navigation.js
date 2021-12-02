$(document).ready(function(){

if ($(window).width() <= 767){
		$("header ul li").toggle("fast");
		if($("#menu").text() == "☰"){
			$("#menu").text("🞬");
		}else{
			$("#menu").text("☰");
		}
	}

  /* function called when you click of the #menu */
 	$("#menu").click(function(){
      
		/* this if else to change the text in the #menu */
		if($("#menu").text() == "☰"){

			$("#menu").text("🞬");
		}else{

			$("#menu").text("☰");
		}
    
    	/* this function toggle the visibility of our "li" elements */
    	$("header ul li").toggle("fast");

    	
  	});
});

$(document).ready(function(){

if ($(window).width() <= 991){
		$(".sidebar ul li").toggle("fast");
		if($("#menu-sidebar").text() == "☰"){
			$("#menu-sidebar").text("🞬");
		}else{
			$("#menu-sidebar").text("☰");
		}
	}

  /* function called when you click of the #menu-sidebar */
 	$("#menu-sidebar").click(function(){
      
		/* this if else to change the text in the #menu-sidebar */
		if($("#menu-sidebar").text() == "☰"){

			$("#menu-sidebar").text("🞬");
		}else{

			$("#menu-sidebar").text("☰");
		}
    
    	/* this function toggle the visibility of our "li" elements */
    	$(".sidebar ul li").toggle("fast");

    	
  	});
});