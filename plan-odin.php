<?php
$datei = file_get_contents('admin/kalender-odin.txt');
$test2 = "'".str_replace(",", "', '", $datei)."'";
$datum = date("Y-m-d");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ferienwohnung, Villa Aurum, Haus Odin, günstig, preiswert, komfortable, Familie, Reise, Urlaub, entspannen, Übernachtung, Frühstück, Ausstattung, Hotel, Motel, Beherbergung, Zimmer, Unterkunft, kinderfreundlich, buchen, Graal Müritz, fewo, Ostsee"/>
<meta name="description" content="Homepage der Ferienwohnungen Villa Aurum & Haus Odin in Graal-Müritz."/>
<meta name="Content-Language" content="de"/>
<meta name="Author" content="Sekart-Design"/>
<meta name="Publisher" content="Sekart-Design"/>
<meta name="Copyright" content="Familie Homola"/>
<meta name="Language" content="Deutsch"/>
<meta name="robots" content="all"/>
<meta name="zipcode" content="12435"/>
<meta name="city" content="Berlin"/>
<meta name="state" content="Berlin"/>
<meta name="country" content="DE"/>
<link rel="stylesheet" href="planstyle.css" type="text/css" />
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
<title>Haus Odin - Belegungsplan</title>
<script type="text/javascript" src="javascript/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="javascript/datepicker.js"></script>
<script type="text/javascript" src="javascript/eye.js"></script>
<script type="text/javascript">
(function($){
	var initLayout = function() {
		$('#date').DatePicker({
			flat: true,
			date: '2008-07-31',
			current: '2008-07-31',
			calendars: 3,
			starts: 1,
			view: 'years'
		});
		var now = new Date();
		now.addDays(+9999);
		var now2 = new Date();
		now2.addDays(0);
		now2.setHours(0,0,0,0);
		$('#date2').DatePicker({
			flat: true,
			date: [<?php echo $test2; ?>],
			current: <?php echo "'" . $datum . "'"; ?>,
			format: 'Y-m-d',
			calendars: 3,
			mode: 'multiple',
			onRender: function(date) {
				return {
					disabled: (date.valueOf() < now.valueOf()),
					className: date.valueOf() == now2.valueOf() ? 'datepickerSpecial' : false
				}
			},
			onChange: function(formated, dates) {
			},
			starts: 1
		});
		
	};	
	var showTab = function(e) {
		var tabIndex = $('ul.navigationTabs a')
							.removeClass('active')
							.index(this);
		$(this)
			.addClass('active')
			.blur();
		$('div.tab')
			.hide()
				.eq(tabIndex)
				.show();
	};
	
	EYE.register(initLayout, 'init');
})
(jQuery);
</script>
</head>
<body>
<div>
  <div class="plan_header"><img src="images/details_odin.png" alt="Haus Odin" width="246" height="45" /><br />
    Belegunsplan</div>
  <div class="plan_wrap">
    <div id="date2"></div>
  </div>
  <div class="plan_info">
  	<div class="plan_info_box">!</div>
    <div style="height:20px; float:left; line-height:20px;">Tage mit dunkelblauem Hintergrund sind bereits reservierte Tage.</div>
    <div style="clear:both;"></div>
  </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15475713-2");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>