function test()
{
    var office = document.getElementById('office_select').value;
    alert(office);
}

function search()
{
    var office_select = document.getElementById("office_select").value
    var keyword = document.getElementById("keyword").value
    var formData = new FormData();
    formData.append('office', office_select);
    formData.append('keyword', keyword);
	$.ajax({
			url: 'api/query.php',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
                        console.log(response);
                        var obj = JSON.parse(response);  
                    }				
			});
}
function repair()
{
    alert("Complete...");
}