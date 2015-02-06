var serviceURL =  "http://localhost/gb_services/";
var testimonies;

function alltestimonies() {
	//$.mobile.pageloading();
	$.getJSON(serviceURL + 'get_testimony.php', function(data) {
		$('#testify_list li').remove();
		testimonies = data;
		$.each(testimonies, function(index, testimony) {
			$('#testify_list').append('<li><a href="#">' +
					'<img src="images/member.png"/>'
					'<h4>'+testimony.name+ ' </h4>'+
					'<p>'+testimony.testimony+'</p>' +
					'</a></li>');
		});
		$('#testify_list').listview('refresh');
		
	});
	
}

$('#home').live('pageshow', function(event) {
	
	alltestimonies();

});


$('#add').live('pageshow', function(event) {
	
	$('#submit').click(function (){
	
  var testimonyform = $.ajax({  
  url: (serviceURL + 'add_testimony.php'),
  type: "GET",  
  data: {
	  name: $('#name').val(),
      testimony: $('#testimony').val()

        },
   datatype:"json"
   
    });
	
	 testimonyform.done(function (response, textStatus, jqXHR) {
	 	alert('testimony added');
});  
  
  });
});