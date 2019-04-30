function test()
{
    var office = document.getElementById('office_select').value;
    alert(office);
}
function render_card(equip_name)
{
    var card = document.getElementById('card-area')
    card.innerHTML = card.innerHTML + '<div class="col-lg-12"><div class="card mt-2"><div class="card-body">'+equip_name+'</div></div></div>';
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
                        //console.log(response);
                        var card = document.getElementById('card-area')
                        card.innerHTML = '';
                        var obj = JSON.parse(response);
                        var i = 0;
						while(obj[i])
						{
                            render_card(obj[i].equip_name);
                            console.log(obj[i].equip_name);
							i++;
                        }  
                        var num = document.getElementById('search_result');
                        num.innerHTML = 'ผลการค้นหา ' + i +  ' รายการ';
                    }				
			});
}
function repair()
{
    alert("Complete...");
}