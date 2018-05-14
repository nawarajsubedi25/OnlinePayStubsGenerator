$(document).ready(function() {
	var max_fields = 6;
	//maximum input boxes allowed
	var wrapper = $(".input_fields_wrap");
	//Fields wrapper
	var add_button = $(".add_field_button");
	//Add button ID
	//initlal text box count
	var counter = 1;
	$(add_button).click(function(e) {//on add input button click
		e.preventDefault();
		if (counter > 5) {
			var summaryPanel = document.getElementById('alertMessage');
			summaryPanel.innerHTML = "Only 6 deduction items allowed";
			return false;
		}
		if (counter < max_fields) {//max input box allowed
			counter++;
			//text box increment
			$(wrapper).append('<div class="form-group"> <div class="col-xs-6"><input type="text" class="form-control" name="deductionName' + counter + '" id="deductionName' + counter + '"placeholder="ex. Income tax, union dues, life insurance, etc" /></div><div class="col-xs-3"><input type="text" class="form-control" name="deductionAmount' + counter + '" id="deductionAmount' + counter + '" placeholder="Deduction amount" onkeyup="Calculator()"/></div><a href="#" class="remove_field"><i class="fa fa-trash-o" id="remove_field" style="font-size:48px;color:red"></i></a></div>');
			//add input box
		}
	});
	//user click on remove text
	$(wrapper).on("click", ".remove_field", function(e) {
		e.preventDefault();
		$(this).parent('div').remove();
		counter--;
		// Called Calculator function to make changes
		Calculator();
	})
});

function Calculator() {
	var grossIncome = 0;
	var deductionAmount1 = 0;
	var deductionAmount2 = 0;
	var deductionAmount3 = 0;
	var deductionAmount4 = 0;
	var deductionAmount5 = 0;
	var deductionAmount6 = 0;

	grossIncome = document.getElementById("grossIncome").value;
	if (document.getElementById("deductionAmount1") !== null) {
		deductionAmount1 = document.getElementById("deductionAmount1").value;
	}
	if (document.getElementById("deductionAmount2") !== null) {
		deductionAmount2 = document.getElementById("deductionAmount2").value;
	}
	if (document.getElementById("deductionAmount3") !== null) {
		deductionAmount3 = document.getElementById("deductionAmount3").value;
	}
	if (document.getElementById("deductionAmount4") !== null) {
		deductionAmount4 = document.getElementById("deductionAmount4").value;
	}
	if (document.getElementById("deductionAmount5") !== null) {
		deductionAmount5 = document.getElementById("deductionAmount5").value;
	}
	if (document.getElementById("deductionAmount6") !== null) {
		deductionAmount6 = document.getElementById("deductionAmount6").value;
	}
	$('#netPayAmount').val(grossIncome - deductionAmount1 - deductionAmount2 - deductionAmount3 - deductionAmount4 - deductionAmount5 - deductionAmount6);
	$("#netPayAmount").css("background-color", "#c4ad2b");
}


$(document).ready(function() {

	$('#employeeForm').bootstrapValidator({
		container : 'popover',
		feedbackIcons : {
			valid : 'glyphicon glyphicon-ok-circle',
			invalid : 'glyphicon glyphicon-remove-circle',
			validating : 'glyphicon glyphicon-refresh'
		},
		fields : {
			companyName : {
				group : '.col-xs-5',
				validators : {
					notEmpty : {
						message : "Enter your username."
					},
				}
			},
			firstName : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The first name is required'
					},
					regexp : {
						regexp : /^[a-zA-Z\s]+$/,
						message : 'The first name can only consist of alphabetical and space'
					}
				}
			},
			middleName : {
				group : '.col-xs-3',
				validators : {
					regexp : {
						regexp : /^[a-zA-Z\s]+$/,
						message : 'The middle name can only consist of alphabetical and space'
					}
				}
			},
			lastName : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The last name is required'
					},
					regexp : {
						regexp : /^[a-zA-Z\s]+$/,
						message : 'The last name can only consist of alphabetical and space'
					}
				}
			},
			streetAddress : {
				group : '.col-xs-6',
				validators : {
					stringLength : {
						min : 4,
					},
					notEmpty : {
						message : 'Please supply your stree Address'
					}
				}
			},
			companytStreetAddress : {
				group : '.col-xs-6',
				validators : {
					stringLength : {
						min : 4,
					},
					notEmpty : {
						message : 'Please supply your stree Address'
					}
				}
			},
			cityName : {
				group : '.col-xs-3',
				validators : {
					stringLength : {
						min : 4,
					},
					notEmpty : {
						message : 'Please supply your city'
					}
				}
			},
			companyCityName : {
				group : '.col-xs-3',
				validators : {
					stringLength : {
						min : 4,
					},
					notEmpty : {
						message : 'Please supply your city'
					}
				}
			},
			stateName : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The state is required and can\'t be empty'
					}
				}
			},
			companyStateName : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The state is required and can\'t be empty'
					}
				}
			},
			zipCode : {
				group : '.col-xs-3',
				validators : {
					stringLength : {
						min : 4,
					},
					zipCode : {
						country : 'US',
						message : 'The input is not a valid US zip code'
					}
				}
			},
			companyZipCode : {
				group : '.col-xs-3',
				validators : {
					stringLength : {
						min : 4,
					},
					zipCode : {
						country : 'US',
						message : 'The input is not a valid US zip code'
					}
				}
			},
			einNumber : {
				group : '.col-xs-2',
				validators : {
					notEmpty : {
						message : 'The job-title is required'
					},
					integer : {
						message : 'The value is not an integer'
					},
					stringLength : {
						min : 5,
						max : 5,
						message : 'Employee Id should be 5 digit number'
					}
				}
			},
			employeeId : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The job-title is required'
					},
					integer : {
						message : 'The value is not an integer'
					},
					stringLength : {
						min : 5,
						max : 5,
						message : 'Employee Id should be 5 digit number'
					}
				}
			},
			phoneNo : {
				group : '.col-xs-2',
				validators : {
					digits : {
						message : 'The phone number can contain digits only'
					},
					notEmpty : {
						message : 'The phone number is required'
					},
					phone : {
						message : 'The input is not a valid US phone number',
						country : 'US'
					}
				}
			},
			jobTitle : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The job-title is required'
					},
					regexp : {
						regexp : /^[a-zA-Z\s]+$/,
						message : 'The job title can only consist of alphabetical and space'
					}
				}
			},
			countryName : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The country is required and can\'t be empty'
					}
				}
			},
			companyCountryName : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The country is required and can\'t be empty'
					}
				}
			},
			payStart : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The pay start day is required and can\'t be empty'
					},
					date : {
						format : 'MM/DD/YYYY'
					}
				}
			},
			payDay : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The pay day is required and can\'t be empty'
					},
					date : {
						format : 'MM/DD/YYYY',
						message : 'The pay day is not valid'
					}
				}
			},
			grossIncome : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The enter the total gross income'
					},
					numeric : {
						message : 'The value is not a number',
						// The default separators
						thousandsSeparator : '',
						decimalSeparator : '.'
					}
				}
			},
			totalHour : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The enter the total hour you worked'
					},
					numeric : {
						message : 'The value is not a number',
						// The default separators
						thousandsSeparator : '',
						decimalSeparator : '.'
					}
				}
			},
			hourRate : {
				group : '.col-xs-3',
				validators : {
					notEmpty : {
						message : 'The enter the hour rate'
					},
					numeric : {
						message : 'The value is not a number',
						// The default separators
						thousandsSeparator : '',
						decimalSeparator : '.'
					}
				}
			},
			checkNumber : {
				group : '.col-xs-3',
				validators : {
					integer : {
						message : 'The value is not an integer'
					}
				}
			},
			netPay : {
				group : '.col-xs-6',
				validators : {
					notEmpty : {
						message : 'Amount in Letter'
					},
					stringLength : {
						max : 80,
						message : 'The message must be less than 700 characters long'
					}
				}
			},
		}
	})

	// Enable submit button all the time
	.on('status.field.bv', function(e, data) {
		// $(e.target)  --> The field element
		// data.bv      --> The BootstrapValidator instance
		// data.field   --> The field name
		// data.element --> The field element

		data.bv.disableSubmitButtons(false);
	});

});
