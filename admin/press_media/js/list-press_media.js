
		$(function(){
			var link_div = ""; 
			link_div += "<div class='col-xs-6'>"+
                        "<a class='btn bg-yellow mbottom20' data-toggle='modal' data-target='#compose-modal' align='right' >"+
                        "<i class='fa fa-plus'></i> &nbsp;Add Latest press_media</a>"+
						"</div>";
			$("table.table_above").prev().prepend(link_div);
			$("table.table_above").prev().children('div').eq(1).remove();         
			$("table.table_above").prev().find("div.col-xs-6").removeClass("col-xs-6").addClass("col-xs-6");    
		});
       
		//Add press_media Form
		function validate_form() {
			$("#add-press_media-form").parsley();
		}
       
       //edit press_media by id
       function editpress_media(id) {
              $.post("ajax.controller.php", {
              id:id,
              request: "edit_press_media"
              }, function(data){
                     if (data.result) {
                     var line="";
                     line +='<div class="modal-content">'+
                                   '<div class="modal-header">'+
                                       '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
                                       '<h4 class="modal-title"><i class="fa fa-plus-square"></i>&nbsp;Edit press_media</h4>'+
                                   '</div>'+
                                   '<form action="#" method="post" id="edit_press_media_form" name="edit_press_media_form" enctype="multipart/form-data" data-parsley-validate>'+
                                       '<input type="hidden" name="id" id="id" value="'+data.result.id+'"/>'+
                                       '<div class="modal-body">'+
                                          '<div class="form-group">'+
                                             '<img src="'+data.result.press_media_image+'" width="100px"><br>'+
                                             '<label for="Image">Image</label>'+
                                             '<input type="file" name="press_media_image" id="press_media_image" class=""><p class="help-block">370 X 407 ( In Pixel )</p>'+
                                           '</div>'+
										   
										  '<div class="form-group">'+
                                               '<label for="Title">Title</label>'+
                                               '<textarea name="press_media_title" id="press_media_title" class="form-control" placeholder="Enter blog Title..." style="height: 40px;" required>'+data.result.press_media_title+'</textarea>'+
                                           '</div>'+
										   '<div class="form-group">'+
                                               '<label for="Title">Link</label>'+
                                               '<textarea name="press_media_link" id="press_media_link" class="form-control" placeholder="Enter blog Link..." style="height: 40px;" required>'+data.result.press_media_link+'</textarea>'+
                                           '</div>'+
                                          
                                           '<div class="form-group">'+
                                               '<label for="Description"> Description</label>'+
                                               '<textarea name="press_media_desc" id="press_media_desc" class="form-control" placeholder="Enter Description..." style="height: 120px;" required>'+data.result.press_media_desc+'</textarea>'+
                                           '</div>'+
                                       '</div>'+
                                       '<div class="modal-footer clearfix">'+
                                           '<input type="hidden" name="submit" id="submit" value="addform"/>'+
                                           '<input type="hidden" name="url" id="url" value="Edit"/>'+
                                           '<button type="submit" class="btn btn-primary ><i class="fa fa-plus-square"></i>Update blog</button>'+
                                       '</div>'+
                                   '</form>'+
                               '</div>';
                               line +='<script>'+
                                      '$("#edit_press_media_form").parsley();'+    
                                      '</script>';
                               $("#edit_form_press_media").modal('show');
                               $("#addAllform").html(line);
                     }
              },"json");
       }
       
       //edit press_media by id
       function Deleted(id) {
              var r = confirm("Are sure you want to delete press_media..!");
              if (r==true) {
                     $('#form_delete_'+id).submit();
              }
              
       }

       