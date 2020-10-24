$(document).ready(function() {
  // example-1 zero confiuration
  $('#dataTable-1').DataTable();
  
  // example-2 Scrollbar no pagination sort field 5 Salary
  	var table = $('#dataTable-2').dataTable( {
		"order": [[ 5, "desc" ]],
		//"pageLength": 50,
		"scrollY":        "452px",
    "scrollCollapse": true,
    "paging":         false,
		"fixedHeader": true,
		"language": {
        "decimal": ".",
        "thousands": ","
    },
		"createdRow": function ( row, data, index ) {
			$('td', row).eq(0).addClass('text-left');
			$('td', row).eq(3).addClass('text-right');
			$('td', row).eq(5).addClass('text-right');	
		}
});
  
 /* example-3 Google Sheet to DataTable
	here is a link to my sheetTable  https://docs.google.com/spreadsheets/u/0/d/1YXIerv8HS39EgRTCaiGHMDwWgGGIi5tmpgyAkGZOexI/pubhtml
	take a look there first and then make your own
	step 1 go to your google sheets make a new sheet The first row is your field names
	step 2 publish for web
	step 3 share to all with this link
	step 4 copy your sheetID from your link and paste it in sAjaxSourse below between list/ 'your sheet Id Here' /od6
	step 5 edit the mDataProps to your fieldnames and you are ready 
 
 */
   $('#dataTable').DataTable( {
  "order": [[ 6, "desc" ]],
	"language": {
    "decimal": ",",
    "thousands": "."
  },
  //"pageLength": 50,
  "fixedHeader": true,
  "bServerSide":false,
	"bProcessing":true,
	"sAjaxDataProp": "feed.entry",
	"sAjaxSource": "https://spreadsheets.google.com/feeds/list/1YXIerv8HS39EgRTCaiGHMDwWgGGIi5tmpgyAkGZOexI/od6/public/values?alt=json",
	"aoColumns": [
		{ "mDataProp": "gsx$ano.$t" },
		{ "mDataProp": "gsx$classe.$t" },
		{ "mDataProp": "gsx$raza.$t" },
		{ "mDataProp": "gsx$ejemplar.$t" },
		{ "mDataProp": "gsx$nombre.$t" },
		{ "mDataProp": "gsx$puesto.$t" },
		{ "mDataProp": "gsx$puntosacu.$t" },
		{ "mDataProp": "gsx$presentacionesvalidas.$t" },
		{ "mDataProp": "gsx$prestot.$t" }
	],
	
	"initComplete": function () {
        var api = this.api();
        api.$('td').click( function () {
			api.search( this.innerHTML ).draw();
		} );
    },
	"createdRow": function ( row, data, index ) {
		$('td', row).eq(5).addClass('text-right');
    $('td', row).eq(6).addClass('text-right');
		$('td', row).eq(7).addClass('text-right');
		$('td', row).eq(8).addClass('text-right');	
    }
 } );
});