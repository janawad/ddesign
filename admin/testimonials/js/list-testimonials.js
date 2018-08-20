
		$(function(){
			var link_div = ""; 
			link_div += "<div class='col-xs-6'>"+
                        "<a class='btn bg-yellow mbottom20' data-toggle='modal' data-target='#compose-modal' align='right' >"+
                        "<i class='fa fa-plus'></i> &nbsp;Add Latest Testimonials</a>"+
						"</div>";
			$("table.table_above").prev().prepend(link_div);
			$("table.table_above").prev().children('div').eq(1).remove();         
			$("table.table_above").prev().find("div.col-xs-6").removeClass("col-xs-6").addClass("col-xs-6");    
		});
       
		//Add testimonials Form
		function validate_form() {
			$("#add-testimonials-form").parsley();
		}
       
       //edit testimonials by id
       function edittestimonials(id) {
              $.post("ajax.controller.php", {
              id:id,
              request: "edit_testimonials"
              }, function(data){
                     if (data.result) {
                     var line="";
                     line +='<div class="modal-content">'+
                                   '<div class="modal-header">'+
                                       '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
                                       '<h4 class="modal-title"><i class="fa fa-plus-square"></i>&nbsp;Edit Testimonials</h4>'+
                                   '</div>'+
                                   '<form action="#" method="post" id="edit_testimonials_form" name="edit_testimonials_form" enctype="multipart/form-data" data-parsley-validate>'+
                                       '<input type="hidden" name="id" id="id" value="'+data.result.id+'"/>'+
                                       '<div class="modal-body">'+
                                          '<div class="form-group">'+
                                             '<img src="'+data.result.testimonials_image+'" widht="100px" height="100px"><br>'+
                                             '<label for="Image">Image</label>'+
                                             '<input type="file" name="testimonials_image" id="testimonials_image" class=""><p class="help-block">Iamge size is 142 X 142 ( In pixel )</p>'+
                                           '</div>'+
										   
										   '<div class="form-group">'+
                                               '<label for="Name">Testimonials Name</label>'+
                                               '<textarea name="testimonials_name" id="testimonials_name" class="form-control" placeholder="Enter testimonials Name..." style="height: 40px;" required>'+data.result.testimonials_name+'</textarea>'+
                                           '</div>'+
										   
										   '<div class="form-group">'+
                                               '<label for="position">About him- Company name, Domain, Position..... </label>'+
                                               '<textarea name="position" id="position" class="form-control" placeholder="About him- Company name, Domain, Position..... " style="height: 40px;" required>'+data.result.position+'</textarea>'+
                                           '</div>'+
										   
                                          '<div class="form-group">'+
                                               '<label for="Description"> Description</label>'+
                                               '<textarea name="testimonials_desc" id="testimonials_desc" class="form-control" placeholder="Enter Description..." style="height: 120px;" required>'+data.result.testimonials_desc+'</textarea>'+
                                           '</div>'+
                                       '</div>'+
                                       '<div class="modal-footer clearfix">'+
                                           '<input type="hidden" name="submit" id="submit" value="addform"/>'+
                                           '<input type="hidden" name="url" id="url" value="Edit"/>'+
                                           '<button type="submit" class="btn btn-primary ><i class="fa fa-plus-square"></i>Update testimonials</button>'+
                                       '</div>'+
                                   '</form>'+
                               '</div>';
                               line +='<script>'+
                                      '$("#edit_testimonials_form").parsley();'+    
                                      '</script>';
                               $("#edit_form_testimonials").modal('show');
                               $("#addAllform").html(line);
                     }
              },"json");
       }
       
       //edit testimonials by id
       function Deleted(id) {
              var r = confirm("Are sure you want to delete Testimonials..!");
              if (r==true) {
                     $('#form_delete_'+id).submit();
              }
              
       }

       