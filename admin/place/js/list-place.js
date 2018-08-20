
       //edit package by id
       function Deleted(id) {
              var r = confirm("Are sure you want to delete package..!");
              if (r==true) {
                     $('#form_delete_'+id).submit();
              }
              
       }

	