 $(document).ready(function(){
    var res=0;
       $("#sum").click(function() {
        
    var num1 = $("#num1").val();
    var num2 = $("#num2").val();
    $.ajax({
        type: "POST",
        url: "process.php",
        data: {
            num1: num1,
            num2: num2
        },
        
   
        async: false,
        success: function(ajaira) {
          //  alert(ajaira);
          // $("#msg").html("success");
          //result=data;
         // console.log(data);
           $("#response").text(ajaira);
         // res=ajaira;
        }
    });
    
    // $("#response").text(res);
   // document.getElementById("response").innerHTML = res;
});

});

    