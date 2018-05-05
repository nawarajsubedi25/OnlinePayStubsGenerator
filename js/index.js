$(document).ready(function() {
    var max_fields      = 6; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var counter = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(counter>5){
         	var summaryPanel = document.getElementById('alertMessage');
				summaryPanel.innerHTML = "Only 5 deduction items allowed";
            return false;
     	}  
        if(counter < max_fields){ //max input box allowed
            counter++; //text box increment
            $(wrapper).append('<div class="form-group"> <div class="col-xs-6"><input type="text" class="form-control" name="deductionName' + counter + '" id="deductionName' + counter + '"placeholder="ex. Income tax, union dues, life insurance, etc" /></div><div class="col-xs-3"><input type="text" class="form-control" name="deductionAmount' + counter + '" id="deductionAmount' + counter + '" placeholder="Deduction amount" onkeyup="showHint(this.value)"/></div><a href="#" class="remove_field"><i class="fa fa-trash-o" id="remove_field" style="font-size:48px;color:red"></i></a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); counter--;
        showHint();
    })
});


function showHint() {
    var grossIncome=0;
    var deductionAmount1=0;
    var deductionAmount2=0;
    var deductionAmount3=0;
    var deductionAmount4=0;
    var deductionAmount5=0;
    var deductionAmount6=0;
    
    grossIncome= document.getElementById("grossIncome").value;
    if (document.getElementById("deductionAmount1")!==null)
    {
    deductionAmount1=document.getElementById("deductionAmount1").value;
    }
     if (document.getElementById("deductionAmount2")!==null)
    {
    deductionAmount2=document.getElementById("deductionAmount2").value;
    }
     if (document.getElementById("deductionAmount3")!==null)
    {
    deductionAmount3=document.getElementById("deductionAmount3").value;
    }
     if (document.getElementById("deductionAmount4")!==null)
    {
    deductionAmount4=document.getElementById("deductionAmount4").value;
    }
     if (document.getElementById("deductionAmount5")!==null)
    {
    deductionAmount5=document.getElementById("deductionAmount5").value;
    }
     if (document.getElementById("deductionAmount6")!==null)
    {
    deductionAmount6=document.getElementById("deductionAmount6").value;
    }
    $('#netPayAmount').val(grossIncome-deductionAmount1-deductionAmount2-deductionAmount3-deductionAmount4-deductionAmount5-deductionAmount6);
     $("#netPayAmount").css("background-color","#c4ad2b");
}