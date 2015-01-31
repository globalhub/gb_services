//var serviceURL = "http://localhost/ronmobile/services/";
var serviceURL = "http://localhost/mbjson/";
//var serviceURL = "http://muveebound.com/mapp/services/mbjson/";
//var serviceURL = "http://166.78.185.95/doxa360/RON/services/";
var serviceURL =  "http://localhost/gb_services/";
var members;
var fbkemail;

function allstaffmembers() {
	$.mobile.pageloading();
	$.getJSON(serviceURL + 'getmembers.php', function(data) {
		$('.grid li').remove();
		members = data;
		$.each(members, function(index, member) {
			$('.grid').append('<li><a href="#">' +
					'<img src="images/member.png"/>'
					'<h4>'+member.title+ ' '+member.first_name+' '+member.last_name'</h4>'+
					'<p>'+member.job_description+'</p>' +
					'<br>'+
					'<p>'+member.unit+'</p>'+
					'</a></li>');
		});
		$('.grid').listview('refresh');
		
	});
	
}

$('#home').live('pageshow', function(event) {
	
	allstaffmembers();
	
});