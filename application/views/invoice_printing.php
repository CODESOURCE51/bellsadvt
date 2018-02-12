<?php
$ipc = implode(',',$taxesids);
$arpimp = explode(',',$ipc); 
//print_r($arpimp);
$ary = array_unique($arpimp);
$expimplode = implode(',',$ary);

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
<title>BELLS - Tax Invoice - RENTAL</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 18px}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style6 {
	font-size: 22px;
	font-weight: bold;
}
.style7 {
	font-size: 16px;
	font-weight: bold;
}
.style12 {font-size: 14px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body>
<?php $companyexp = explode(',',$company[0]['com_ph']);
$imp = implode('-',$companyexp);?>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="700" height="1000" align="center" valign="top"><table width="680" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="288" height="30">&nbsp;</td>
        <td height="30" colspan="2" align="right" valign="middle"><span class="style1">Phone : <?php echo $company[0]['com_ph'];?></span></td>
        </tr>
      <tr>
        <td height="60" colspan="3" align="center" valign="top"><span class="style2"><u>TAX INVOICE</u><br />
            <span class="style3"><u>ORIGINAL / DUPLICATE</u></span></span></td>
        </tr>
      <tr>
        <td height="24" class="style1">Bill No. - <?php echo $data[0]['invoice_no'];?></td>
        <td width="47" height="24">&nbsp;</td>
        <td width="345" height="24" align="right" valign="middle" class="style1">Date : <?php echo $data[0]['bill_d'].'.'.$data[0]['bill_m'].'.'.$data[0]['bill_y'];?></td>
      </tr>
      <tr>
        <td height="10">&nbsp;</td>
        <td height="10">&nbsp;</td>
        <td height="10">&nbsp;</td>
      </tr>
      <tr>
        <td class="style1">MESSRS.</td>
        <td>&nbsp;</td>
        <td align="right" valign="middle"><span class="style4">PAN NO. - <?php echo $company[0]['pan'];?></span></td>
      </tr>
      <tr>
        <td rowspan="3" align="left" valign="top" class="style4"><?php echo $mclient[0]['client_name'];?>,<br />
          <?php echo $mclient[0]['client_address'];?></td>
        <td>&nbsp;</td>
        <td align="right" valign="middle" class="style4">SERVICE TAX NO. -: <?php echo $company[0]['sa'];?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right" valign="middle" class="style4">VAT NO. - <?php echo $company[0]['vat'];?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right" valign="middle" class="style4">CATEGORY OF SERVICE - ADVERTISING AGENCY</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="style4">VAT No. <?php echo $mclient[0]['client_vat'];?></td>
        <td></td>
        <td align="right" valign="middle" class="style4">BANK NAME:-<?php echo $Bank[0]['area_name'];?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="style4">PAN No. <?php echo $mclient[0]['client_pan'];?></td>
        <td></td>
        <td align="right" valign="middle" class="style4">BRANCH  :-<?php echo $Bank[0]['c_name'];?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="style4">ST No. <?php echo $mclient[0]['client_st'];?></td>
        <td></td>
        <td align="right" valign="middle" class="style4">A/C. NO. :-<?php echo $Bank[0]['ag_p'];?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="style4">&nbsp;</td>
        <td></td>
        <td align="right" valign="middle" class="style4">IFSC Code :-<?php echo $Bank[0]['rent_amt'];?></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="style4">&nbsp;</td>
        <td></td>
        <td align="right" valign="middle" class="style4">MICR Code :-<?php echo $Bank[0]['rmrks'];?></td>
      </tr>
      <tr>
        <td height="60" colspan="3" align="center" valign="top" class="style4"><span class="style6"><?php echo $company[0]['com_name'];?></span><br />
          <span class="style7"><?php echo $company[0]['address'];?></span></td>
        </tr>
      <tr>
        <td colspan="3" align="center" valign="middle" ><table width="670" border="1" cellpadding="4" cellspacing="0" bordercolor="#000000" style="border-collapse:collapse;">
          <tr>
            <td width="325"><span class="style12">Location</span></td>
            <td width="74" align="center"><span class="style12">Size</span></td>
            <td width="28" align="center"><span class="style12">Qty</span></td>
            <td width="57" align="center"><span class="style12">Total Sq. Ft.</span></td>
            <td width="66" align="center"><span class="style12">Printing Charges</span></td>
            <td width="58" align="center"><span class="style12">Amount (INR)</span></td>
          </tr>
          <tr>
            <td align="left" valign="top"><span class="style1">Vinyl Printing Charges for advertisement  for the under noted sites at - </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <?php foreach($data as $Corders) { 
		  
		  $MainM = $this->db->query('SELECT * FROM td_service WHERE service_id='.$Corders['main_media'])->result_array();
		$Mtype = $this->db->query('SELECT * FROM td_media_type WHERE type_id='.$Corders['media_type'])->result_array();
		$marea = $this->db->query('SELECT * FROM td_area WHERE area_id IN('.$Corders['area'].')')->result_array();
		if($Corders['size'] != 'NA') {
		$msize = $this->db->query('SELECT * FROM td_size WHERE size_id IN('.$Corders['size'].')')->result_array();
		}
		$expqty = explode(',',$Corders['quantity']);
		$expqtyCount = count($expqty)-1;
		$exppqty = explode(',',$Corders['main_price_unit']);
		$expPCount = count($exppqty)-1;
		$expRent = explode(',',$Corders['rent_f']);
		$expRentQty = count($expRent)-1;
		$expRentt = explode(',',$Corders['rent_t']);
		$expsides = explode(',',$Corders['print_sides']);
		  ?>
          <tr>
            <td align="left" valign="top"><span class="style4"><strong><u><?php echo $MainM[0]['service_name'];?> -<?php echo $Mtype[0]['type'];?></u> </strong><br />
               <?php foreach($marea as $tarea) { ?>
             <?php echo $tarea['area_name'];?>&nbsp;(<?php echo $tarea['landmark'];?>)<br /><?php } ?>
            </span></td>
            <td align="center" valign="top" class="style4"><br />
              
              <?php 
			  if($Corders['package_type'] == 2){
  $Main_media_size2 = explode(',',$Corders['size']);
    $cntSZ = count($Main_media_size2)-1;
    for($sz=0;$sz<=$cntSZ;$sz++){
    $msize = $this->db->query("SELECT * FROM td_size WHERE size_id =".$Main_media_size2[$sz])->result_array();

            echo $msize[0]['size'].'x'.$expsides[$sz].' sided';?><br />
              <?php } } else echo '--';?>
             <?php /*?> <?php //if($Corders['size'] != 'NA') {$sd = 0;foreach($msize as $tsize) { ?>
              <?php //echo $tsize['size'];?>x <?php //echo $expsides[$sd];?> sided<br />
              <?php //$sd++;}} else echo 'NA'; ?><?php */?>
               </td>
            <td align="center" valign="top" class="style4"><br />
             <?php if($Corders['package_type'] == 2){for($r=0;$r<=$expqtyCount;$r++) { ?>
              <?php echo $expqty[$r];?><br />
              <?php }} else echo '--'; ?></td>
            <td align="center" valign="top" class="style4"><br /> 
             <?php 
			 if($Corders['package_type'] == 2){
  $Main_media_size21 = explode(',',$Corders['size']);
    $cntSZ1 = count($Main_media_size21)-1;
    for($sd=0;$sd<=$cntSZ1;$sd++){
    $msize1 = $this->db->query("SELECT * FROM td_size WHERE size_id =".$Main_media_size21[$sd])->result_array();
	?>
     <?php echo $msize1[0]['note']*$expsides[$sd]*$expqty[$sd];?> <br />
     <?php }} else echo $Corders['tot_sqr_fit_P'];?>
              <?php /*?> <?php if($Corders['size'] != 'NA') {$sd = 0;foreach($msize as $tsize) { ?>
              <?php echo $tsize['note']*$expsides[$sd]*$expqty[$sd];?> <br />
              <?php $sd++;}} else echo 'NA'; ?><?php */?></td>
            <td align="center" valign="top" class="style4"><br />
                
                <?php for($f=0;$f<=$expPCount;$f++) { ?>
             <?php echo $exppqty[$f];?> /sq.ft.<br />
             <?php } ?>
                </td>
            <td align="right" valign="top" class="style4"><br /> 
            <?php 
			if($Corders['package_type'] == 2){
  $Main_media_size211 = explode(',',$Corders['size']);
    $cntSZ11 = count($Main_media_size211)-1;
    for($ss=0;$ss<=$cntSZ11;$ss++){
    $msize11 = $this->db->query("SELECT * FROM td_size WHERE size_id =".$Main_media_size211[$ss])->result_array();
	?>   
    <?php echo $msize11[0]['note']*$expsides[$ss]*$expqty[$ss]*$exppqty[$ss]*$expqty[$ss];?> <br />
    <?php } } else echo $Corders['tot_amt_p'];?>        
               <?php /*?><?php if($Corders['size'] != 'NA') {$sd = 0;foreach($msize as $tsize) { ?>
              <?php echo $tsize['note']*$expsides[$sd]*$expqty[$sd]*$exppqty[$sd];?> <br />
              <?php $sd++;}} else echo 'NA'; ?><?php */?></td>
          </tr>
          <?php } ?>
          <tr>
            <td colspan="3">&nbsp;</td>
            <td class="style1">&nbsp;</td>
            <td>-----------------</td>
            <td align="right" valign="middle"><span class="style1"><?php echo $Corders['unit_total'];?></span></td>
          </tr>
          <tr>
            <td colspan="3" align="left" valign="middle" class="style4">(P.O. No. : <?php echo $Corders['po_no'];?>)</td>
            <td colspan="2" align="left" valign="top" class="style4"><?php $expt = explode(',',$expimplode); 
									$exp_cnt = count($expt)-1;
									if($data[0]['tax_id'] != '') {$taxes = $this->db->query('SELECT * FROM td_service_charge WHERE sc_id IN('.$data[0]['tax_id'].')')->result_array();?><?php foreach($taxes as $tname) { ?><?php echo $tname['charge_name'];?> &nbsp;(<?php echo $tname['percent'];?>)<br /><?php } }?><br/><?php if($SumOChrg[0]['otherTotal'] != 0) echo 'Other Charge';?><br /></td>
            <td align="right" valign="top" class="style4"><?php $expt = explode(',',$expimplode); 
									$exp_cnt = count($expt);
									if($data[0]['tax_id'] != '') {for($j=1;$j<=$exp_cnt;$j++) { $taxes = $this->db->query('SELECT SUM(tax5) as tttaxsc FROM td_order WHERE order_id IN ('.$data[0]['order_id'].')')->result_array();$tid = $j+1;?><?php echo $taxes[0]['tttaxsc'];?><br/><?php }} ?><br/><?php if($SumOChrg[0]['otherTotal'] != 0) echo $SumOChrg[0]['otherTotal'];?><br /></td>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
            <td align="center" valign="middle" class="style1">TOTAL (INR)</td>
            <td align="right" valign="middle" class="style1"><?php $rs = round($SumChrg[0]['chrgTotal'], 2);echo $rs;?></td>
          </tr>
          <tr>
            <td height="30" colspan="6" align="right" valign="middle" class="style4"><strong>Amount in Words :</strong> <?php $r = round($SumChrg[0]['chrgTotal'], 2);echo no_to_words($r.'.00');?></td>
            </tr>
        </table></td>
        </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30" align="right" valign="middle" class="style12">E. &amp; O.E.</td>
      </tr>
      <tr>
        <td height="100" align="right" valign="bottom">&nbsp;</td>
        <td height="100" align="right" valign="bottom">&nbsp;</td>
        <td height="100" align="right" valign="bottom" class="style12">For Bells Advertising Syndicates</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
