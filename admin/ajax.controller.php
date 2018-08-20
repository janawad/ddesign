<?php
	switch($_REQUEST['request']){
    /*
     *update packages_category by id
     */
    case "edit_packages_category":
        require_once "clasess/packages_category.class.php";
        $packages_category = new packages_category();
        $result = $packages_category->getDetails($_REQUEST['id']);
        echo json_encode(array("result"=>$result));
    break;
	/*
    *update college by id
    */
	case "edit_college":
        require_once "clasess/college.class.php";
        $college = new college();
        $result = $college->getCollegeById($_REQUEST['id']);
        $course_arr = $college->getAllCourseList();
        echo json_encode(array("result"=>$result,"course_arr"=>$course_arr));
    break;
	/*
    *update testimonials by id
    */
	case "edit_testimonials":
		require_once "clasess/testimonials.class.php";
		$testimonial = new testimonials();
		$result = $testimonial->getTestimonialsByID($_REQUEST['id']);
		echo json_encode(array("result"=>$result));
	break;
	/*
    *update tours by id
    */
	case "edit_tours":
		require_once "clasess/tours.class.php";
		$tours = new tours();
		$result = $tours->gettoursByID($_REQUEST['id']);
		echo json_encode(array("result"=>$result));
	break;
	/*
    *update Latestblog by id
    */
	case "edit_blog":
		require_once "clasess/blog.class.php";
		$blog = new blog();
		$result = $blog->getblogByID($_REQUEST['id']);
		echo json_encode(array("result"=>$result));
	break;
	/*
    *update Latestabout by id
    */
	case "edit_about":
		require_once "clasess/about.class.php";
		$about = new about();
		$result = $about->getaboutByID($_REQUEST['id']);
		echo json_encode(array("result"=>$result));
	break;
	/*
    *update Latestpress_media by id
    */
	case "edit_press_media":
		require_once "clasess/press_media.class.php";
		$press_media = new press_media();
		$result = $press_media->getpress_mediaByID($_REQUEST['id']);
		echo json_encode(array("result"=>$result));
	break;
	/*
    *update CMS by id
    */
	case "edit_cms":
        require_once "clasess/cms.class.php";
        $cms = new cms();
        $result = $cms->getCmsById($_REQUEST['id']);
        echo json_encode(array("result"=>$result));
    break;
	/*
    *update ContactUs by id
    */
	case "edit_contact":
		require_once "clasess/contact.class.php";
		$contact = new contact();
		$result = $contact->getContactByID($_REQUEST['id']);
		echo json_encode(array("result"=>$result));
	break;
	/*
    *update facts by id
    */
	case "edit_facts":
		require_once "clasess/facts.class.php";
		$facts = new facts();
		$result = $facts->getFactsByID($_REQUEST['id']);
		echo json_encode(array("result"=>$result));
	break;
}
?>