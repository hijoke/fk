<?php

$from=$_GET['from'];
$to=$_GET['to'];
$num=$_GET['num'];
if($from&&$to&&$num){
	$url="http://download.finance.yahoo.com/d/quotes.html?s=$from$to=X&f=sl1d1t1ba&e=.html";
	$contents=_link($url);
	$contents=str_replace("\"","",str_replace("/","-",$contents));
	$list=explode(",",$contents);
	$type=file("type.txt");
}

function _content($date){
	$date=explode("|",$date);
	return $date[1];
}
function _link($url){
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, "$url");
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)");
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$contents = curl_exec($ch);
	curl_close($ch);
	if($contents=="Forbidden" || empty($contents)){
		$contents = @file_get_contents("$url");
	}
	return $contents;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>���ʻ��㹤��,���������ʲ�ѯ,����ת������ - 14157.com</title>
<meta name="keywords" content="���ʻ��㹤��,���������ʲ�ѯ,����ת������ 14157.com" />
<meta name="description" content="���ʻ��㹤��,���������ʲ�ѯ,����ת������ 14157.com">
<LINK href="images/lsy.css" type=text/css rel=stylesheet>
</head>
<body>
<div class="box800">
  <div class="weblogo"><a href="http://www.14157.com/" target="_blank">�ۺ�����</a>-<a href="http://www.14157.com/tool/" target="_blank">���ʻ���</a></div>
</div>
<BR>
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>�ۺ����� - 14157.com</td>

  </tr>
</table>


<DIV id=main>
<DIV id=left_content>
	<div id="leftcontent">
	<div class="pxd13">

	  <br><p>��վ���һ��ʻ��㹦�ܿɲ�ѯ150������Һ͵������һ��ʣ������л��㡣�����Զ������ʻ����Ƽ۽��е�����</p>

	<form action="" method=get><select style="width:200px;background-color:#e9f8d7" size=1 name=from>
		<optgroup style="color:#000;background-color:#fff" label=���û���>
	        <option value=CNY>����� Chinese Yuan Renminbi . CNY</option>
	        <option value=HKD>��Ԫ Hong Kong Dollar . HKD</option>
	        <option value=TWD>̨�� Taiwan Dollar . TWD</option>
	        <option value=EUR SELECTED>ŷԪ Euro . EUR</option>
	        <option value=USD>��Ԫ US Dollar . USD</option>
	        <option value=GBP>Ӣ�� British Pound . GBP</option>
	        <option value=AUD>��Ԫ Australian Dollar . AUD</option>
	        <option value=KRW>��Ԫ South-Korean Won . KRW</option>
	        <option value=JPY>��Ԫ Japanese Yen . JPY</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=A>
	        <option value=ALL>�����������п� Albanian Lek . ALL</option>
	        <option value=DZD>���������ǵ��ɶ� Algerian Dinar . DZD</option>
	        <option value=ARS>����͢���� Argentine Peso . ARS</option>
	        <option value=AWG>��³�͵������� Aruba Florin . AWG</option>
	        <option value=AUD>��Ԫ Australian Dollar . AUD</option>
	        <option value=EGP>������ Egyptian Pound . EGP</option>
	        <option value=EEK>��ɳ���ǿ����� Estonian Kroon . EEK</option>
	        <option value=ETB>��������Ǳȶ� Ethiopian Birr . ETB</option>
	        <option value=MOP>����Ԫ Macau Pataca . MOP</option>
	        <option value=OMR>�������Ƕ� Omani Rial . OMR</option>
	        <option value=AED>����������ķ UAE Dirham . AED</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=B>
	        <option value=BSD>�͹���Ԫ Bahamian Dollar . BSD</option>
	        <option value=BHD>���ֵ��ɶ� Bahraini Dinar . BHD</option>
	        <option value=BBD>�ͰͶ�˹Ԫ Barbados Dollar . BBD</option>
	        <option value=BYR>�׶���˹¬�� Belarus Ruble . BYR</option>
	        <option value=BZD>������Ԫ Belize Dollar . BZD</option>
	        <option value=BMD>��Ľ��Ԫ Bermuda Dollar . BMD</option>
	        <option value=BTN>����¬�� Bhutan Ngultrum . BTN</option>
	        <option value=BOB>����ά��ŵ Bolivian Boliviano . BOB</option>
	        <option value=BWP>������������ Botswana Pula . BWP</option>
	        <option value=BRL>���������� Brazilian Real . BRL</option>
	        <option value=BGN>������������ Bulgarian Lev . BGN</option>
	        <option value=BIF>��¡�Ϸ��� Burundi Franc . BIF</option>
	        <option value=ISK>�������� Iceland Krona . ISK</option>
	        <option value=PKR>�ͻ�˹̹¬�� Pakistani Rupee . PKR</option>
	        <option value=PAB>������Ͷ����� Panama Balboa . PAB</option>
	        <option value=PGK>�Ͳ����¼����ǻ��� Papua New Guinea Kina . PGK</option>
	        <option value=PYG>����������� Paraguayan Guarani . PYG</option>
	        <option value=PLN>���������� Polish Zloty . PLN</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=C>
	        <option value=KPW>����Բ North Korean Won . KPW</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=D>
	        <option value=XOF>�����޹�ͬ�巨�� CFA Franc BCEAO . XOF</option>
	        <option value=DKK>������� Danish Krone . DKK</option>
	        <option value=DOP>������ӱ��� Dominican Peso . DOP</option>
	        <option value=DEM>�¹���� German Mark . DEM</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=E>
	        <option value=ECS>��϶���տ��� Ecuador Sucre . ECS</option>
	        <option value=ERN>���������� Eritrea Nakfa . ERN</option>
	        <option value=RUB>����˹¬�� Russian Rouble . RUB</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=F>
	        <option value=CVE>��ýǰ�˹��� Cape Verde Escudo . CVE</option>
	        <option value=FKP>������Ⱥ���� Falkland Islands Pound . FKP</option>
	        <option value=FJD>쳼�Ԫ Fiji Dollar . FJD</option>
	        <option value=PHP>���ɱ����� Philippine Peso . PHP</option>
	        <option value=FRF>�������� France Franc . FRF</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=G>
	        <option value=XAF>�չ��зǹ�ͬ�巨�� CFA Franc BEAC . XAF</option>
	        <option value=COP>���ױ��Ǳ��� Colombian Peso . COP</option>
	        <option value=CRC>��˹����ӿ��� Costa Rica Colon . CRC</option>
	        <option value=CUP>�Űͱ��� Cuban Peso . CUP</option>
	        <option value=XCD>�����ɴﶫ���ձ�Ԫ East Caribbean Dollar . XCD</option>
	        <option value=GMD>�Ա��Ǵ����� Gambian Dalasi . GMD</option>
	        <option value=GYD>������Ԫ Guyana Dollar . GYD</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=H>
	        <option value=HTG>���عŵ� Haiti Gourde . HTG</option>
	        <option value=HNL>�鶼��˹��Ƥ�� Honduras Lempira . HNL</option>
	        <option value=KZT>������˹̹�ڸ� Kazakhstan Tenge . KZT</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=J>
	        <option value=KHR>����կ����˹ Cambodia Riel . KHR</option>
	        <option value=CAD>���ô�Ԫ Canadian Dollar . CAD</option>
	        <option value=CZK>�ݿ˿��� Czech Koruna . CZK</option>
	        <option value=DJF>�����ᷨ�� Dijibouti Franc . DJF</option>
	        <option value=GHC>�������� Ghanian Cedi . GHC</option>
	        <option value=GNF>�����Ƿ��� Guinea Franc . GNF</option>
	        <option value=ZWN>�½�Ͳ�ΤԪ New Zimbabwe Dollar . ZWN</option>
	        <option value=ZWD>��Ͳ�ΤԪ Zimbabwe Dollar . ZWD</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=K>
	        <option value=KYD>������Ԫ Cayman Islands Dollar . KYD</option>
	        <option value=KMF>��Ħ�޷��� Comoros Franc . KMF</option>
	        <option value=HRK>���޵��ǿ��� Croatian Kuna . HRK</option>
	        <option value=KES>���������� Kenyan Shilling . KES</option>
	        <option value=KWD>�����ص��ɶ� Kuwaiti Dinar . KWD</option>
	        <option value=QAR>���������� Qatar Rial . QAR</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=L>
	        <option value=LAK>���λ��� Lao Kip . LAK</option>
	        <option value=LVL>����ά����ͼ Latvian Lats . LVL</option>
	        <option value=LBP>����۰� Lebanese Pound . LBP</option>
	        <option value=LSL>���������� Lesotho Loti . LSL</option>
	        <option value=LRD>��������Ԫ Liberian Dollar . LRD</option>
	        <option value=LYD>�����ǵ��ɶ� Libyan Dinar . LYD</option>
	        <option value=LTL>����������˹ Lithuanian Litas . LTL</option>
	        <option value=ANG>��˹������ Neth Antilles Guilder . ANG</option>
	        <option value=ROL>������������ Romanian Leu . ROL</option>
	        <option value=RON>�������������� Romanian New Leu . RON</option>
	        <option value=RWF>¬���﷨�� Rwanda Franc . RWF</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=M>
	        <option value=BDT>�ϼ������� Bangladesh Taka . BDT</option>
	        <option value=MKD>����ٵ��ɶ� Macedonian Denar . MKD</option>
	        <option value=MGF>����˹�ӷ��� Malagasy Franc . MGF</option>
	        <option value=MWK>����ά���߲� Malawi Kwacha . MWK</option>
	        <option value=MYR>���������ּ��� Malaysian Ringgit . MYR</option>
	        <option value=MVR>�������¬���� Maldives Rufiyaa . MVR</option>
	        <option value=MTL>��������� Maltese Lira . MTL</option>
	        <option value=MRO>ë���������ڼ��� Mauritania Ougulya . MRO</option>
	        <option value=MUR>ë����˹¬�� Mauritius Rupee . MUR</option>
	        <option value=MXN>ī������� Mexican Peso . MXN</option>
	        <option value=MDL>Ħ���������� Moldovan Leu . MDL</option>
	        <option value=MNT>�ɹ�ͼ����� Mongolian Tugrik . MNT</option>
	        <option value=MAD>Ħ������ķ Moroccan Dirham . MAD</option>
	        <option value=MZM>Īɣ�ȿ����Ῠ Mozambique Metical . MZM</option>
	        <option value=MMK>���Ԫ Myanmar Kyat . MMK</option>
	        <option value=PEN>��³���� Peruvian Nuevo Sol . PEN</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=N>
	        <option value=NAD>���ױ���Ԫ Namibian Dollar . NAD</option>
	        <option value=NPR>�Ჴ��¬�� Nepalese Rupee . NPR</option>
	        <option value=NIO>������Ͽƶ�� Nicaragua Cordoba . NIO</option>
	        <option value=NGN>������������ Nigerian Naira . NGN</option>
	        <option value=NOK>Ų������ Norwegian Kroner . NOK</option>
	        <option value=ZAR>�Ϸ����� South African Rand . ZAR</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=R>
	        <option value=SEK>������ Swedish Krona . SEK</option>
	        <option value=CHF>��ʿ���� Swiss Franc . CHF</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=S>
	        <option value=CYP>����·˹�� Cyprus Pound . CYP</option>
	        <option value=SVC>�����߶���� El Salvador Colon . SVC</option>
	        <option value=WST>��Ħ������ Samoa Tala . WST</option>
	        <option value=STD>ʥ�����಼�� Sao Tome Dobra . STD</option>
	        <option value=SAR>ɳ�ذ��������Ƕ� Saudi Arabian Riyal . SAR</option>
	        <option value=SCR>��������� Seychelles Rupee . SCR</option>
	        <option value=SLL>������������ Sierra Leone Leone . SLL</option>
	        <option value=SKK>˹�工�˿��� Slovak Koruna . SKK</option>
	        <option value=SIT>˹�������������ݷ� Slovenian Tolar . SIT</option>
	        <option value=SBD>������Ⱥ��Ԫ Solomon Islands Dollar . SBD</option>
	        <option value=SOS>���������� Somali Shilling . SOS</option>
	        <option value=LKR>˹������¬�� Sri Lanka Rupee . LKR</option>
	        <option value=SHP>ʥ������Ⱥ���� St Helena Pound . SHP</option>
	        <option value=SDD>�յ����ɶ� Sudanese Dinar . SDD</option>
	        <option value=SRG>�����϶� Surinam Guilder . SRG</option>
	        <option value=SZL>˹��ʿ���������� Swaziland Lilageni . SZL</option>
	        <option value=SDP>�յ��� Sudanese Pound . SDP</option>
	        <option value=CSD>����ά�ǵ��ɶ� Serbian Dinar . CSD</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=T>
	        <option value=TRY>������������ New Turkish Lira . TRY</option>
	        <option value=XPF>̫ƽ���� Pacific Franc . XPF</option>
	        <option value=TZS>̹ɣ�������� Tanzanian Shilling . TZS</option>
	        <option value=THB>̩���� Thai Baht . THB</option>
	        <option value=TOP>�����˼� Tonga Pa'anga . TOP</option>
	        <option value=TTD>�������Ͷ�͸�Ԫ Trinidad&Tobago Dollar . TTD</option>
	        <option value=TND>ͻ��˹���ɶ� Tunisian Dinar . TND</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=W>
	        <option value=BND>����Ԫ Brunei Dollar . BND</option>
	        <option value=GTQ>Σ���������� Guatemala Quetzal . GTQ</option>
	        <option value=UGS>�ڸɴ����� Ugandan Shilling . UGS</option>
	        <option value=UAH>�ڿ����շ��� Ukraine Hryvnia . UAH</option>
	        <option value=UYU>�������±��� Uruguayan New Peso . UYU</option>
	        <option value=VUV>��Ŭ��ͼ��ͼ Vanuatu Vatu . VUV</option>
	        <option value=VEB>ί������������ Venezuelan Bolivar . VEB</option>
	        <option value=VND>Խ�϶� Vietnam Dong . VND</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=X>
	        <option value=HUF>���������� Hungarian Forint . HUF</option>
	        <option value=NZD>������Ԫ New Zealand Dollar . NZD</option>
	        <option value=SGD>�¼���Ԫ Singapore Dollar . SGD</option>
	        <option value=SYP>�����ǰ� Syrian Pound . SYP</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=Y>
	        <option value=INR>ӡ��¬�� Indian Rupee . INR</option>
	        <option value=IDR>ӡ��������¬��(��) Indonesian Rupiah . IDR</option>
	        <option value=IRR>�������Ƕ� Iran Rial . IRR</option>
	        <option value=IQD>�����˵��ɶ� Iraqi Dinar . IQD</option>
	        <option value=ILS>��ɫ�а� Israeli Shekel . ILS</option>
	        <option value=JMD>�����Ԫ Jamaican Dollar . JMD</option>
	        <option value=JOD>Լ�����ɶ� Jordanian Dinar . JOD</option>
	        <option value=YER>Ҳ�����Ƕ� Yemen Riyal . YER</option>
	        <option value=ITL>��������� Italy Lira . ITL</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=Z>
	        <option value=CLP>�������� Chilean Peso . CLP</option>
	        <option value=GIP>ֱ�����Ӱ� Gibraltar Pound . GIP</option>
	        <option value=ZMK>�ޱ��ǿ��߲� Zambian Kwacha . ZMK</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=�����>
	        <option value=XAL>���۰�˾ Aluminium Ounces . XAL</option>
	        <option value=XCP>ͭ�۰�˾ Copper Ounces . XCP</option>
	        <option value=XAU>��۰�˾ Gold Ounces . XAU</option>
	        <option value=XPD>�ټ۰�˾ Palladium Ounces . XPD</option>
	        <option value=XPT>���۰�˾ Platinum Ounces . XPT</option>
	        <option value=XAG>���۰�˾ Silver Ounces . XAG</option>
	    </optgroup>
	</select>
	�һ�
	<select style="width:200px;background-color:#e9f8d7" size=1 name=to>
	    <optgroup style="color:#000;background-color:#fff" label=���û���>
	        <option value=CNY>����� Chinese Yuan Renminbi . CNY</option>
	        <option value=HKD>��Ԫ Hong Kong Dollar . HKD</option>
	        <option value=TWD>̨�� Taiwan Dollar . TWD</option>
	        <option value=EUR>ŷԪ Euro . EUR</option>
	        <option value=USD>��Ԫ US Dollar . USD</option>
	        <option value=GBP>Ӣ�� British Pound . GBP</option>
	        <option value=AUD>��Ԫ Australian Dollar . AUD</option>
	        <option value=KRW>��Ԫ South-Korean Won . KRW</option>
	        <option value=JPY SELECTED>��Ԫ Japanese Yen . JPY</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=A>
	        <option value=ALL>�����������п� Albanian Lek . ALL</option>
	        <option value=DZD>���������ǵ��ɶ� Algerian Dinar . DZD</option>
	        <option value=ARS>����͢���� Argentine Peso . ARS</option>
	        <option value=AWG>��³�͵������� Aruba Florin . AWG</option>
	        <option value=AUD>��Ԫ Australian Dollar . AUD</option>
	        <option value=EGP>������ Egyptian Pound . EGP</option>
	        <option value=EEK>��ɳ���ǿ����� Estonian Kroon . EEK</option>
	        <option value=ETB>��������Ǳȶ� Ethiopian Birr . ETB</option>
	        <option value=MOP>����Ԫ Macau Pataca . MOP</option>
	        <option value=OMR>�������Ƕ� Omani Rial . OMR</option>
	        <option value=AED>����������ķ UAE Dirham . AED</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=B>
	        <option value=BSD>�͹���Ԫ Bahamian Dollar . BSD</option>
	        <option value=BHD>���ֵ��ɶ� Bahraini Dinar . BHD</option>
	        <option value=BBD>�ͰͶ�˹Ԫ Barbados Dollar . BBD</option>
	        <option value=BYR>�׶���˹¬�� Belarus Ruble . BYR</option>
	        <option value=BZD>������Ԫ Belize Dollar . BZD</option>
	        <option value=BMD>��Ľ��Ԫ Bermuda Dollar . BMD</option>
	        <option value=BTN>����¬�� Bhutan Ngultrum . BTN</option>
	        <option value=BOB>����ά��ŵ Bolivian Boliviano . BOB</option>
	        <option value=BWP>������������ Botswana Pula . BWP</option>
	        <option value=BRL>���������� Brazilian Real . BRL</option>
	        <option value=BGN>������������ Bulgarian Lev . BGN</option>
	        <option value=BIF>��¡�Ϸ��� Burundi Franc . BIF</option>
	        <option value=ISK>�������� Iceland Krona . ISK</option>
	        <option value=PKR>�ͻ�˹̹¬�� Pakistani Rupee . PKR</option>
	        <option value=PAB>������Ͷ����� Panama Balboa . PAB</option>
	        <option value=PGK>�Ͳ����¼����ǻ��� Papua New Guinea Kina . PGK</option>
	        <option value=PYG>����������� Paraguayan Guarani . PYG</option>
	        <option value=PLN>���������� Polish Zloty . PLN</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=C>
	        <option value=KPW>����Բ North Korean Won . KPW</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=D>
	        <option value=XOF>�����޹�ͬ�巨�� CFA Franc BCEAO . XOF</option>
	        <option value=DKK>������� Danish Krone . DKK</option>
	        <option value=DOP>������ӱ��� Dominican Peso . DOP</option>
	        <option value=DEM>�¹���� German Mark . DEM</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=E>
	        <option value=ECS>��϶���տ��� Ecuador Sucre . ECS</option>
	        <option value=ERN>���������� Eritrea Nakfa . ERN</option>
	        <option value=RUB>����˹¬�� Russian Rouble . RUB</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=F>
	        <option value=CVE>��ýǰ�˹��� Cape Verde Escudo . CVE</option>
	        <option value=FKP>������Ⱥ���� Falkland Islands Pound . FKP</option>
	        <option value=FJD>쳼�Ԫ Fiji Dollar . FJD</option>
	        <option value=PHP>���ɱ����� Philippine Peso . PHP</option>
	        <option value=FRF>�������� France Franc . FRF</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=G>
	        <option value=XAF>�չ��зǹ�ͬ�巨�� CFA Franc BEAC . XAF</option>
	        <option value=COP>���ױ��Ǳ��� Colombian Peso . COP</option>
	        <option value=CRC>��˹����ӿ��� Costa Rica Colon . CRC</option>
	        <option value=CUP>�Űͱ��� Cuban Peso . CUP</option>
	        <option value=XCD>�����ɴﶫ���ձ�Ԫ East Caribbean Dollar . XCD</option>
	        <option value=GMD>�Ա��Ǵ����� Gambian Dalasi . GMD</option>
	        <option value=GYD>������Ԫ Guyana Dollar . GYD</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=H>
	        <option value=HTG>���عŵ� Haiti Gourde . HTG</option>
	        <option value=HNL>�鶼��˹��Ƥ�� Honduras Lempira . HNL</option>
	        <option value=KZT>������˹̹�ڸ� Kazakhstan Tenge . KZT</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=J>
	        <option value=KHR>����կ����˹ Cambodia Riel . KHR</option>
	        <option value=CAD>���ô�Ԫ Canadian Dollar . CAD</option>
	        <option value=CZK>�ݿ˿��� Czech Koruna . CZK</option>
	        <option value=DJF>�����ᷨ�� Dijibouti Franc . DJF</option>
	        <option value=GHC>�������� Ghanian Cedi . GHC</option>
	        <option value=GNF>�����Ƿ��� Guinea Franc . GNF</option>
	        <option value=ZWN>�½�Ͳ�ΤԪ New Zimbabwe Dollar . ZWN</option>
	        <option value=ZWD>��Ͳ�ΤԪ Zimbabwe Dollar . ZWD</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=K>
	        <option value=KYD>������Ԫ Cayman Islands Dollar . KYD</option>
	        <option value=KMF>��Ħ�޷��� Comoros Franc . KMF</option>
	        <option value=HRK>���޵��ǿ��� Croatian Kuna . HRK</option>
	        <option value=KES>���������� Kenyan Shilling . KES</option>
	        <option value=KWD>�����ص��ɶ� Kuwaiti Dinar . KWD</option>
	        <option value=QAR>���������� Qatar Rial . QAR</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=L>
	        <option value=LAK>���λ��� Lao Kip . LAK</option>
	        <option value=LVL>����ά����ͼ Latvian Lats . LVL</option>
	        <option value=LBP>����۰� Lebanese Pound . LBP</option>
	        <option value=LSL>���������� Lesotho Loti . LSL</option>
	        <option value=LRD>��������Ԫ Liberian Dollar . LRD</option>
	        <option value=LYD>�����ǵ��ɶ� Libyan Dinar . LYD</option>
	        <option value=LTL>����������˹ Lithuanian Litas . LTL</option>
	        <option value=ANG>��˹������ Neth Antilles Guilder . ANG</option>
	        <option value=ROL>������������ Romanian Leu . ROL</option>
	        <option value=RON>�������������� Romanian New Leu . RON</option>
	        <option value=RWF>¬���﷨�� Rwanda Franc . RWF</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=M>
	        <option value=BDT>�ϼ������� Bangladesh Taka . BDT</option>
	        <option value=MKD>����ٵ��ɶ� Macedonian Denar . MKD</option>
	        <option value=MGF>����˹�ӷ��� Malagasy Franc . MGF</option>
	        <option value=MWK>����ά���߲� Malawi Kwacha . MWK</option>
	        <option value=MYR>���������ּ��� Malaysian Ringgit . MYR</option>
	        <option value=MVR>�������¬���� Maldives Rufiyaa . MVR</option>
	        <option value=MTL>��������� Maltese Lira . MTL</option>
	        <option value=MRO>ë���������ڼ��� Mauritania Ougulya . MRO</option>
	        <option value=MUR>ë����˹¬�� Mauritius Rupee . MUR</option>
	        <option value=MXN>ī������� Mexican Peso . MXN</option>
	        <option value=MDL>Ħ���������� Moldovan Leu . MDL</option>
	        <option value=MNT>�ɹ�ͼ����� Mongolian Tugrik . MNT</option>
	        <option value=MAD>Ħ������ķ Moroccan Dirham . MAD</option>
	        <option value=MZM>Īɣ�ȿ����Ῠ Mozambique Metical . MZM</option>
	        <option value=MMK>���Ԫ Myanmar Kyat . MMK</option>
	        <option value=PEN>��³���� Peruvian Nuevo Sol . PEN</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=N>
	        <option value=NAD>���ױ���Ԫ Namibian Dollar . NAD</option>
	        <option value=NPR>�Ჴ��¬�� Nepalese Rupee . NPR</option>
	        <option value=NIO>������Ͽƶ�� Nicaragua Cordoba . NIO</option>
	        <option value=NGN>������������ Nigerian Naira . NGN</option>
	        <option value=NOK>Ų������ Norwegian Kroner . NOK</option>
	        <option value=ZAR>�Ϸ����� South African Rand . ZAR</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=R>
	        <option value=SEK>������ Swedish Krona . SEK</option>
	        <option value=CHF>��ʿ���� Swiss Franc . CHF</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=S>
	        <option value=CYP>����·˹�� Cyprus Pound . CYP</option>
	        <option value=SVC>�����߶���� El Salvador Colon . SVC</option>
	        <option value=WST>��Ħ������ Samoa Tala . WST</option>
	        <option value=STD>ʥ�����಼�� Sao Tome Dobra . STD</option>
	        <option value=SAR>ɳ�ذ��������Ƕ� Saudi Arabian Riyal . SAR</option>
	        <option value=SCR>��������� Seychelles Rupee . SCR</option>
	        <option value=SLL>������������ Sierra Leone Leone . SLL</option>
	        <option value=SKK>˹�工�˿��� Slovak Koruna . SKK</option>
	        <option value=SIT>˹�������������ݷ� Slovenian Tolar . SIT</option>
	        <option value=SBD>������Ⱥ��Ԫ Solomon Islands Dollar . SBD</option>
	        <option value=SOS>���������� Somali Shilling . SOS</option>
	        <option value=LKR>˹������¬�� Sri Lanka Rupee . LKR</option>
	        <option value=SHP>ʥ������Ⱥ���� St Helena Pound . SHP</option>
	        <option value=SDD>�յ����ɶ� Sudanese Dinar . SDD</option>
	        <option value=SRG>�����϶� Surinam Guilder . SRG</option>
	        <option value=SZL>˹��ʿ���������� Swaziland Lilageni . SZL</option>
	        <option value=SDP>�յ��� Sudanese Pound . SDP</option>
	        <option value=CSD>����ά�ǵ��ɶ� Serbian Dinar . CSD</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=T>
	        <option value=TRY>������������ New Turkish Lira . TRY</option>
	        <option value=XPF>̫ƽ���� Pacific Franc . XPF</option>
	        <option value=TZS>̹ɣ�������� Tanzanian Shilling . TZS</option>
	        <option value=THB>̩���� Thai Baht . THB</option>
	        <option value=TOP>�����˼� Tonga Pa'anga . TOP</option>
	        <option value=TTD>�������Ͷ�͸�Ԫ Trinidad&Tobago Dollar . TTD</option>
	        <option value=TND>ͻ��˹���ɶ� Tunisian Dinar . TND</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=W>
	        <option value=BND>����Ԫ Brunei Dollar . BND</option>
	        <option value=GTQ>Σ���������� Guatemala Quetzal . GTQ</option>
	        <option value=UGS>�ڸɴ����� Ugandan Shilling . UGS</option>
	        <option value=UAH>�ڿ����շ��� Ukraine Hryvnia . UAH</option>
	        <option value=UYU>�������±��� Uruguayan New Peso . UYU</option>
	        <option value=VUV>��Ŭ��ͼ��ͼ Vanuatu Vatu . VUV</option>
	        <option value=VEB>ί������������ Venezuelan Bolivar . VEB</option>
	        <option value=VND>Խ�϶� Vietnam Dong . VND</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=X>
	        <option value=HUF>���������� Hungarian Forint . HUF</option>
	        <option value=NZD>������Ԫ New Zealand Dollar . NZD</option>
	        <option value=SGD>�¼���Ԫ Singapore Dollar . SGD</option>
	        <option value=SYP>�����ǰ� Syrian Pound . SYP</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=Y>
	        <option value=INR>ӡ��¬�� Indian Rupee . INR</option>
	        <option value=IDR>ӡ��������¬��(��) Indonesian Rupiah . IDR</option>
	        <option value=IRR>�������Ƕ� Iran Rial . IRR</option>
	        <option value=IQD>�����˵��ɶ� Iraqi Dinar . IQD</option>
	        <option value=ILS>��ɫ�а� Israeli Shekel . ILS</option>
	        <option value=JMD>�����Ԫ Jamaican Dollar . JMD</option>
	        <option value=JOD>Լ�����ɶ� Jordanian Dinar . JOD</option>
	        <option value=YER>Ҳ�����Ƕ� Yemen Riyal . YER</option>
	        <option value=ITL>��������� Italy Lira . ITL</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=Z>
	        <option value=CLP>�������� Chilean Peso . CLP</option>
	        <option value=GIP>ֱ�����Ӱ� Gibraltar Pound . GIP</option>
	        <option value=ZMK>�ޱ��ǿ��߲� Zambian Kwacha . ZMK</option>
	    </optgroup>
	      <optgroup style="color:#000;background-color:#fff" label=�����>
	        <option value=XAL>���۰�˾ Aluminium Ounces . XAL</option>
	        <option value=XCP>ͭ�۰�˾ Copper Ounces . XCP</option>
	        <option value=XAU>��۰�˾ Gold Ounces . XAU</option>
	        <option value=XPD>�ټ۰�˾ Palladium Ounces . XPD</option>
	        <option value=XPT>���۰�˾ Platinum Ounces . XPT</option>
	        <option value=XAG>���۰�˾ Silver Ounces . XAG</option>
	    </optgroup>
	</select>
	<br><br>���<input name=num size=10 value=100>
	&nbsp;<input type=submit value=" �� ѯ ">
	</form>


	</div>
	<div id="show">
	<?php if($list){?>
		<table width="600" border="1" bordercolor="#12397A" cellpadding="0" style="text-align:center;border-collapse:collapse">
		  <tr style="background-color:#BCE0E4">
		    <th scope="col"><?php foreach($type as $val){echo $from_1 = _content(strstr($val,$from));	}?></th>
		    <th scope="col">��ǰ����</th>
		    <th scope="col"><?php foreach($type as $val){echo $to_1 = _content(strstr($val,$to));	}?></th>
		    <th scope="col">���ʸ�������</th>
		    <th scope="col">����</th>
		    <th scope="col">����</th>
		  </tr>
		  <tr>
		    <td><?php echo $num;?></td>
		    <td><?php echo $list[1];?></td>
		    <td><?php echo $num * $list[1];?></td>
		    <td><?php echo $list[2]."&nbsp;".$list[3];?></td>
		    <td><?php echo $list[4];?></td>
		    <td><?php echo $list[5];?></td>
		  </tr>
		</table>
<BR>
		  		<div align="center">�ۺ����� - www.14157.com</div><BR>
		<p>������Ƽۻ��ʲ�ѯ��������ο���www.14157.com��ʹ�øò�ѯ��������µĽ���Ų��е��κ�����</p>

	<?php }?>
	</div>
	<div align="center"><a href="http://www.14157.com/" target="_blank">�ۺ�����</a></div>
	</div>
</DIV>

</DIV>
</DIV>

</BODY></HTML>