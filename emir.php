<!DOCTYPE html>
<?php
  error_reporting(0);

?>

	<!DOCTYPE html>
<?php

 include("connect.php");
?>
<html lang="en" class="">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>India Money
	</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300italic,400,600,700%7COpen+Sans:300,300italic,400,600%7CRoboto:100,300,500,700,900%7CArimo" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/layout.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/elements.css">
    <link rel="stylesheet" href="css/charts.css">
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/pricing.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/subpage.css">
    <link rel="stylesheet" href="css/effects.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/options.css">
		
	<link href="lib/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="lib/style.css" />
    
    
</head>
<body class="page-" onload="script();" >

<script language="javascript" type="text/JavaScript">
function clearval(docname) {
docname.txtLoanAmount.value="";
docname.txtInterestRate.value="";
docname.txtPeriod.value="";
docname.resultemi.value="";
docname.tmp.value="";
docname.tip.value="";
docname.Selectopt.selectedIndex=0;
docname.txtLoanAmount.focus();
return false;
}
function checkval(docname){

var i;
var getval=docname.value;
var count_deci=0;
var flag=0;


for(i=0;i<getval.length;i=i+1) {
if((getval.charAt(i) >= "0" && getval.charAt(i) <= "9") || (getval.charAt(i) == ".")) {

if(getval.charAt(i) == ".") {
count_deci=count_deci+1;

if(getval.charAt(i+1)=="") {
alert("Wrong entry");
docname.amt.value="";
docname.amt.focus();
flag=1;
break;
}
}

if(count_deci>1) {
alert("Illegal Data");
docname.amt.value="";
docname.amt.focus();
flag=1;
break;
}
}
else {
alert("Invalid Entry");
docname.value="";
docname.focus();
flag=1;
break;
}
}
}


function CalculateValue(docname) {
subflag = true;

if(subflag) {

var LoanA,IntR,TimeP;
var TypeOfLoan;
var Multiplier,numerator,denominator;
var EMI;

LoanA=docname.txtLoanAmount.value;
IntR=docname.txtInterestRate.value;
TimeP=docname.txtPeriod.value;
TypeOfLoan=docname.Selectopt.value;

if(TypeOfLoan=="Monthly")

Multiplier=12;
else
Multiplier=1;


numerator=LoanA*Math.pow((1+IntR/(Multiplier*100)),TimeP*Multiplier);

denominator=100*Multiplier*((Math.pow((1+IntR/(Multiplier*100)),TimeP*Multiplier)-1)/IntR);

if(TypeOfLoan=="Monthly")

EMI=12*(numerator/(denominator*12));
else
EMI=numerator/denominator;

var emi,emiv;
var x,z,y;
emi=Math.round(EMI);
emiv=docname.resultemi.value=emi;
// alert(LoanA);
 z=emiv*(TimeP*12)

x=docname.tmp.value=z;
y=parseInt(LoanA)+x;
docname.tip.value=y;
return false;
}

}

</script>
<div class="container-fluid">
<div class="col-sm-3 offsets-9">
<h3>SIP Need Calculator to Recover EMI</h3>
<form name="frmEMI" method="post" class="form-horizontal" >
<div class="form-group">
<label class="control-label" >Amount to be accumulated (Rs.)</label>
<input type="text" class="form-control" name="txtLoanAmount" onblur="checkval(document.frmEMI.txtLoanAmount)" size="17">

<label class="control-label" >Rate of return (%)</label>

<input type="text" class="form-control" name="txtInterestRate" onblur="checkval(document.frmEMI.txtInterestRate)" size="17">

<label class="control-label" >Tenure(years)</label>
<td align="left"><input type="text" class="form-control" name="txtPeriod" onblur="checkval(document.frmEMI.txtPeriod)" size="17">
<br>
<input type="hidden" name="Selectopt" value="Monthly">
<a href="" onclick="return CalculateValue(document.frmEMI);">

<input class="btn btn-primary" type="button" name="Submit" value="Calculate" alt="Calculate"></a>&nbsp;&nbsp;
<a href="" onclick="return(clearval(document.frmEMI))">

<input type="button" name="Submit" value="Clear" alt="Clear All" class="btn btn-danger"></a>


<br>
<label class="control-label" >SIP Required</label>
<input type="text" class="form-control" name="resultemi" size="10" readonly style="BACKGROUND-COLOR='#ffffCC'" /></label>


<label class="control-label" >Total amount invested </label>
<input type="text" class="form-control" name="tmp" size="10" readonly style="BACKGROUND-COLOR='#ffffCC'" /></label>

<label class="control-label" >Growth in investment</label>
<input type="text" class="form-control" name="tip" size="10" readonly style="BACKGROUND-COLOR='#ffffCC'" /></label>


<br>


</div>
</form>
</div>
</div>
	<script src="lib/jquery-1.10.2.min.js"></script>
    <script data-cfasync="false" src="../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="../../npmcdn.com/imagesloaded%404.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/timeline.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/effects.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/progressive-parallax.js"></script>
    <script src="js/youtube.js"></script>
    <script src="js/options.js"></script>
	
	
<script src="lib/switchable.js"></script> 
<script>
$(function(){
	switchable({
		$element: $('#slides')
		,interval: 2000
		,animateSpeed: 500
		
	});
	switchable({
		$element: $('#slides1')
		,interval: 2000
		,effect: 'fade'
	});
	switchable({
		$element: $('#scroll_wrap')
		,interval: 2000
		,showNav: true
		//,effect: 'fade'
		,type: 'imgScroll'
		,imgScroll: {
			num: 2
		}
	});
});
</script>
	
	
		<script>
      window.onload=function myFunction() {
    var x = document.getElementById("myframe");
    var y = (x.contentWindow || x.contentDocument);
    if (y.document)y = y.document;
    y.body.style.backgroundColor = "red";
}
      
     
    </script>

	
</body>

<!-- Mirrored from themes.skylitedev.com/India Money/index-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 07:49:35 GMT -->
</html>













































