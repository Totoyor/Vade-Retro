

$(document).ready(function () {
    
    
    $("#picto1").hide();
    $('#picto1').fadeIn(2000);
    
    $("#picto2").hide();
    $('#picto2').fadeIn(2400);
    
    $("#picto3").hide();
    $('#picto3').fadeIn(2800);
    
    $("#encar").animate ({
        left: ""
    },
        {queue:false,duration:500}
                           
    
                          );
    
	 
    
    /***
    $(".mention").mousemove(function( event ) {
      var pageC = "( " + event.pageX + ", " + event.pageY + " )";
      var sourisC = "( " + event.clientX + ", " + event.clientY + " )";
      console.log("coordonees page = "+pageC);
      console.log("coordonees souris = "+sourisC);
      
    $(".partiBas").hide();
    $('.partiBas').fadeIn(300);


    });***/
    
    /***
    
    $(".prix").mousemove(function( event ) {
      var pageC = "( " + event.pageX + ", " + event.pageY + " )";
      var sourisC = "( " + event.clientX + ", " + event.clientY + " )";
      console.log("coordonees page = "+pageC);
      console.log("coordonees souris = "+sourisC);
      
    $(".partiBas").hide();
    $('.partiBas').fadeIn(300);


    }); ***/

    
    $(".jvconsole")
		.css({
		"opacity" : "1",
		})
    
      
  
  
    
   /** $("#lien")
		.css({
		"text-decoration" : "overline",
		})***/
    

    
 	
$("#action_resptrick").hide(); 

$(".menu_resp").hide();

 
    
$('#action_resp').click(function (){
        
    
    $('#action_resptrick').fadeIn();
        $('.menu_resp').fadeIn(500);
    
    
    });
    
    
    
$('#action_resptrick').click(function (){
        
        $("#action_resptrick").hide();
    $(".menu_resp").hide();
    });
    


    
   
    
    /***var onClick = 0
    
    function clicked()
    {
        if (onClick)
        {
             $('.menu_resp').fadeIn(500);
            onClick = 0;
        }
        else
        {
             $('.menu_resp').hide(500);
            onClick = 1;
        }
    }
    
    $("#action_resp").click(function() { clicked(); )); ***/ 

});