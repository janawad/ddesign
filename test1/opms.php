<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <form action="2.php" method="post">
 <p>Choose type</p>
    <p>Server:
        <select id="email" name="email">
          <option>Choose Database Type</option>
          <option value="place">1</option>
          <option value="packing">2</option>
		  <option value="shipping">3</option>
          <option value="placed">4</option>
          
        </select>
    </p>
    <div id="otherServer">
        <p>Server:
            <input type="text" name="server_name"/>
        </p>
        <p>Port:
            <input type="text" name="port_no"/>
        </p>
    </div>
    <p align="center">
        <input type="submit" value="Submit!" />
    </p>
	</form>
	<script>
	$(document).ready(function () {
    toggleFields(); // call this first so we start out with the correct visibility depending on the selected form values
    // this will call our toggleFields function every time the selection value of our other field changes
    $("#email").change(function () {
        toggleFields();
    });

});
// this toggles the visibility of other server
function toggleFields() {
    if ($("#email").val() === "shipping")
        $("#otherServer").show();
    else
        $("#otherServer").hide();
}
	</script>
	
	
	 