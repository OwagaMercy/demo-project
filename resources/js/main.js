$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="ID" id="ID"></td>' +
            '<td><input type="text" class="form-control" name="Project Reference Number" id="Project Name"></td>' +
            '<td><input type="text" class="form-control" name="Project Name" id="project name"></td>' +
            '<td><input type="text" class="form-control" name="Grant Amount" id="amount"></td>' +
            '<td><input type="text" class="form-control" name="Office Implementation" id="department"></td>' +
            '<td><input type="text" class="form-control" name="Date GCF" id="date"></td>' +
            '<td><input type="text" class="form-control" name="Country" id="name"></td>' +
            '<td><input type="text" class="form-control" name="Readiness" id="readiness"></td>' +
            '<td><input type="text" class="form-control" name="Readiness Type" id="readiness type"></td>' +
            '<td><input type="text" class="form-control" name="Status" id="status"></td>' +
            '<td><input type="text" class="form-control" name="Start Date" id="date></td>' +
            '<td><input type="text" class="form-control" name="End Date" id="date"></td>' +
            '<td><input type="text" class="form-control" name="Duration" id="date"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
