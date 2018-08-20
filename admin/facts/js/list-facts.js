
		$(function(){
			var link_div = ""; 
			link_div += "<div class='col-xs-6'>"+
                        "<a class='btn bg-yellow mbottom20' data-toggle='modal' data-target='#compose-modal' align='right' >"+
                        "<i class='fa fa-plus'></i> &nbsp;Add Latest Facts</a>"+
						"</div>";
			$("table.table_above").prev().prepend(link_div);
			$("table.table_above").prev().children('div').eq(1).remove();         
			$("table.table_above").prev().find("div.col-xs-6").removeClass("col-xs-6").addClass("col-xs-6");    
		});
       
		//Add facts Form
		function validate_form() {
			$("#add-facts-form").parsley();
		}
       
       //edit facts by id
       function editfacts(id) {
              $.post("ajax.controller.php", {
              id:id,
              request: "edit_facts"
              }, function(data){
                     if (data.result) {
                     var line="";
                     line +='<div class="modal-content">'+
                                   '<div class="modal-header">'+
                                       '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
                                       '<h4 class="modal-title"><i class="fa fa-plus-square"></i>&nbsp;Edit Facts</h4>'+
                                   '</div>'+
                                   '<form action="#" method="post" id="edit_facts_form" name="edit_facts_form" enctype="multipart/form-data" data-parsley-validate>'+
                                       '<input type="hidden" name="id" id="id" value="'+data.result.id+'"/>'+
                                       '<div class="modal-body">'+
                                          '<div class="form-group">'+
                                             '<img src="'+data.result.facts_image+'" widht="100px" height="100px"><br><p>370 X 402 ( In Pixel )</p>'+
                                             '<label for="Image">Image</label>'+
                                             '<input type="file" name="facts_image" id="facts_image" class="">'+
                                           '</div>'+
										   
										   '<div class="form-group">'+
                                               '<label for="Title">Title</label>'+
                                               '<textarea name="facts_title" id="facts_title" class="form-control" placeholder="Enter Facts Title..." style="height: 40px;" required>'+data.result.facts_title+'</textarea>'+
                                           '</div>'+
										   
                                           '<div class="form-group">'+
                                               '<label for="Description"> Description</label>'+
                                               '<textarea name="facts_desc" id="facts_desc" class="form-control" placeholder="Enter Description..." style="height: 120px;" required>'+data.result.facts_desc+'</textarea>'+
                                           '</div>'+
                                       '</div>'+
                                       '<div class="modal-footer clearfix">'+
                                           '<input type="hidden" name="submit" id="submit" value="addform"/>'+
                                           '<input type="hidden" name="url" id="url" value="Edit"/>'+
                                           '<button type="submit" class="btn btn-primary ><i class="fa fa-plus-square"></i>Update Facts</button>'+
                                       '</div>'+
                                   '</form>'+
                               '</div>';
                               line +='<script>'+
                                      '$("#edit_facts_form").parsley();'+    
                                      '</script>';
                               $("#edit_form_facts").modal('show');
                               $("#addAllform").html(line);
                     }
              },"json");
       }
       
       //edit facts by id
       function Deleted(id) {
              var r = confirm("Are sure you want to delete Facts..!");
              if (r==true) {
                     $('#form_delete_'+id).submit();
              }
              
       }

       