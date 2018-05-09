<html>
	<head>
			<?php 
    	if (isset($_POST["buttonPaystubs"]))
{
	 $companyName    = strtoupper($_POST['companyName']);
	 $companyStreetAddress=$_POST["companytStreetAddress"];
	 $companyCityName=ucwords($_POST["companyCityName"]);
	 $companyStateName=$_POST["companyStateName"];
	 $companyZipcode=$_POST["companyZipCode"];
	 $companyCountryName=$_POST["companyCountryName"];
	 $einNumber=$_POST["einNumber"];
	 $phoneNumber=$_POST["phoneNo"];
	 
	 $firstName=ucwords($_POST["firstName"]);
	 $lastName=ucwords($_POST["lastName"]);
	 $middleName=ucwords($_POST["middleName"]);
	 $streetAddress=ucwords($_POST["streetAddress"]);
	 $cityName=ucwords($_POST["cityName"]);
	 $stateName=$_POST["stateName"];
	 $zipCode=$_POST["zipCode"];
	 $countryName=$_POST["countryName"];
	 $ssn=$_POST["ssn"];
	 $jobTitle=ucwords($_POST["jobTitle"]);
	 $employeeId=$_POST["employeeId"];
	 
	 $payStart=$_POST["payStart"];
	 $payDay=$_POST["payDay"];
	 
	 $totalHour=$_POST["totalHour"];
	 $hourRate=$_POST["hourRate"];
	 $checkNumber=$_POST["checkNumber"];
	 $grossIncome=$_POST["grossIncome"];
	 $deductionName1=ucwords($_POST["deductionName1"]);
	 $deductionAmount1=$_POST["deductionAmount1"];
	  $deductionName2=ucwords($_POST["deductionName2"]);
	 $deductionAmount2=$_POST["deductionAmount2"];
	  $deductionName3=ucwords($_POST["deductionName3"]);
	 $deductionAmount3=$_POST["deductionAmount3"];
	  $deductionName4=ucwords($_POST["deductionName4"]);
	 $deductionAmount4=$_POST["deductionAmount4"];
	  $deductionName5=ucwords($_POST["deductionName5"]);
	 $deductionAmount5=$_POST["deductionAmount5"];
	  $deductionName6=ucwords($_POST["deductionName6"]);
	 $deductionAmount6=$_POST["deductionAmount6"];
	 $totalDeduction=$deductionAmount1+$deductionAmount2+$deductionAmount3+$deductionAmount4+$deductionAmount5+$deductionAmount6;
	 $netPay=ucwords($_POST["netPay"]);
	 $netPayAmount=$_POST["netPayAmount"];
	 
	 
	 
}
		?>
		<title> &nbsp;</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css" scoped>
			.innercontainer:not(.printt){
			margin: 0px 35px 0px 35px ;
			}
			table.GeneratedTable {
				width: 100%;
				background-color: #FFFFFF;
				border-collapse: collapse;
				border-width: 0px;
				border-color: white;
				color: black;
			}

			table.GeneratedTable td {
				padding-left: 14px;
			}
			table.GeneratedTable th {
				padding: 5px 3px 5px 14px;
			}
			table.tableEnd {
				width: 35%;
				background-color: #FFFFFF;
				border-collapse: collapse;
				border-width: 1px;
				border-color: white;
				border-style: solid;
				color: darkblue;
				float: right;
			}
			table.tableEnd thead {
				background-color: #0c5add;
				color: white;
			}
			table.GeneratedTable thead {
				background-color: #0c5add;
				color: white;
			}
			table.tableEnd th {
				padding: 5px 3px 5px 14px;
				text-align: center;
			}
			tr.spaceUpper > td {
				padding-top: 0.5em;
			}
			.firstRow {
				margin-top: 0.5em;
				background-color: white;
			}

			.paystubday {
				text-align: right;
				top: 3em;
			}
			.secondRow {
				border: 1px;
				margin-top: 1em;
				padding: 2em 1em 0.5em 0em;
				background-color: #c3d8fa;
				color: #333333;
			}
			.amountcheck {
				margin-left: 3em;
				font-weight: 900;
			}
			.salarynumber {
				text-align: right;
			}
			.thisisnotcheque {
				color: #edf0f5;
			}
			.thirdRow {
				background-color: #ffffff;
				padding: 2em 1em 1em 0em;
			}
			.paytotheorderof {
				color: #cccccc;
			}
			.earningStatement {
				color: #0c5add;
				text-align: right;
				margin-top: 2em;
				font-weight: 900;
			}
			.employeeAddress {
				text-align: center;
				font-weight: 400;
			}
			.outfit {
				border: 2px solid #eff0f1;
				margin: 0.5em 7em 2em 7em;
				-moz-box-shadow: 0px 0px 8px 2px #d1d1d1;
				-webkit-box-shadow: 0px 0px 8px 2px #d1d1d1;
				background: #ffffff;
				border: 1px solid #f0f0f0;
				box-shadow: 0px 0px 8px 2px #d1d1d1;
				color: #777;
				border-top-left-radius: 0px;
				border-top-right-radius: 0px;
				border-bottom-right-radius: 10px;
				border-bottom-left-radius: 6px;
				overflow: hidden;
			}

			.print a {
				position: absolute;
				border: 1px solid black;
				background-color: blue;
				color: #fff;;
				padding: 0px 3px 0px 3px;
				margin-left: 0em;
			}

			@media print {
				.print a {
					display: none;
				}
				.outfit {
					border: none;
					margin: 0em 0em 0em 0em;
				}
				.salarynumber {
					text-align: right;
					top: -2em;
				}
				.paystubday {
					text-align: right;
					top: -1em;
				}
				.earningStatement {
					text-align: right;
					top: -7em;
					font-weight: 900;
					color: #0c5add !important;
					-webkit-print-color-adjust: exact;
				}
				.forthRow {
					margin-bottom: -4em;
				}
				.firstRow {
					margin-bottom: -1em;
				}
				.secondRow {
					margin-bottom: -1em;
				}
				.employeeAddress {
					top: -1em;
					left: -4em;
				}
			}
			@media print {
				table.GeneratedTable thead {
					background-color: #0c5add !important;
					-webkit-print-color-adjust: exact;
					font-size: 13px;
				}
				table.tableEnd thead {
					background-color: #0c5add !important;
					-webkit-print-color-adjust: exact;
					font-size: 13px;
				}
				.secondRow {
					background-color: #c3d8fa !important;
					-webkit-print-color-adjust: exact;
				}
			}
			@media print {
				.GeneratedTable th {
					color: white !important;
				}
				.GeneratedTable td {
					font-size: 12px;
				}
				.tableEnd th {
					color: white !important;
				}
				.printStyle {
					margin-top: 9em;
				}
				.background {
					border: 0.5px solid black;
					padding: 0.2em;
				}
			}

		</style>
	</head>
	<body class="background">
		<div class="container-fluid outfit">
			<div class="innercontainer printt">
				<div class="row print">
					<a href='javascript:window.print();'>Print</a>
				</div>
			</div>
			<div class="innercontainer">
				<div class="row firstRow">
					<div class="col-sm-8 employeeName">
							<?php echo $companyName;?>
						<br>
							<?php echo $companyStreetAddress;?>
						<br>
							<?php echo $companyCityName.", ".$companyStateName." ".$companyZipcode." ".$companyCountryName;?>
					</div>
					<div class="col-sm-4 paystubday">
					    	<?php 
					echo date_format(date_create($payDay),"F d, Y");
					?>
					</div>
				</div>
			</div>
			<div class="innercontainer">
				<div class="row secondRow">
					<div class="col-sm-8 SalaryAmount">
					    <?php echo $netPay ?>
					</div>
					<div class="col-sm-4 salarynumber">
						<div class="amountcheck">
							$<?php echo number_format( $netPayAmount,2);?>						
							</div class="thisisnotcheque">This is not a check
						</div>
					</div>
				</div>
				<div class="innercontainer">
					<div class="row thirdRow">
						<div class="col-sm-2 paytotheorderof">
							Pay to the order of
						</div>
						<div class="col-sm-2 employeeAddress" style="text-align: center;">
							<div style="display: inline-block; text-align: left;">
							    	<?php echo $firstName." ".$lastName;?>
								<br>
									<?php echo $streetAddress;?>
								<br>
									<?php echo $cityName.", ".$stateName." ".$zipCode." ".$countryName;?>
							</div>
						</div>
					</div>
				</div>
				<div class="innercontainer">
					<div class="row forthRow">
						<div class="col-sm-8 companyAddress">
							<b>Company Information</b>
							<br>
								<?php echo $companyName;?>
							<br>
								<?php echo $companyStreetAddress." ".$companyCityName.", ".$companyStateName." ".$companyZipcode." ".$companyCountryName;?>
							<br>
							PHONE: <?php echo $phoneNumber;?>
							<br>
							EIN:	<?php echo $einNumber;?>
						</div>
						<div class="col-sm-4 earningStatement">
							Earning Statement
						</div>
					</div>
				</div>

				<div class="innercontainer">
					<div class="row">
						<table class="GeneratedTable">
							<thead>
								<tr>
									<th>Employee Information</th>
									<th style="text-align:center;">Social Sec. ID</th>
									<th style="text-align:center;">Position</th>
									<th style="text-align:center;">Start Date</th>
									<th style="text-align:center;">End Date</th>
									<th style="text-align:center;">Check Date</th>
								</tr>
							</thead>
							<tbody>
								<tr class="spaceUpper">
									<td width="25%" style="padding-left:14px;">	<?php echo $firstName." ".$lastName;?>
										<br>
									<?php echo $streetAddress;?>
								<br>
									<?php echo $cityName.", ".$stateName." ".$zipCode." ".$countryName;?>
									</td>
									<td style="text-align:center;"><?php echo $ssn;?></td>
									<td style="text-align:center;"><?php echo $jobTitle;?></td>
									<td style="text-align:center;"><?php echo $payStart;?></td>
									<td style="text-align:center;"><?php echo $payDay;?></td></td>
									<td style="text-align:center;"><?php echo $payDay;?></td></td>
								</tr>
							</tbody>
					</div>
				</div>
				<div class="innercontainer" style="margin-bottom:1em;">
					<div class="row">
						<table class="GeneratedTable">
							<thead>
								<tr>
									<th width="16%">Earning</th>
									<th width="6%" style="text-align:center;">Rate</th>
									<th width="6%" style="text-align:center;">Hour</th>
									<th width="10%" style="text-align:center;">Current</th>
									<th width="13%" style="text-align:center;">Year to Date</th>
									<th width="21%">Dedutction</th>
									<th width="14%" style="text-align:center;">Current</th>
									<th width="14%"style="text-align:center;">Year to Date</th>
								</tr>
							</thead>
							<tbody>
								<tr class="spaceUpper">
									<td width="16%" style="background-color:#e6e8ec; padding-left:14px;" >Regural Earning</td>
									<td width="6%" style="text-align:center;"><?php echo number_format( $hourRate,2);?></td>
									<td width="6%" style="text-align:center;"><?php echo number_format($totalHour,2);?></td>
									<td width="10%" style="text-align:center;"><?php echo number_format($grossIncome,2);?></td>
									<td width="13%" style="text-align:center;"><?php echo number_format(12.00 * $grossIncome,2);?></td>
									<td width="21%" style="background-color:#e6e8ec;"><?php echo $deductionName1;?></td>
									<td width= "14%" style="text-align:center;"><?php if (!($deductionAmount1==null))
									{echo number_format($deductionAmount1,2);
									}
									else{echo '&nbsp';}?></td>
									<td width="14%" style="text-align:center;"><?php if (!($deductionAmount1==null))
									{echo number_format(12.00 * $deductionAmount1,2);
									}?></td>
								</tr>
								<tr>
									<td width="16%"style="background-color:#e6e8ec; padding-left:14px;"></td>
									<td width="6%"></td>
									<td width="6%"></td>
									<td width="10%"></td>
									<td width="13%"></td>
								    <td width="21%" style="background-color:#e6e8ec;"><?php echo $deductionName2;?></td>
									<td width= "14%" style="text-align:center;"><?php if (!($deductionAmount2==null))
									{echo number_format($deductionAmount2,2);
									}
									else{echo '&nbsp';}?></td>
									<td width="14%" style="text-align:center;"><?php if (!($deductionAmount2==null))
									{echo number_format(12.00 * $deductionAmount2,2);
									}?></td>
								</tr>
								<tr>
								<tr>
									<td width="16%" style="background-color:#e6e8ec; padding-left:14px;"></td>
									<td width="6%"></td>
									<td width="6%"></td>
									<td width="10%"></td>
									<td width="13%"></td>
									<td width="21%" style="background-color:#e6e8ec;"><?php echo $deductionName3;?></td>
									<td width= "14%" style="text-align:center;"><?php if (!($deductionAmount3==null))
									{echo number_format($deductionAmount3,2);
									}
									else{echo '&nbsp';}?></td>
									<td width="14%" style="text-align:center;"><?php if (!($deductionAmount3==null))
									{echo number_format(12.00 * $deductionAmount3,2);
									}?></td>
								</tr>
								<tr>
									<td width="16%"style="background-color:#e6e8ec; padding-left:14px;"></td>
									<td width="6%"></td>
									<td width="6%"></td>
									<td width="10%"></td>
									<td width="13%"></td>
									<td width="21%" style="background-color:#e6e8ec;"><?php echo $deductionName4;?></td>
									<td width= "14%" style="text-align:center;"><?php if (!($deductionAmount4==null))
									{echo number_format($deductionAmount4,2);
									}else{echo '&nbsp';}?></td>
									<td width="14%" style="text-align:center;"><?php if (!($deductionAmount4==null))
									{echo number_format(12.00 * $deductionAmount4,2);
									}?></td>
								</tr>
								<tr>
									<td width="16%"style="background-color:#e6e8ec; padding-left:14px;"></td>
									<td width="6%"></td>
									<td width="6%"></td>
									<td width="10%"></td>
									<td width="13%"></td>
									<td width="21%" style="background-color:#e6e8ec;"><?php echo $deductionName5;?></td>
									<td width= "14%" style="text-align:center;"><?php if (!($deductionAmount5==null))
									{echo number_format($deductionAmount5,2);
									}
									else{echo '&nbsp';}?></td>
									<td width="14%" style="text-align:center;"><?php if (!($deductionAmount5==null))
									{echo number_format(12.00 * $deductionAmount5,2)
									;}?></td>
								</tr>
								<tr>
									<td width="16%"style="background-color:#e6e8ec; padding-left:14px;"></td>
									<td width="6%"></td>
									<td width="6%"></td>
									<td width="10%"></td>
									<td width="13%"></td>
									<td width="21%" style="background-color:#e6e8ec;"><?php echo $deductionName6;?></td>
									<td width= "14%" style="text-align:center;"><?php if (!($deductionAmount6==null))
									{echo number_format($deductionAmount6,2);
									}
									else{echo '&nbsp';}?></td>
									<td width="14%" style="text-align:center;"><?php if (!($deductionAmount6==null))
									{echo number_format(12.00 * $deductionAmount6,2);}?></td>
								</tr>
							</tbody>
					</div>
				</div>
				<div class="innercontainer" style="margin-bottom:1em;">
					<div class="row">
						<table class="GeneratedTable">
							<thead>
								<tr>
									<th width="16%" style="padding-left:14px;">Gross Earning</th>
									<th width="6%" style="text-align:center; background-color:#e6e8ec; color:white;"></th>
									<th width="6%" style="text-align:center; background-color:#e6e8ec; color:white;"></th>
									<th width="10%" style="text-align:center; background-color:#e6e8ec; color:black;"><?php echo number_format($grossIncome,2);?></th>
									<th width="13%" style="text-align:center; background-color:#e6e8ec; color:black;"><?php echo number_format(12.00 * $grossIncome,2);?></th>
									<th width="21%">Gross Dedutctions</th>
									<th width="14%"style="text-align:center; background-color:#e6e8ec; color:black;"><?php echo number_format($totalDeduction,2);?></th>
									<th width="14%"style="text-align:center; background-color:#e6e8ec; color:black; "><?php echo number_format(12.00 * $totalDeduction,2);?></th>
								</tr>
							</thead>
					</div>
				</div>
				<div class="innercontainer printStyle" style="margin-bottom:0.5em;">
					<div class="row">
						<table class="tableEnd" style="margin-top:0.5em;">
							<thead>
								<tr>
									<th width="20%">Check No</th>
									<th class="lastth" width="20%" style="background-color:#d5e2f8; text-align:center; color:black">#<?php echo $checkNumber;?></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
				<div class="innercontainer">
					<div class="row">
						<table class="tableEnd">
							<thead>
								<tr>
									<th width="20%">Net Pay</th>
									<th class="lastth" width="20%" style="background-color:#d5e2f8; text-align:center; color:black">$<?php echo number_format( $netPayAmount,2);?></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
				<div class="innercontainer">
					<div class="row">
						<table class="tableEnd">
							<thead>
								<tr>
									<th width="20%">YTD Net Pay</th>
									<th class="lastth" width="20%" style="background-color:#d5e2f8; text-align:center; color:black" >$<?php echo number_format( 12.00* $netPayAmount,2);?></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
	</body>

</html>