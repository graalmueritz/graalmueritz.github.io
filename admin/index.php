<?php
  $saving = $_REQUEST['saving'];
  if ($saving == 1) { 
    $data = $_POST['data'];
	$file = "kalender-aurum.txt"; 
 
    $fp = fopen($file, "w") or die("Kann die Datei $file nich finden zum schreiben!"); 
    fwrite($fp, $data) or die("Konnte die Daten nicht schreiben!"); 
 
    fclose($fp); 
    echo "Villa Aurum erfolgreich gespeichert!";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Administrator Bereich - Belegung der Ferienwohnung</title>
	<style type="text/css">
@import "javascript/jquery.datepick.css";
</style>
	<script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/javastuff.js"></script>
	<script type="text/javascript" src="javascript/jquery.datepick.js"></script>
	<script type="text/javascript" src="javascript/jquery.datepick-de.js"></script>
	<script type="text/javascript">
	$(function() {
		$('#datepicker').datepick({
			multiSelect: 999,
			multiSeparator: ',',
			monthsToShow: 3,
			showButtonPanel: true,
			dateFormat: 'yyyy-mm-dd',
			showAnim: 'fadeIn'
		});
	});
	</script>
	<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
    <div class="wrapper">
      <div class="admin_header"><img src="images/admin_header.jpg" alt="Ferienwohnung Kastanienzweig Berlin" width="920" height="150"></div>
      <div class="menu_wrap">
      	<div class="menu_1"></div>
        <div class="menu_2"><a href="index.php" target="_self"><img src="images/menu_2.png" alt="Belegung Villa Aurum" width="169" height="31" border="0" /></a></div>
        <div class="menu_3"></div>
        <div class="menu_4"><a href="index2.php" target="_self"><img src="images/menu_4.png" alt="Belegung Haus Odin" width="163" height="31" border="0" /></a></div>
        <div class="menu_5"></div>
      </div>
      <div class="demo">
        <div style="margin-top:10px; font-size:18px; text-align:center;">Administrator Bereich - Belegung der Ferienwohnung Aurum<br />
          <span style="font-size:13px;">(bitte auf das weisse Feld klicken und dann erscheint automatisch der Kalender)</span></div>
        <form name="form1" method="post" action="index.php?saving=1">
          <div style="margin-top:10px;">
            <textarea name="data" cols="50" rows="10" id="datepicker"><?php $file = "kalender-aurum.txt"; if (!empty($file)) {$file = file_get_contents("$file"); echo $file.',';}?></textarea>
          </div>
          <div class="but_speichern">
          	<input type="submit" value=" ">
          </div>
        </form>
      </div>
    </div>
</body>
</html>
