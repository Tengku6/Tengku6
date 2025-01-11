<link rel="icon" href="https://d30y9cdsu7xlg0.cloudfront.net/png/8719-200.png" type="image/x-icon">
<title>DXD - Filter Email</title>
<body background="http://www.vemsos.com/wp-content/uploads/2016/03/JOES-Website-Background-light-grey.jpg">
<center><h1>[+] DXD - Filter Email [+]</h1>
Request for adding more any mail domain filter ? Contact me (<a href="https://www.facebook.com/edoprayoga1999">Edo Prayoga</a>)<br>
Request untuk menambahkan mail domain filter lebih banyak ? Hubungi saya (<a href="https://www.facebook.com/edoprayoga1999">Edo Prayoga</a>)<br><br>
<form method="post">
<textarea name="emails" class="form-control" cols="90" rows="10"></textarea>
<br>
<br>
<button type="submit" class="btn btn-success" id="submit">Submit</button>
<br>
<br>
<?PHP
 
$emails = @$_POST['emails'];
$ex = explode("\n",$emails);
$count = count($ex);
if(isset($emails)&&$count>=1){
echo "<center><font color = 'red'><b>$count </font>Number of Emails  </b><br />";
}else{
echo "<center>  
No Email ";
exit;}
 
if(isset($emails)){
   
 
for($i=0;$i<=$count;$i++){
@$d = strtolower($ex[$i]);
 
if(strstr($d,"hotmail")   || strstr($d,"live") || strstr($d,"msn") || strstr($d,"outlook")){
@$hotmail.=$d;
@$nh = $nh + 1;
}else{
if(strstr($d,"yahoo.")   || strstr($d,"ymail")){
@$yahoo.=$d;
@$ny = $ny + 1;
}else{
if(strstr($d,"gmail")  || strstr($d,"googlemail")   ){
@$gmail.=$d;
@$ng = $ng + 1;
}else{
if(strstr($d,"aol")   ){
@$aol.=$d;
@$na = $na + 1;
}else{
if(strstr($d,"mail.ru")   ){
@$mailru .=$d;
@$nr = $nr + 1;
}else{
if(strstr($d,"wanadoo")   ){
@$wanadoo .=$d;
@$nw = $nw + 1;
}else{
if(strstr($d,"hinet.net")   ){
@$hinetnet .=$d;
@$hinet = $hinet + 1;
}else{
if(strstr($d,"comcast.")   ){
@$comcastnet .=$d;
@$comcast = $comcast + 1;
}else{
if(strstr($d,"ntlworld")   ){
@$ntlworld .=$d;
@$nt = $nt + 1;
}else{
if(strstr($d,"bellsouth.net") || strstr($d,"sbcglobal.net") || strstr($d,"att.net")){
@$attnet .=$d;
@$att = $att + 1;
}else{
if(strstr($d,"gmx")   ){
@$gmx .=$d;
@$ngm = $ngm + 1;
}else{
if(strstr($d,"farmside.co.nz")   ){
@$farmsideconz .=$d;
@$farmside = $farmside + 1;
}else{
if(strstr($d,"@icloud.com") || strstr($d,"@mac.com") || strstr($d,"@me.com") ){
@$apel .=$d;
@$apelfams = $apelfams + 1;
}else{
if(strstr($d,"@web.")   ){
@$web .=$d;
@$nw2 = $nw2 + 1;
}else{
if(strstr($d,"@clear.net.nz") || strstr($d,"@ihug.co.nz") || strstr($d,"@vodafone.co.nz") || strstr($d,"@paradise.net.nz")  ){
@$clearnetnz .=$d;
@$clearnz = $clearnz + 1;
}else{
    if(strstr($d,"@snap.net.nz") || strstr($d,"@southnet.co.nz") || strstr($d,"@caverock.net.nz") || strstr($d,"@ts.co.nz")  ){
@$snapnetnz .=$d;
@$snapnz = $snapnz + 1;
}else{
if(strstr($d,"@zoho.com")   ){
@$zohocom .=$d;
@$zoho = $zoho + 1;
}else{
if(strstr($d,"@protonmail.")   ){
@$protonmail .=$d;
@$proton = $proton + 1;
}else{
if(strstr($d,"@inbox.com")   ){
@$inboxcom .=$d;
@$inbox = $inbox + 1;
}else{
if(strstr($d,"@yandex.")   ){
@$yandexcom .=$d;
@$yandex = $yandex + 1;
}else{
if(strstr($d,"@bigpond.") || strstr($d,"@telstra.com")  ){
@$bigpondcom .=$d;
@$bigpond = $bigpond + 1;
}else{
if(strstr($d,"@btinternet.")   ){
@$btinternetcom .=$d;
@$btinternet = $btinternet + 1;
}else{
if(strstr($d,"@vodafone")   ){
@$vodafonecom .=$d;
@$vodafone = $vodafone + 1;
}else{
if(strstr($d,"sky.com")   ){
@$skycom .=$d;
@$sky = $sky + 1;
}else{
if(strstr($d,"@slingshot.co.nz")   || strstr($d,"@woosh.co.nz") ){
@$slingshotconz .=$d;
@$slingshot = $slingshot + 1;
}else{
if(strstr($d,"@virginmedia")   ){
@$virginmediacom .=$d;
@$virginmedia = $virginmedia + 1;
}else{
if(strstr($d,"@charter.net")   ){
@$charternet .=$d;
@$charter = $charter + 1;
}else{
if(strstr($d,"@verizon.")   ){
@$verizonnet .=$d;
@$verizon = $verizon + 1;
}else{
if(strstr($d,"@t-online")   ){
@$tonlinede .=$d;
@$tonline = $tonline + 1;
}else{
if(strstr($d,"@optusnet.com.au")   ){
@$optusnet .=$d;
@$optus = $optus + 1;
}else{
if(strstr($d,"@rogers.com")   ){
@$rogerscom .=$d;
@$rogers = $rogers + 1;
}else{
if(strstr($d,"@skymesh.com.au")   ){
@$skymeshcom .=$d;
@$skymesh = $skymesh + 1;
}else{
if(strstr($d,"@westnet.com.au")   ){
@$westnetcom .=$d;
@$westnet = $westnet + 1;
}else{
if(strstr($d,"@ozemail.com.au")   ){
@$ozemailcom .=$d;
@$ozemail = $ozemail + 1;
}else{
if(strstr($d,"@singnet.com.sg")   ){
@$singnetcom .=$d;
@$singnet = $singnet + 1;
}else{
if(strstr($d,"@iinet.net.au")   ){
@$iinetnet .=$d;
@$iinet = $iinet + 1;
}else{
if(strstr($d,"@orcon.net.nz")   ){
@$orconnetnz .=$d;
$orconnz = $orconnz + 1;
}else{
if(strstr($d,"@aim.com")   ){
@$aimcom .=$d;
@$aim = $aim + 1;
}else{
if(strstr($d,"@xtra.co.nz")   ){
@$xtraconz .=$d;
@$xtra = $xtra + 1;
}else{
if(strstr($d,"@cableone.net")   ){
@$cableonenet .=$d;
@$cableone = $cableone + 1;
}else{
if(strstr($d,"@centurylink.net")   ){
@$centurylinknet .=$d;
@$centurylink = $centurylink + 1;
}else{
if(strstr($d,"@cox.net")   ){
@$coxnet .=$d;
@$cox = $cox + 1;
}else{
if(strstr($d,"@coxmail.com")   ){
@$coxmailcom .=$d;
@$coxmail = $coxmail + 1;
}else{
if(strstr($d,"@earthlink.net")   ){
@$earthlinknet .=$d;
@$earthlink = $earthlink + 1;
}else{
if(strstr($d,"@embarqmail.com")   ){
@$embarqmailcom .=$d;
@$embarqmail = $embarqmail + 1;
}else{
if(strstr($d,"@juno.com")   ){
@$junocom .=$d;
@$juno = $juno + 1;
}else{
if(strstr($d,"@netzero")   ){
@$netzeroo .=$d;
@$netzero = $netzero + 1;
}else{
if(strstr($d,"@optonline.net")   ){
@$optonlinenet .=$d;
@$optonline = $optonline + 1;
}else{
if(strstr($d,"@qwest.net")   ){
@$qwestnet .=$d;
@$qwest = $qwest + 1;
}else{
if(strstr($d,"@us.army.mil")   ){
@$usarmymil .=$d;
@$usarmy = $usarmy + 1;
}else{
if(strstr($d,"@talktalk.net")   ){
@$talktalknet .=$d;
@$talktalk = $talktalk + 1;
}else{
if(strstr($d,"@blueyonder.co.uk")   ){
@$blueyondercouk .=$d;
@$blueyonder = $blueyonder + 1;
}else{
if(strstr($d,"@virgin.net")   ){
@$virginnet .=$d;
@$virgin = $virgin + 1;
}else{
if(strstr($d,"@optimum.net")   ){
@$optimumnet .=$d;
@$optimum = $optimum + 1;
}else{
if(strstr($d,"@postmaster.co.uk")   ){
@$postmastercouk .=$d;
@$postmaster = $postmaster + 1;
}else{
@$ather .=$d;
@$nn=$nn + 1;
}
} 
}
}
}
}
}
}
}
} 
}
}
}
}
}
}
} 
}
}
}
}
}
}
} 
}
}
}
}
}
}
} 
}
}
}
}
}
}
}
} 
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
} 
}                              
?>
<center><table style="width: 30%">
        <tr>      
<td><center>
    Hotmail (<?php echo $nh;?>)<br><p>
<textarea class="form-control" name="hotmailx" rows="10"><?php echo $hotmail;?></textarea></td>
<td><center>
    Gmail (<?php echo $ng;?>)<br><p>
<textarea class="form-control" name="gmailx" rows="10" ><?php echo $gmail;?></textarea></td>
<td><center>
    AOL (<?php echo $na;?>)<br><p>
<textarea class="form-control" name="aolxx" rows="10" ><?php echo $aol;?></textarea></td>
<td><center>
    Yahoo (<?php echo $ny;?>)<br><p>
<textarea class="form-control" name="yahoox" rows="10" ><?php echo $yahoo;?></textarea></td>
<td><center>
    Mail.ru (<?php echo $nr;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $mailru;?></textarea></td>
<td><center>
    Comcast (<?php echo $comcast;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $comcastnet;?></textarea></td>
<td><center>
    farmside.co.nz (<?php echo $farmsideconz;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $farmside;?></textarea></td></tr>
<tr>
<td><center><br>
    Wanadoo (<?php echo $nw;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $wanadoo;?></textarea></td>
<td><center><br>
    NTL World (<?php echo $nt;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $ntlworld;?></textarea></td>
<td><center><br>
    GMX (<?php echo $ngm;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $gmx;?></textarea></td>
<td><center><br>
    Web (<?php echo $nw2;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $web;?></textarea></td>
<td><center><br>
    ATT (<?php echo $att;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $attnet;?></textarea></td>
<td><center><br>
    Apple Mail (<?php echo $apelfams;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $apel;?></textarea></td>
<td><center><br>
    Bigpond (<?php echo $bigpond;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $bigpondcom;?></textarea></td></tr>
<tr>
<td><center><br>
    Vodafone NZ (<?php echo $clearnz;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $clearnetnz;?></textarea></td>
<td><center><br>
    SNAP NZ & Southnet NZ (<?php echo $snapnz;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $snapnetnz;?></textarea></td>
<td><center><br>
    Zoho (<?php echo $zoho;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $zohocom;?></textarea></td>
<td><center><br>
    Protonmail (<?php echo $proton;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $protonmail;?></textarea></td>
<td><center><br>
    Inbox.com (<?php echo $inbox;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $inboxcom;?></textarea></td>
<td><center><br>
    Yandex (<?php echo $yandex;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $yandexcom;?></textarea></td>
<td><center><br>
    BT Internet (<?php echo $btinternet;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $btinternetcom;?></textarea></td></tr>
<tr>
<td><center><br>
    Vodafone (<?php echo $vodafone;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $vodafonecom;?></textarea></td>
<td><center><br>
    Sky.com (<?php echo $sky;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $skycom;?></textarea></td>
<td><center><br>
    Slingshot NZ (<?php echo $slingshot;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $slingshotconz;?></textarea></td>
<td><center><br>
    Virginmedia (<?php echo $virginmedia;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $virginmediacom;?></textarea></td>
<td><center><br>
    Charter (<?php echo $charter;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $charternet;?></textarea></td>
<td><center><br>
    Verizon (<?php echo $verizon;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $verizonnet;?></textarea></td>
<td><center><br>
    T-Online (<?php echo $tonline;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $tonlinede;?></textarea></td></tr>
<tr>
<td><center><br>
    Optusnet (<?php echo $optus;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $optusnet;?></textarea></td>
<td><center><br>
    Rogers.com (<?php echo $rogers;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $rogerscom;?></textarea></td>
<td><center><br>
    Skymesh (<?php echo $skymesh;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $skymeshcom;?></textarea></td>
<td><center><br>
    Westnet.com.au (<?php echo $westnet;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $westnetcom;?></textarea></td>
<td><center><br>
    Ozemail (<?php echo $ozemail;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $ozemailcom;?></textarea></td>
<td><center><br>
    Signet.com.sg (<?php echo $singnet;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $singnetcom;?></textarea></td>
<td><center><br>
    Iinet.net.au (<?php echo $iinet;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $iinetnet;?></textarea></td></tr>
<tr>
<td><center><br>
    Postmaster.co.uk (<?php echo $postmaster;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $postmastercouk;?></textarea></td>
<td><center><br>
    Orcon Net NZ (<?php echo $orconnz;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $orconnetnz;?></textarea></td>
<td><center><br>
    Aim (<?php echo $aim;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $aimcom;?></textarea></td>
<td><center><br>
    xtra (<?php echo $xtra;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $xtraconz;?></textarea></td>
<td><center><br>
    CableOne (<?php echo $cableone;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $cableonenet;?></textarea></td>
<td><center><br>
    Centurylink (<?php echo $centurylink;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $centurylinknet;?></textarea></td>
<td><center><br>
    Cox (<?php echo $cox;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $coxnet;?></textarea></td>
</tr>
<tr>
<td><center><br>
    Coxmail (<?php echo $coxmail;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $coxmailcom;?></textarea></td>
<td><center><br>
    Earthlink (<?php echo $earthlink;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $earthlinknet;?></textarea></td>
<td><center><br>
    Embarq mail (<?php echo $embarqmail;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $embarqmailcom;?></textarea></td>
<td><center><br>
    Juno mail (<?php echo $juno;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $junocom;?></textarea></td>
<td><center><br>
    Netzero (<?php echo $netzero;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $netzeroo;?></textarea></td>
<td><center><br>
    Optonline.net (<?php echo $optonline;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $optonlinenet;?></textarea></td>
<td><center><br>
    Qwest (<?php echo $qwest;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $qwestnet;?></textarea></td>
</tr>
<tr>
<td><center><br>
    Us.army.mil (<?php echo $usarmy;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $usarmymil;?></textarea></td>
<td><center><br>
    Talktalk (<?php echo $talktalk;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $talktalknet;?></textarea></td>
<td><center><br>
    Blueyonder (<?php echo $blueyonder;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $blueyondercouk;?></textarea></td>
<td><center><br>
    Virgin (<?php echo $virgin;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $virginnet;?></textarea></td>
<td><center><br>
    Optimum (<?php echo $optimum;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $optimumnet;?></textarea></td>
<td><center><br>
    Hinet (<?php echo $hinet;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $hinetnet;?></textarea></td>
<td><center><br>
    Other Web (<?php echo $nn-1;?>)<br><p>
<textarea class="form-control" name="othersx" rows="10" ><?php echo $ather;?></textarea></td>