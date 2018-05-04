$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"> <div class="col-xs-6"><input type="text" class="form-control" name="deductionName" placeholder="ex. Income tax, union dues, life insurance, etc" /></div><div class="col-xs-3"><input type="text" class="form-control" name="deductionAmount" placeholder="Deduction amount"/></div><a href="#" class="remove_field"><i class="fa fa-trash-o" style="font-size:48px;color:red"></i></a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
