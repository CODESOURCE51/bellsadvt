<?php 
function no_to_words($number1)
{ 
   //$no = round($number);
   $number = explode(".",$number1);
   $no = $number[0];
   $point = $number[1];
   //$point = round($number - $no, 2) * 100;
   //echo $point;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? '  ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "and " . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  //echo $result . "Rupees  " . $points . " Paise";
  
  if($point > 0){
	//echo   $points;
 return $result . $points . " Paise ";
 
  }else{
	  
	return $result;  
	  
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BELLS - Payment Voucher</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {
	font-size: 14px;
	font-weight: bold;
}
.style3 {
	font-size: 24px;
	font-weight: bold;
}
.style5 {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	padding:5px 10px 5px 10px;
	color:#FFFFFF;
	background-color:#000000;
}
.style6 {
	font-size: 14px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style16 {font-size: 16px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style21 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; }
.style22 {font-family: Arial, Helvetica, sans-serif; font-size: 14px;}
-->
</style>




</head>

<body>
<table width="820" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="700" align="center" valign="top"><table width="800" border="1" cellpadding="4" cellspacing="0" bordercolor="#000000" style="border-collapse:collapse;">
      <tr>
        <td colspan="2" rowspan="3" align="center" valign="middle"><span class="style1"><span class="style3"><?php echo $company[0]['com_name'];?></span><br />
            <span class="style2"><?php echo $company[0]['address'];?><br />
          Email : <?php echo $company[0]['com_email'];?> | Phone : <?php echo $company[0]['com_ph'];?></span></span></td>
        <td width="270" align="left" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td align="left" valign="middle"><span class="style6">Voucher No. - </span><span class="style22"><?php echo $landlord[0]['land_id'];?></span></td>
      </tr>
      <tr>
        <td align="left" valign="middle"><span class="style6">Date : </span><span class="style22"><?php echo date('d-m-Y');?></span></td>
      </tr>
      <tr>
        <td height="50" colspan="3" align="center" valign="middle"><span class="style5">PAYMENT VOUCHER</span></td>
        </tr>
      <tr>
        <td colspan="3" align="left" valign="middle"><span class="style8"><strong>Pay :</strong> <?php echo $landlord[0]['sp_lord'];?> - <?php echo $landlord[0]['sp_address'];?></span></td>
        </tr>
      <tr>
        <td colspan="3" align="left" valign="middle"><span class="style8"><strong>Rupees :</strong> <?php echo no_to_words($landlord[0]['sp_price']+$landlord[0]['sp_misc']+$landlord[0]['sp_elec']+$landlord[0]['sp_tax'].'.00');?></span></td>
        </tr>
      <tr>
        <td width="267" align="left" valign="middle"><span class="style8"><strong>By :</strong> Cheque/Cash</span></td>
        <td width="231" align="left" valign="middle"><span class="style8"><strong>Cheque No. :</strong> </span></td>
        <td align="left" valign="middle"><span class="style8"><strong>Dated :</strong> <?php echo date('d-m-Y');?></span></td>
        </tr>
      <tr>
        <td height="60" colspan="3" align="left" valign="middle"><span class="style8"><strong>Being :</strong> The amount paid towards the space rest on the <?php echo $landlord[0]['acq_for'];?> at <?php echo $landlord[0]['sp_address'];?> for the period <?php echo $landlord[0]['sp_start'];?> to <?php echo $landlord[0]['sp_ends'];?></span></td>
        </tr>
      <tr>
        <td height="70" colspan="2" align="left" valign="middle"><table width="160" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td width="45" height="40" align="center" valign="middle"><span class="style12">Rs.</span></td>
            <td width="109" align="center" valign="middle"><span class="style12"><?php echo $landlord[0]['sp_price']+$landlord[0]['sp_misc']+$landlord[0]['sp_elec']+$landlord[0]['sp_tax'].'.00';?></span></td>
          </tr>
        </table></td>
        <td height="70" align="center" valign="top"><span class="style10">Received payment</span></td>
        </tr>
      
      <tr>
        <td colspan="2" align="center" valign="middle"><span class="style10">REMARKS</span></td>
        <td align="center" valign="bottom"><span class="style10">Signature of Payee</span></td>
        </tr>
      <tr>
        <td colspan="2" align="center" valign="middle"><table width="500" border="1" cellpadding="4" cellspacing="0" bordercolor="#000000" style="border-collapse:collapse;">
          <tr>
           
          </tr>
        </table></td>
        <td align="center" valign="top"><span class="style16">AUTHORISATION<br />
          <br />
          <br />
          <br />
        </span><span class="style21">Passed for payment</span><br />
          <br />
          <br />
          <br />
          <br />
          <span class="style8">Authorised Signatories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accountant</span></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
