function GetXmlHttpObject()
{
	if (window.XMLHttpRequest)
	  {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
	  return new XMLHttpRequest();
	  }
	if (window.ActiveXObject)
	  {
	  // code for IE6, IE5
	  return new ActiveXObject("Microsoft.XMLHTTP");
	  }
    return null;
}
function IsNumeric(strString) //  check for valid numeric strings	
{
 	if(!/\D/.test(strString)){
	 return true;//IF NUMBER
	}else if (/^\d+\.\d+$/.test(strString)){
	return true;//IF A DECIMAL NUMBER HAVING AN INTEGER ON EITHER SIDE OF THE DOT(.)
	}else{ 
	alert('Please Enter Numeric Values');
	 return false;
	}
}

function test4()
{
	xmlhttp9=GetXmlHttpObject();
	if (xmlhttp9==null)
	{
	  alert ("Browser does not support HTTP Request");
	  return;
	}
	var cage=document.getElementById("cage").value;
		if(cage == '' || cage == 0)
	{
	alert('Please Enter The "Child Current Age"');
	document.getElementById('cage').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(cage);
	  if(check == false){
	  document.getElementById('cage').style.border='1px solid #CC0000';
	  document.getElementById('cage').value='';
 	  return false;
	  }else{
	   document.getElementById('cage').style.border='';
 	  }
 	}
	var hedu=document.getElementById("hedu").value;
	if(hedu == '' || hedu == 0)
	{
	alert('Please Enter The "Age of Higher Education"');
	document.getElementById('hedu').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(hedu);
	  if(check == false){
	  document.getElementById('hedu').style.border='1px solid #CC0000';
	   document.getElementById('hedu').value='';
 	  return false;
	  }else{
	   document.getElementById('hedu').style.border='';
 	  }
 	}
	var hiedu=document.getElementById("hiedu").value;
	if(hiedu == '' || hiedu == 0)
	{
	alert('Please Enter The "Current Expenses In Education"');
	document.getElementById('hiedu').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(hiedu);
	  if(check == false){
	  document.getElementById('hiedu').style.border='1px solid #CC0000';
	   document.getElementById('hiedu').value='';
 	  return false;
	  }else{
	   document.getElementById('hiedu').style.border='';
 	  }
 	}
	var inf=document.getElementById("inf").value;
	if(inf == '' || inf == 0)
	{
	alert('Please Enter The "Expected Inflation Rate"');
	document.getElementById('inf').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(inf);
	  if(check == false){
	  document.getElementById('inf').style.border='1px solid #CC0000';
	  document.getElementById('inf').value='';
 	  return false;
	  }else{
	   document.getElementById('inf').style.border='';
 	  }
 	}
	var cedu=document.getElementById("cedu").value;
	if(cedu == '' || cedu == 0)
	{
	alert('Please Enter The "Expected Returns"');
	document.getElementById('cedu').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(cedu);
	  if(check == false){
	   document.getElementById('cedu').style.border='1px solid #CC0000';
	    document.getElementById('cedu').value=''
 	  return false;
	  }else{
	   document.getElementById('cedu').style.border='';
 	  }
 	}
 	var url="process_Education_calc.php?cage="+cage+"&hedu="+hedu+"&hiedu="+hiedu+"&inf="+inf+"&cedu="+cedu;
 	xmlhttp9.onreadystatechange=stateChanged_sendSMS4;
	xmlhttp9.open("GET",url,true);
	xmlhttp9.send(null);
	
}
function stateChanged_sendSMS4()
{
	if (xmlhttp9.readyState==4)
		{
			var res  = xmlhttp9.responseText.split("|");
			document.getElementById('eretn').value = res[0];
			document.getElementById('plum').value = res[1];
			document.getElementById('psip').value = res[2];
			document.getElementById('age').innerHTML = res[3];
		}
}


function lumpsum_calc()
{   
 
 	xmlhttp9=GetXmlHttpObject();
	if (xmlhttp9==null)
	{
	  alert ("Browser does not support HTTP Request");
	  return;
	}
	var amut=document.getElementById("amount").value;
	if(amut == '' || amut == 0)
	{
	alert('Please Enter The "Investment Amount"');
	 document.getElementById('amount').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(amut);
	  if(check == false){
	  document.getElementById('amount').style.border='1px solid #CC0000';
	  document.getElementById('amount').value='';
 	  return false;
	  }else{
	   document.getElementById('amount').style.border='';
 	  }
 	}

	var duration=document.getElementById("duration").value;
	if(duration == '' || duration == 0 )
	{
	alert('Please Enter The "Duration"');
	 document.getElementById('duration').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(duration);
	  if(check == false){
	   document.getElementById('duration').style.border='1px solid #CC0000';
	    document.getElementById('duration').value='';
 	  return false;
	  }else{
	   document.getElementById('duration').style.border='';
	   }
 	}
	var interest=document.getElementById("interest").value;
	if(interest == '' || interest == 0)
	{
	alert('Please Enter The "Interest Rate"');
	 document.getElementById('interest').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(interest);
	  if(check == false){
	   document.getElementById('interest').style.border='1px solid #CC0000';
	    document.getElementById('interest').value='';
 	  return false;
	  }else{
	   document.getElementById('interest').style.border='';
	   }
 	}
	
 	var url="process_lumpsum_calc.php?amut="+amut+"&duration="+duration+"&interest="+interest;
 	xmlhttp9.onreadystatechange=stateChanged_sendSMS5;
	xmlhttp9.open("GET",url,true);
	xmlhttp9.send(null);

}
function stateChanged_sendSMS5()
{
	if (xmlhttp9.readyState==4)
	{
	  document.getElementById('result').value = xmlhttp9.responseText;
	}
}

function test3()
{
	xmlhttp9=GetXmlHttpObject();
	if (xmlhttp9==null)
	{
	  alert ("Browser does not support HTTP Request");
	  return;
	}
	var cage=document.getElementById("cage").value;
	if(cage == '' || cage == 0)
	{
	alert('Please Enter The "Current Age"');
	document.getElementById('cage').style.border='1px solid #CC0000'
	return false;
	} else{
	  var check  = IsNumeric(cage);
	  if(check == false){
	   document.getElementById('cage').style.border='1px solid #CC0000';
	   document.getElementById('cage').value='';
 	  return false;
	  }else{
	   document.getElementById('cage').style.border='';
	   }
 	}
	var mage=document.getElementById("mage").value;
	if(mage == '' || mage == 0)
	{
	alert('Please Enter The "Expected Age At Marriage"');
	document.getElementById('mage').style.border='1px solid #CC0000'
	return false;
	} else{
	  var check  = IsNumeric(mage);
	  if(check == false){
	  document.getElementById('mage').style.border='1px solid #CC0000';
	  document.getElementById('mage').value='';
 	  return false;
	  }else{
	   document.getElementById('mage').style.border='';
	   }
 	}
	var cmexp=document.getElementById("cmexp").value;
	if(cmexp == '' || cmexp == 0)
	{
	alert('Please Enter The "Current Marriage Expenses"');
	 document.getElementById('cmexp').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(cmexp);
	  if(check == false){
	  document.getElementById('cmexp').style.border='1px solid #CC0000';
	  document.getElementById('cmexp').value='';
 	  return false;
	  }else{
	   document.getElementById('cmexp').style.border='';
	   }
 	}
	var inte=document.getElementById("inte").value;
	if(inte == '' || inte == 0)
	{
	alert('Please Enter The "Expected Inflation Rate"');
	 document.getElementById('inte').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(inte);
	  if(check == false){
	    document.getElementById('inte').style.border='1px solid #CC0000';
		document.getElementById('inte').value='';
 	  return false;
	  }else{
	   document.getElementById('inte').style.border='';
	   }
 	}
	var exret=document.getElementById("exret").value;
	if(exret == '' || exret == 0)
	{
	alert('Please Enter The "Expected Returns"');
	document.getElementById('exret').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(exret);
	  if(check == false){
	   document.getElementById('exret').style.border='1px solid #CC0000';
	   document.getElementById('exret').value='';
 	  return false;
	  }else{
	   document.getElementById('exret').style.border='';
	   }
 	}
 	var url="process_marriage_calc.php?cage="+cage+"&mage="+mage+"&cmexp="+cmexp+"&inte="+inte+"&exret="+exret;
 	xmlhttp9.onreadystatechange=stateChanged_sendSMS3;
	xmlhttp9.open("GET",url,true);
	xmlhttp9.send(null);
}
function stateChanged_sendSMS3()
{
	if (xmlhttp9.readyState==4)
	{
       var res  = xmlhttp9.responseText.split("|");
	  document.getElementById('taumt').value =res[0];
	  document.getElementById('tlum').value = res[1];
	  document.getElementById('tsip').value = res[2];
	  
	}
}
function test2()
{
	xmlhttp9=GetXmlHttpObject();
	if (xmlhttp9==null)
	{
	  alert ("Browser does not support HTTP Request");
	  return;
	}
	var cage=document.getElementById("cage").value;
	if(cage == '' || cage == 0)
	{
	alert('Please Enter The "Current Age"');
	document.getElementById('cage').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(cage);
	  if(check == false){
	  document.getElementById('cage').style.border='1px solid #CC0000';
	   document.getElementById('cage').value='';
 	  return false;
	  }else{
	   document.getElementById('cage').style.border='';
	   }
 	}
	var rage=document.getElementById("rage").value;
	if(rage == '' || rage == 0)
	{
	alert('Please Enter The "Age At Retirement "');
     document.getElementById('rage').style.border='1px solid #CC0000';
	 
 	return false;
	} else{
	  var check  = IsNumeric(rage);
	  if(check == false){
	  document.getElementById('rage').style.border='1px solid #CC0000';
	  document.getElementById('rage').value=''
 	  return false;
	  }else{
	   document.getElementById('rage').style.border='';
	   }
 	}
	var cme=document.getElementById("cme").value;
	if(cme == '' || cme == 0)
	{
	alert('Please Enter The "Current Monthly Expenses"');
	document.getElementById('cme').style.border='1px solid #CC0000';
	  
	return false;
	} else{
	  var check  = IsNumeric(cme);
	  if(check == false){
	  document.getElementById('cme').style.border='1px solid #CC0000';
	document.getElementById('cme').value=''
 	  return false;
	  }else{
	   document.getElementById('cme').style.border='';
	   }
 	}
 	var inf=document.getElementById("inf").value;
	if(inf == '' || inf == 0)
	{
	alert('Please Enter The "Expected Inflation Rate"');
	document.getElementById('inf').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(inf);
	  if(check == false){ 
	   document.getElementById('inf').style.border='1px solid #CC0000';
	   document.getElementById('inf').value='';
 	  return false;
	  }else{
	   document.getElementById('inf').style.border='';
	   }
 	}
 	var eret=document.getElementById("eret").value;
	if(eret == '' || eret == 0)
	{
	alert('Please Enter The "Expected Returns"');
    document.getElementById('eret').style.border='1px solid #CC0000';
	
	return false;
	} else{
	  var check  = IsNumeric(eret);
	  if(check == false){
	  document.getElementById('eret').style.border='1px solid #CC0000';
	   document.getElementById('eret').value='';
 	  return false;
	  }else{
	   document.getElementById('eret').style.border='';
	   }
 	}
	
	var url="process_retierment_calc.php?cage="+cage+"&rage="+rage+"&cme="+cme+"&inf="+inf+"&eret="+eret;
	
	xmlhttp9.onreadystatechange=stateChanged_sendSMS2;
	xmlhttp9.open("GET",url,true);
	xmlhttp9.send(null);
}
function stateChanged_sendSMS2()
{
	if (xmlhttp9.readyState==4)
	{
	   var res  = xmlhttp9.responseText.split("|");
	  document.getElementById('cret').value = res[0];
	  document.getElementById('tlum').value = res[1];
	  document.getElementById('msip').value = res[2];
	  document.getElementById('res').innerHTML = res[3];
	  document.getElementById('newres').innerHTML = res[4];
	  document.getElementById('age').innerHTML = res[5];
	}
}
function sipcalc1()
{
    xmlhttp9=GetXmlHttpObject();
	if (xmlhttp9==null)
	{
	  alert ("Browser does not support HTTP Request");
	  return;
	}
 	var amut=document.getElementById("amount").value;
 	if(amut == '' || amut == 0 )
	{
	alert('Please Enter Monthly SIP Amount');
	document.getElementById('amount').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(amut);
	  if(check == false){
      document.getElementById('amount').style.border='1px solid #CC0000';
	   document.getElementById('amount').value='';
  	  return false;
	  }else{
	   document.getElementById('amount').style.border='';
 	  }
 	}
 	var duration=document.getElementById("duration").value;
	if(duration == '' || duration == 0 ) 
	{
	alert('Please Enter "SIP duration"');
	document.getElementById('duration').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(duration);
	  if(check == false){
	  document.getElementById('duration').style.border='1px solid #CC0000';
	   document.getElementById('duration').value='';
 	  return false;
	  }else{
	   document.getElementById('duration').style.border='';
	  }
 	}
	if(duration >1200)
	{
	alert('Duration Should be less then 100 Years')
	}
   	var interest=document.getElementById("interest").value;
	if(interest == '' || interest == 0)
	{
	alert('Please Enter "Expected Return"');
	document.getElementById('interest').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(interest);
	  if(check == false){
	   document.getElementById('interest').style.border='1px solid #CC0000';
	    document.getElementById('interest').value='';
  	  return false;
	  }else{
	  	   document.getElementById('interest').style.border='';

	  }
 	}
  	var url="process_sip_calc.php?amut="+amut+"&duration="+duration+"&interest="+interest;
  	xmlhttp9.onreadystatechange=stateChanged_sendSMS1;
	xmlhttp9.open("GET",url,true);
	xmlhttp9.send(null);
}
function stateChanged_sendSMS1()
{
	if (xmlhttp9.readyState==4)
	{
 	  document.getElementById('result').value = xmlhttp9.responseText;
	}
}
function sipcalc()
{

	xmlhttp9=GetXmlHttpObject();
	if (xmlhttp9==null)
	{
	  alert ("Browser does not support HTTP Request");
	  return;
	}
 
	var payment=document.getElementById("payment").value;
	if(payment == '' || payment == 0)
	{
	alert('Please Enter The "Loan Amount"');
	document.getElementById('payment').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(payment);
	  if(check == false){
	   document.getElementById('payment').style.border='1px solid #CC0000';
	    document.getElementById('payment').value='';
 	  return false;
	  }else{
	   document.getElementById('payment').style.border='';
 	  }
 	}
 	var principal=document.getElementById("principal").value;
	if(principal == '' || principal == 0)
	{
	alert('Please Enter The "Loan Duration"');
		document.getElementById('principal').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(principal);
	  if(check == false){
	    document.getElementById('principal').style.border='1px solid #CC0000';
		 document.getElementById('principal').value='';
 	  return false;
	  }else{
	   document.getElementById('principal').style.border='';
 	  }
 	}
	var interest=document.getElementById("interest").value;
	if(interest == '' || interest == 0)
	{
	alert('Please Enter The "Interest Rate"');
	document.getElementById('interest').style.border='1px solid #CC0000';
	return false;
	} else{
	  var check  = IsNumeric(interest);
	  if(check == false){
	   document.getElementById('interest').style.border='1px solid #CC0000';
	    document.getElementById('interest').value='';
 	  return false;
	  }else{
	   document.getElementById('interest').style.border='';
 	  }
 	}
  	var url="process_emi1_calc.php?payment="+payment+"&principal="+principal+"&interest="+interest;
 
 	xmlhttp9.onreadystatechange=stateChanged_sendSMSe;
	xmlhttp9.open("GET",url,true);
	xmlhttp9.send(null);
}
function stateChanged_sendSMSe()
{
	if (xmlhttp9.readyState==4)
	{
	 
	  document.getElementById('result').value = xmlhttp9.responseText;
	}
}