// $(document).ready(function(){
//     $("#sl").hide(1000);
// });


$("#btn1").hover(function(){
    $("#status").text("Create a New Report");
}).mouseleave(function(){
    $("#status").text(". . .");
}).click(function(){
    window.location.assign("cr.php"); 
});

$("#btn2").hover(function(){
    $("#status").text("View Saved Reports");
}).mouseleave(function(){
    $("#status").text(". . .");
}).click(function(){
    window.location.assign("sr.php"); 
});

$("#btn3").hover(function(){
    $("#status").text("Print a Report");
}).mouseleave(function(){
    $("#status").text(". . .");
}).click(function(){
    window.location.assign("pr.php"); 
});

$("#btn4").hover(function(){
    $("#status").text("Export to (Excel, Txt etc)");
}).mouseleave(function(){
    $("#status").text(". . .");
}).click(function(){
    window.location.assign("er.php"); 
});

$("#btn5").hover(function(){
    $("#status").text("View Help");
}).mouseleave(function(){
    $("#status").text(". . .");
}).click(function(){
    window.location.assign("help.php");
});

$("#reportName").hover(function(){
    $("#status").text("Enter the Name of the Table");
}).mouseleave(function(){
    $("#status").text(". . .");
}).keydown(function(){
   $("#ern").css({display:"none"});
});

$("#l1,#l2,#l3,#l4,#l5,#l6,#l7").hover(function(){
    $("#status").text("Select one or more Tables that is needed");
}).mouseleave(function(){
    $("#status").text(". . .");
});


var T1 = document.getElementById('t1');
var T2 = document.getElementById('t2');
var T3 = document.getElementById('t3');
var T4 = document.getElementById('t4');
var T41 = document.getElementById('t41');
var T42 = document.getElementById('t42');
var T43 = document.getElementById('t43');
var T5 = document.getElementById('t5');
var setCustom = false;


$("#btnNext").hover(function(){
    $("#status").text("Proceed to the Next Step . . ");
}).mouseleave(function(){
    $("#status").text(". . .");
}).click(function(){
    var rn = $("#reportName").val();
  if (rn == "" || rn ==" " || rn == null) {
   $("#ern").css({display:"block"});
  }
   if (T1.checked == false && T2.checked == false && T3.checked == false && T4.checked == false && T41.checked == false && T42.checked == false && T43.checked == false && T5.checked == false) {
    $("#ern2").css({display:"block"});
  }
  if ((rn.length > 0 && rn != " ") && (T1.checked == true || T2.checked == true || T3.checked == true || T4.checked == true || T41.checked == true || T42.checked == true || T43.checked == true || T5.checked == true)) {
   $("#rnText").text(rn);
   // $("#pt1").hide(1000);
   $("#pt1").css({display:"none"});
   $("#pt2").css({display:"block"});
   if (T1.checked == true) {
    var tb1 = document.createElement("span");
    tb1.innerHTML = "Offering";
    $("body").append(tb1)
   }
  }
});


$("#t1,#t2,#t3,#t4,#t5,#t41,#t42,#t43").click(function(){
     $("#ern2").css({display:"none"});
});

$("#t5").click(function(){
    if (setCustom == false) {
        $("#sl").css({display:"none"}); 
        setCustom = true;
    }
    if (setCustom == true) {
      $("#sl").css({display:"flex"}); 
      setCustom = false;
    }
});


$("#textCustom").hover(function(){
    $("#status").text("Add a Custom Table . . ");
}).mouseleave(function(){
    $("#status").text(". . .");
});

$("#setCt").click(function(){
    var cn = $('#customName').val();
  if (cn == "" || cn == " " || cn == null) {
    $("#ern3").css({display:"block"});
  }else{
    $("#textCustom").text(cn,function(){});
    $("#sl").removeClass("d-flex");
    $("#sl").hide();
    setCustom = false;
  }
})

$("#customName").keydown(function(){
  $("#ern3").css({display:"none"});  
});


$("#l1").hover(function(){
    $("#status").text("Hello . . ");
}).mouseleave(function(){
    $("#status").text(". . .");
});

