
/**
 *  Rev Slider for HOME 1
 */
var tpj=jQuery;
			
var rev_slider1;
tpj(document).ready(function() {
	if(tpj("#rev_slider_home_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_home_1");
	}else{
		rev_slider1 = tpj("#rev_slider_home_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"//dev.rslider/wp-content/plugins/revslider/public/assets/js/",
			dottedOverlay:"none",
			sliderLayout:"fullwidth",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"hades",
					enable:true,
					hide_onmobile:false,
					hide_onleave:false,
					tmp: '<div class="tp-arr-allwrapper"><div class="tp-nexpre"></div><div class="tp-arr-imgholder"></div></div>',
					left: {
						h_align:"left",
						v_align:"bottom",
						h_offset:15,
						v_offset:200
					},
					right: {
						h_align:"right",
						v_align:"bottom",
						h_offset:15,
						v_offset:200
					}
				},
				bullets: {
					enable:false,
					hide_onmobile:false,
					hide_under:768,
					style:"hermes",
					hide_onleave:false,
					direction:"horizontal",
					h_align:"center",
					v_align:"bottom",
					h_offset:0,
					v_offset:30,
					space:5,
					tmp:''
				},
				thumbnails: {
					style: "hebe",
					enable: false,
					width: 100,
					height: 100,
					min_width: 100,
					wrapper_padding: 5,
					wrapper_color: "transparent",
					wrapper_opacity: "1",
					tmp: '<span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span>',
					visibleAmount: 3,
					hide_onmobile: false,
					hide_onleave: false,
					direction: "horizontal",
					span: false,
					position: "inner",
					space: 30,
					h_align: "center",
					v_align: "bottom",
					h_offset: 0,
					v_offset: 0
				}							
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[650,600,550,450],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
				type:"mouse",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}

	// RsTypewriterAddOn(tpj, rev_slider1);
});	/*ready*/