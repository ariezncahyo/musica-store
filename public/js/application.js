jQuery(document).ready(function ($) {

	madmin.init();

	// make code pretty
	window.prettyPrint && prettyPrint();

	$("#table1").tablesorter({widgets: ['zebra']});
	$("#table2").tablesorter({widgets: ['zebra']});
	$("#table3").tablesorter({widgets: ['zebra']});
	$("#table4").tablesorter({widgets: ['zebra']});

	$('a.help-link').pageslide({
		direction: 'left'
	});

});