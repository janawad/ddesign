
       $(function(){
       var link_div = ""; 
       link_div += "<div class='col-xs-6'>"+
                        "<a class='btn bg-yellow mbottom20' data-toggle='modal' data-target='#compose-modal' align='right' >"+
                        "<i class='fa fa-plus'></i> &nbsp;Add New Packages Category</a>"+
                    "</div>";
          $("table.table_above").prev().prepend(link_div);
          $("table.table_above").prev().children('div').eq(1).remove();         
          $("table.table_above").prev().find("div.col-xs-6").removeClass("col-xs-6").addClass("col-xs-6");    
       });
       
       //Add packages_category Form
       function validate_form() {
          $("#add-packages_category-form").parsley();
       }
       
       //edit packages_category by id
       function editpackages_category(id) {
              $.post("ajax.controller.php", {
              id:id,
              request: "edit_packages_category"
              }, function(data){
                     if (data.result) {
                     var line="";
                     line +='<div class="modal-content">'+
                                   '<div class="modal-header">'+
                                       '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
                                       '<h4 class="modal-title"><i class="fa fa-plus-square"></i>&nbsp;Edit Category</h4>'+
                                   '</div>'+
                                   '<form action="#" method="post" id="edit_packages_category_form" name="edit_packages_category_form" enctype="multipart/form-data" data-parsley-validate>'+
                                       '<input type="hidden" name="id" id="id" value="'+data.result.id+'"/>'+
                                       '<div class="modal-body">'+
                                          '<div class="form-group">'+
                                             '<img src="'+data.result.packages_category_image+'" widht="100px" height="100px">'+
                                             '<label for="Image">Image</label>'+
                                             '<input type="file" name="packages_category_image" id="packages_category_image" class="form-control">'+
                                           '</div>'+
                                           '<div class="form-group">'+
                                               '<div class="input-group">'+
                                                   '<label for="packages_category Name">Category Name</label>'+
                                                   '<textarea name="packages_category_name" id="packages_category_name" type="text" class="form-control" placeholder="Enter packages_category Name" style="height: 40px;" required>'+data.result.packages_category_name+'</textarea>'+
                                               '</div>'+
                                           '</div>'+
                                           '<div class="form-group">'+
                                               '<label for="packages_category Description">Category Description</label>'+
                                               '<textarea name="description" id="description" class="form-control" placeholder="Enter Description..." style="height: 120px;">'+data.result.description+'</textarea>'+
                                           '</div>'+
                                       '</div>'+
                                       '<div class="modal-footer clearfix">'+
                                           '<input type="hidden" name="submit" id="submit" value="addform"/>'+
                                           '<input type="hidden" name="url" id="url" value="Edit"/>'+
                                           '<button type="submit" class="btn btn-primary ><i class="fa fa-plus-square"></i>Update Category</button>'+
                                       '</div>'+
                                   '</form>'+
                               '</div>';
                               line +='<script>'+
                                      '$("#edit_packages_category_form").parsley();'+    
                                      '</script>';
                               $("#edit_form_packages_category").modal('show');
                               $("#addAllform").html(line);
                     }
              },"json");
       }
       
       //edit packages_category by id
       function Deleted(id) {
              var r = confirm("Are sure you want to delete packages_category..!");
              if (r==true) {
                     $('#form_delete_'+id).submit();
              }
              
       }

       