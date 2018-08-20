
<style>



.accordian {
	width: 1920px; height: 320px;
	overflow: hidden;
	
	/*Time for some styling*/
	margin:auto;
	box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
	-webkit-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
	-moz-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
}



.accordian li {
	position: relative;
	display: block;
	width: 275px;
	float: left;
	
	border-left: 1px solid #888;
	
	box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
	-webkit-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
	
	/*Transitions to give animation effect*/
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	/*If you hover on the images now you should be able to 
	see the basic accordian*/
}

/*Reduce with of un-hovered elements*/
.accordian ul:hover li {width: 275px;}
/*Lets apply hover effects now*/
/*The LI hover style should override the UL hover style*/
.accordian ul li:hover {width: 500px;}


.accordian li img {
	display: block;
}

/*Image title styles*/
.image_title {
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	left: 0; bottom: 0;	
width: 640px;	

}
.image_title a {
	display: block;
	color: #fff;
	text-decoration: none;
	padding: 20px;
	font-size: 16px;
}
</style>
<!-- We will make a simple accordian with hover effects 
The markup will have a list with images and the titles-->
<div class="accordian" style="margin-left: -36px;">
    <ul>
       
		<li>
			<div class="image_title">
				<a href="#">Kitchens</a>
			</div> 
			<a href="#">
				<img src="image/application/big-1.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Doors</a>
			</div>
			<a href="#">
				<img src="image/application/big-2.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Cabinets</a>
			</div>
			<a href="#">
				<img src="image/application/big-3.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Columns</a>
			</div>
			<a href="#">
				<img src="image/application/big-4.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Wardrobe</a>
			</div>
			<a href="#">
				<img src="image/application/big-5.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Furniture</a>
			</div>
			<a href="#">
				<img src="image/application/big-6.jpg"/>
			</a>
		</li>
			
			
	</ul>
</div>
