<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>
ExpertTV
</title>
<meta charset="UTF-8" />
<!--<link href="img/icona.ico" rel="shortcut icon" />-->
<link href="css/style.css" rel="stylesheet" />
<!-- <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> -->
 <script type="text/javascript" src="js/site.js"></script> 
 
 <!-- karusel menu -->
 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
 <script type="text/javascript" src="js/jquery.jcarousellite.js"></script>
 <!-- Optional -->
 <script type="text/javascript" src="js/jquery.easing.js"></script>
 <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
 
 <script type="text/javascript" src="js/jssor.js"></script>
 <script type="text/javascript" src="js/jssor.slider.js"></script>
 
 <script>
 $(function() {
    $(".carousel").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
});
 </script>
 
 <script>

        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Collapse Random
            { $Duration: 1000, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $JssorEasing$.$EaseOutQuad }

            //Fade in LR Chess
            , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Rotate VDouble+ out
            , { $Duration: 1000, x: -1, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Row: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.85 } }

            ////Swing Inside in Stairs
            //, { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 1.3, $Top: 2.5} }

            //Zoom HDouble+ out
            , { $Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            ////Dodge Pet Inside in Stairs
            //, { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5} }

            //Rotate Zoom+ out BL
            , { $Duration: 1200, x: 4, y: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8 } }

            //Dodge Dance Inside in Random
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5 } }

            //Rotate VFork+ out
            , { $Duration: 1200, x: -3, y: 1, $Rows: 2, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Row: 28 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.7 } }

            //Clip and Chess in
            , { $Duration: 1200, y: -1, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Top: [0.5, 0.5], $Clip: [0, 0.5] }, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12 }, $ScaleClip: 0.5 }

            ////Swing Inside in Swirl
            //, { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationSwirl, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 1.3, $Top: 2.5} }

            ////Rotate Zoom+ out
            //, { $Duration: 1200, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} }

            ////Dodge Pet Inside in ZigZag
            //, { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationZigZag, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5} }

            //Rotate Zoom- out TL
            , { $Duration: 1200, x: 0.5, y: 0.5, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.5 } }

            //Rotate Zoom- in BR
            , { $Duration: 1200, x: -0.6, y: -0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Top: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5 } }

            // Wave out Eagle
            , { $Duration: 1500, y: -0.5, $Delay: 60, $Cols: 24, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationCircle, $Easing: $JssorEasing$.$EaseInWave, $Round: { $Top: 1.5 } }

            //Expand Stairs
            , { $Duration: 1000, $Delay: 30, $Cols: 10, $Rows: 4, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: $JssorEasing$.$EaseInQuad }

            //Fade Clip out H
            , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            ////Dodge Pet Inside in Random Chess
            //, { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.2, 0.8], $Top: [0.2, 0.8] }, $ChessMode: { $Column: 15, $Row: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseLinear }, $Round: { $Left: 0.8, $Top: 2.5} }
            ];

            //Reference http://www.jssor.com/development/slider-with-caption-jquery.html
            //Reference http://www.jssor.com/development/reference-ui-definition.html#captiondefinition
            //Reference http://www.jssor.com/development/tool-caption-transition-viewer.html

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["TR"] = { $Duration: 900, x: -0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };

            _CaptionTransitions["L|IB"] = { $Duration: 1200, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
            _CaptionTransitions["R|IB"] = { $Duration: 1200, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
            _CaptionTransitions["T|IB"] = { $Duration: 1200, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };

            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 3, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["CLIP|TB"] = { $Duration: 900, $Clip: 12, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["CLIP|L"] = { $Duration: 900, $Clip: 1, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };

            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|T"] = { $Duration: 900, $Clip: 4, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };

            _CaptionTransitions["WV|B"] = { $Duration: 1200, x: -0.2, y: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Left: 1.5} };

            _CaptionTransitions["TORTUOUS|VB"] = { $Duration: 1800, y: -0.2, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} };

            _CaptionTransitions["LISTH|R"] = { $Duration: 1500, x: -0.8, $Clip: 1, $Easing: $JssorEasing$.$EaseInOutCubic, $ScaleClip: 0.8, $Opacity: 2, $During: { $Left: [0.4, 0.6], $Clip: [0, 0.4], $Opacity: [0.4, 0.6]} };

            _CaptionTransitions["RTT|360"] = { $Duration: 900, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };

            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };

            _CaptionTransitions["T|IE*IE"] = { $Duration: 1800, y: 0.8, $Zoom: 11, $Rotate: -1.5, $Easing: { $Top: $JssorEasing$.$EaseInOutElastic, $Zoom: $JssorEasing$.$EaseInElastic, $Rotate: $JssorEasing$.$EaseInOutElastic }, $Opacity: 2, $During: { $Zoom: [0, 0.8], $Opacity: [0, 0.7] }, $Round: { $Rotate: 0.5} };

            _CaptionTransitions["RTTS|R"] = { $Duration: 900, x: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} };
            _CaptionTransitions["RTTS|T"] = { $Duration: 900, y: 0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} };

            _CaptionTransitions["DDGDANCE|RB"] = { $Duration: 1800, x: -0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["DDG|TR"] = { $Duration: 1200, x: -0.3, y: 0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 0.8} };

            _CaptionTransitions["FLTTR|R"] = { $Duration: 900, x: -0.2, y: -0.1, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Top: 1.3} };
            _CaptionTransitions["FLTTRWN|LT"] = { $Duration: 1800, x: 0.5, y: 0.2, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.7], $Top: [0.1, 0.7] }, $Round: { $Top: 1.3} };

            _CaptionTransitions["ATTACK|BR"] = { $Duration: 1500, x: -0.1, y: -0.5, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseOutWave, $Top: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $During: { $Left: [0.3, 0.7], $Top: [0, 0.7] }, $Round: { $Left: 1.3} };

            _CaptionTransitions["FADE"] = { $Duration: 900, $Opacity: 2 };

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 4,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 980), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

 
</head>
<body>
<div id="root">

<div id="top">
	<div id="logo">
	&nbsp;
	</div>
	<div id="search">
		<div id="search_left">
		&nbsp;
		</div>
		<div id="search_middle">
			<div id="topline"></div>
			<input type="text" name="searchtext" id="searchtext" placeholder="Nəyi bilmək istəyirsiniz?" value="" /> 
			<div id="bottomline"></div>
		</div>
		<div id="search_right">
		
		</div>
	</div>
</div>  <!-- top div end -->


<!-- 
<button class="prev">&laquo;</button>
<button class="next">&raquo;</button>

<div class="any-class">
    <ul>
        <li><img src="img/aile_psixologiya_icon.png" style="width:42px; height:43px;"></li>
        <li><img src="img/biznes_iqtisadiyyat_icon.png" style="width:42px; height:43px;"></li>
        <li><img src="img/tehsil_icon.png" style="width:42px; height:43px;"></li>
        <li><img src="img/avtomobil_icon.png" style="width:42px; height:43px;"></li>
        <li><img src="img/saglamliq_icon.png" style="width:42px; height:43px;"></li>
		<li><img src="img/toy_nishan_icon.png" style="width:42px; height:43px;"></li>
        <li><img src="img/kulinariya_icon.png" style="width:42px; height:43px;"></li>
        <li><img src="img/huquq_icon.png" style="width:42px; height:43px;"></li>
        <li><img src="img/it_icon.png" style="width:42px; height:43px;"></li>
        <li><img src="img/din_icon.png" style="width:42px; height:43px;"></li>
    </ul>
</div>
-->


    <a href="#" class="prev">&lsaquo;</a>
    <div class="carousel">
        <ul>
        <li><a href="#"><div class="in_li"><img src="img/aile_psixologiya_icon.png"><div><span>Ailə və Psixologiya</span></div></div></a></li>
        <li><a href="#"><div class="in_li"><img src="img/biznes_iqtisadiyyat_icon.png"><div><span>Biznes, İqtisadiyyat</span></div></div></a></li>
        <li><a href="#"><div class="in_li"><img src="img/tehsil_icon.png"><div><span>Təhsil</span></div></div></a></li>
        <li><a href="#"><div class="in_li"><img src="img/avtomobil_icon.png"><div><span>Avtomobil</span></div></div></a></li>
        <li><a href="#"><div class="in_li"><img src="img/saglamliq_icon.png"><div><span>Sağlamlıq</span></div></div></a></li>
		<li><a href="#"><div class="in_li"><img src="img/toy_nishan_icon.png"><div><span>Toy və Nişan</span></div></div></a></li>
        <li><a href="#"><div class="in_li"><img src="img/kulinariya_icon.png"><div><span>Kulinariya</span></div></div></a></li>
        <li><a href="#"><div class="in_li"><img src="img/huquq_icon.png"><div><span>Hüquq</span></div></div></a></li>
        <li><a href="#"><div class="in_li"><img src="img/it_icon.png"><div><span>İT</span></div></div></a></li>
        <li><a href="#"><div class="in_li"><img src="img/din_icon.png"><div><span>Din</span></div></div></a></li>
        </ul>
    </div>
    <a href="#" class="next">&rsaquo;</a>
    <div class="clear"></div>

<!-- <div id="menu">
<!--
	<div class="menu_sub">
	<img src="img/aile_psixologiya_icon.png" />
	<span>Ailə və Psixologiya</span>
	</div>
	<div class="menu_sub">
	<img src="img/biznes_iqtisadiyyat_icon.png" />
	<span>Biznes, İqtisadiyyat</span>
	</div>
	<div class="menu_sub">
	<img src="img/tehsil_icon.png" />
	<span>Təhsil</span>
	</div>
	<div class="menu_sub">
	<img src="img/avtomobil_icon.png" />
	<span>Avtomobil</span>
	</div>
	<div class="menu_sub">
	<img src="img/saglamliq_icon.png" />
	<span>SAğlamlıq</span>
	</div>
	<div class="menu_sub">
	<img src="img/toy_nishan_icon.png" />
	<span>Toy və Nişan</span>
	</div>
	<div class="menu_sub">
	<img src="img/kulinariya_icon.png" />
	<span>Kulinariya</span>
	</div>
	<div class="menu_sub">
	<img src="img/huquq_icon.png" />
	<span>Hüquq</span>
	</div>
	<div class="menu_sub">
	<img src="img/it_icon.png" />
	<span>İT</span>
	</div>
	<div class="menu_sub">
	<img src="img/din_icon.png" />
	<span>Din</span>
	</div>	
	
</div>-->  <!-- menu div end -->


<div id="karusel">

    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->  
    <div id="slider1_container" style="position: relative; width: 1000px;
        height: 350px; overflow: hidden;">
 
        <!-- Loading Screen --> 
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> 
            </div> 
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
            </div> 
        </div> 
 
        <!-- Slides Container --> 
        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1000px; height: 350px;
            overflow: hidden;">
            <div>
                <img u="image" src="img/home/01.jpg" />
				<a class="captionOrange" href="http://www.experttv.az" style="position: absolute; top: 270px; right: 30px; padding-left:10px; padding-right:10px; ">Videoya bax</a>
                <div u="caption" t="CLIP|LR" du="1500" class="captionblue"  style="position:absolute; left:20px; top: 30px; height:30px; width:500px;"> 
                Şərh 1: Depressiyadan necə çıxmaq olar?
                </div>
				
				<div u="caption" t="FADE" t2="B" d=-450 class="captionBlack" style="position: absolute; left:700px;top:100px;width:200px;height:90px;">
                        Şərh 2:<br />
                        Independent<br />
                        Javascript Code 
                </div>
				
				<div u="caption" t="CLIP|LR" t2="B" du="2000" class="captionblue"  style="position:absolute; left:20px; top: 220px;  height:30px; width:500px;"> 
                Şərh 3: Quş südü tortu necə hazırlanır? 
                </div>

            </div>
            <div> 
                <img u="image" src="img/home/02.jpg" />
				<a class="captionOrange" href="http://www.experttv.az" style="position: absolute; top: 270px; right: 30px; padding-left:10px; padding-right:10px; ">Videoya bax</a>
            </div>
            <div> 
                <img u="image" src="img/home/03.jpg" />
				<a class="captionOrange" href="http://www.experttv.az" style="position: absolute; top: 270px; right: 30px; padding-left:10px; padding-right:10px; ">Videoya bax</a>
                
            </div>
            <div>
                <img u="image" src="img/home/04.jpg" />
				<a class="captionOrange" href="http://www.experttv.az" style="position: absolute; top: 270px; right: 30px; padding-left:10px; padding-right:10px; ">Videoya bax</a>
                
            </div>

            <!-- Example to add fixed static share buttons in slider BEGIN -->
            <!-- Remove it if no need -->
            <!-- Share Button Styles -->
            <style>
                .share-icon {
                    display: inline-block;
                    float: left;
                    margin: 4px;
                    width: 32px;
                    height: 32px;
                    cursor: pointer;
                    vertical-align: middle;
                    background-image: url(img/share/share-icons.png);
                }

                .share-facebook {
                    background-position: 0px 0px;
                }

                    .share-facebook:hover {
                        background-position: 0px -40px;
                    }

        .share-twitter {
            background-position: -40px 0px;
        }

            .share-twitter:hover {
                background-position: -40px -40px;
            }

        .share-pinterest {
            background-position: -80px 0px;
        }

            .share-pinterest:hover {
                background-position: -80px -40px;
            }

                .share-linkedin {
                    background-position: -240px 0px;
                }

                    .share-linkedin:hover {
                        background-position: -240px -40px;
                    }


                .share-googleplus {
                    background-position: -120px 0px;
                }

                    .share-googleplus:hover {
                        background-position: -120px -40px;
                    }


        .share-stumbleupon {
            background-position: -360px 0px;
        }

            .share-stumbleupon:hover {
                background-position: -360px -40px;
            }

                .share-email {
                    background-position: -320px 0px;
                }

                    .share-email:hover {
                        background-position: -320px -40px;
                    }
            </style>

            <div u="any" style="position: absolute; display: block; top: 6px; right: 16px; width: 280px; height: 40px; z-index: 10;">

                <a class="share-icon share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://jssor.com" title="Share on Facebook"></a>
                <a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://jssor.com&text=JavaScript%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20html%20TOUCH%20SWIPE%20Responsive" title="Share on Twitter"></a>
                <a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://jssor.com" title="Share on Google Plus"></a>
                <a class="share-icon share-linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http://jssor.com" title="Share on LinkedIn"></a>
                <a class="share-icon share-stumbleupon" target="_blank" href="http://www.stumbleupon.com/submit?url=http://jssor.com&title=JavaScript%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20html%20TOUCH%20SWIPE%20Responsive" title="Share on StumbleUpon"></a>
                <a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://jssor.com&media=http://jssor.com/img/site/jssor.slider.jpg&description=JavaScript%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20html%20TOUCH%20SWIPE%20Responsive" title="Share on Pinterst"></a>
                <a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20JavaScript%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20html%20TOUCH%20SWIPE%20Responsive%20http://jssor.com" title="Share by Email"></a>
            </div>
 
           
        </div> 
 
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url(img/b03.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"><div u="numbertemplate"></div></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 20 css */
            /*
            .jssora20l                  (normal)
            .jssora20r                  (normal)
            .jssora20l:hover            (normal mouseover)
            .jssora20r:hover            (normal mouseover)
            .jssora20l.jssora20ldn      (mousedown)
            .jssora20r.jssora20rdn      (mousedown)
            */
            .jssora20l, .jssora20r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(img/a20.png) no-repeat;
                overflow: hidden;
            }
            .jssora20l { background-position: -3px -33px; }
            .jssora20r { background-position: -63px -33px; }
            .jssora20l:hover { background-position: -123px -33px; }
            .jssora20r:hover { background-position: -183px -33px; }
            .jssora20l.jssora20ldn { background-position: -243px -33px; }
            .jssora20r.jssora20rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora20l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora20r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
    </div> 
    <!-- Jssor Slider End -->

&nbsp;
</div>

<div class="hor_line">
&nbsp;
</div>

<div id="news_popular">
	<div id="news">
		<div id="news_title">
		Yeni Mövzular
		</div>
		<div id="news_list">
			
			<div class="news_item">
				<div class="news_item_top">
					<div class="news_item_top_video">
					<img src="img/video/snapshots/4.png" />
					</div>
					<div class="news_item_top_title">
			        Bel yırtığı
					</div>
					<div class="news_item_top_questioncount">
					<img src="img/play_button_mini.png" />
					<span>8 sual</span>
					</div>
					<div class="news_item_top_author">
			        <img src="img/author_ciluet.png" />
					<span>Fərid Təqdirov</span>
					</div>
				</div>
				<div class="news_item_bottom_colored_line">
				</div>
			</div>
			
			<div class="news_item">
				<div class="news_item_top">
					<div class="news_item_top_video">
					<img src="img/video/snapshots/5.png" />
					</div>
					<div class="news_item_top_title">
			        İnsult
					</div>
					<div class="news_item_top_questioncount">
					<img src="img/play_button_mini.png" />
					<span>5 sual</span>
					</div>
					<div class="news_item_top_author">
			        <img src="img/author_ciluet.png" />
					<span>Fərid Təqdirov</span>
					</div>
				</div>
				<div class="news_item_bottom_colored_line">
				</div>
			</div>
			
		</div>
	</div>
	<div id="popular">
		<div id="popular_title">
		Gün / Həftə / Ay ərzində populyar
		</div>
		<div id="popular_list">
			
			<div class="popular_list_item">
				<div  class="popular_list_item_image">
				<img src="img/populars/1.png" />
				</div>
				<div  class="popular_list_item_text">
				Depressiyadan necə çıxmaq olar?
				</div>
			</div>
			
			<div class="popular_list_item">
				<div  class="popular_list_item_image">
				<img src="img/populars/2.png" />
				</div>
				<div  class="popular_list_item_text">
				VÖEN almaq üçün hansı sənədlər tələb olunur?
				</div>
			</div>
			
			<div class="popular_list_item">
				<div  class="popular_list_item_image">
				<img src="img/populars/3.png" />
				</div>
				<div  class="popular_list_item_text">
				ACCA nədir və ACCA-ın hansı ixtisaslaşdırma proqramları var?
				</div>
			</div>
			
			<div class="popular_list_item">
				<div  class="popular_list_item_image">
				<img src="img/populars/4.png" />
				</div>
				<div  class="popular_list_item_text">
				Sürücülük vəsiqəsi almaq üçün necə hazırlaşmaq olar?
				</div>
			</div>
			
			<div class="popular_list_item">
				<div  class="popular_list_item_image">
				<img src="img/populars/5.png" />
				</div>
				<div  class="popular_list_item_text">
				Quş südü tortu necə hazırlanır?
				</div>
			</div>
			
			
		</div>
	</div>
</div>

<div id="eksperts">
	<div id="eksperts_title">
		Ekspertlər
	</div>
	<div id="eksperts_list">
		
		<div class="eksperts_list_item">
			<div  class="eksperts_list_item_image">
				<img src="img/eksperts/1.png" />
			</div>
			<div  class="eksperts_list_item_name">
				Ceyhun Ayvazov
			</div>
			<div  class="eksperts_list_item_speciality">
				Həkim Stamotoloq
			</div>
		</div>
		
		<div class="eksperts_list_item">
			<div  class="eksperts_list_item_image">
				<img src="img/eksperts/2.png" />
			</div>
			<div  class="eksperts_list_item_name">
				Esmira Kazımova
			</div>
			<div  class="eksperts_list_item_speciality">
				Defektoloq-loqoped
			</div>
		</div>
		
		<div class="eksperts_list_item">
			<div  class="eksperts_list_item_image">
				<img src="img/eksperts/4.png" />
			</div>
			<div  class="eksperts_list_item_name">
				Aytən Xudiyeva
			</div>
			<div  class="eksperts_list_item_speciality">
				Oftalmoloq
			</div>
		</div>
		
		<div class="eksperts_list_item">
			<div  class="eksperts_list_item_image">
				<img src="img/eksperts/3.png" />
			</div>
			<div  class="eksperts_list_item_name">
				Mərahim Əkbərov
			</div>
			<div  class="eksperts_list_item_speciality">
				Həkim Stamotoloq
			</div>
		</div>
		
		<div class="eksperts_list_item">
			<div  class="eksperts_list_item_image">
				<img src="img/eksperts/6.png" />
			</div>
			<div  class="eksperts_list_item_name">
				Arzu Həsənova
			</div>
			<div  class="eksperts_list_item_speciality">
				Hüquqşünas
			</div>
		</div>
		
		<div class="eksperts_list_item">
			<div  class="eksperts_list_item_image">
				<img src="img/eksperts/5.png" />
			</div>
			<div  class="eksperts_list_item_name">
				Ramil Osmanlı
			</div>
			<div  class="eksperts_list_item_speciality">
				Daşınmaz əmlak bazarı
			</div>
		</div>
		
	</div>
</div>



<div id="main">


	<div id="kategory">
		
		<div id="kategory_list">
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#6d60a3;">
					<img src="img/aile_psixologiya_icon_colored.png" />
					Ailə və Psixologiya
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/aile_psixologiya_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					Ailə və onun əhəmiyyəti	
					</div>
				</div>	
				<div  style="height:10px;width:303px;background-color:#6d60a3;">
				&nbsp;
				</div>
			</div>
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#ef4423;">
					<img src="img/toy_nishan_icon_colored.png" />
					Toy və Nişan
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/toy_nishan_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					Kəbin
					</div>
				</div>	
				<div  style="height:10px;width:303px;background-color:#ef4423;">
				&nbsp;
				</div>
			</div>
			
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#df57a0;">
					<img src="img/biznes_iqtisadiyyat_icon_colored.png" />
					Biznes və İqtisadiyyat
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/biznes_iqtisadiyyat_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					İqtisadi terminlər
					</div>
				</div>	
				<div  style="height:10px;width:303px;background-color:#df57a0;">
				&nbsp;
				</div>
			</div>
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#f37121;">
					<img src="img/kulinariya_icon_colored.png" />
					Ailə və Psixologiya
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/kulinariya_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					Pizza Salmon
					</div>
				</div>	
				<div style="height:10px;width:303px;background-color:#f37121;">
				&nbsp;
				</div>
			</div>
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#f26662;">
					<img src="img/tehsil_icon_colored.png" />
					Təhsil
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/tehsil_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					ACCA
					</div>
				</div>	
				<div style="height:10px;width:303px;background-color:#f26662;">
				&nbsp;
				</div>
			</div>
			
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#660003;">
					<img src="img/huquq_icon_colored.png" />
					Hüquq
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/huquq_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					Məhkəmələrə müraciət
					</div>
				</div>	
				<div  style="height:10px;width:303px;background-color:#660003;">
				&nbsp;
				</div>
			</div>
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#73af43;">
					<img src="img/avtomobil_icon_colored.png" />
					Avtomobil
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/avtomobil_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					Sürücülük vəsiqəsi
					</div>
				</div>	
				<div style="height:10px;width:303px;background-color:#73af43;">
				&nbsp;
				</div>
			</div>
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#6588c5;">
					<img src="img/it_icon_colored.png" />
					İT
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/it_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					Hosting
					</div>
				</div>	
				<div  style="height:10px;width:303px;background-color:#6588c5;">
				&nbsp;
				</div>
			</div>
			
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#034b79;">
					<img src="img/saglamliq_icon_colored.png" />
					Sağlamlıq
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/saglamliq_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					Göz sulanması	
					</div>
				</div>	
				<div  style="height:10px;width:303px;background-color:#034b79;">
				&nbsp;
				</div>
			</div>
			
			<div class="kategory_list_item">
				<div class="kategory_list_item_top">
					<div class="kategory_list_item_top_image_title" style="color:#00a651;">
					<img src="img/din_icon_colored.png" />
					Din
					</div>
					<div class="kategory_list_item_thumbnail">
						<img src="img/din_icon_thumbnail_290_185.png" />	
					</div>
					<div class="kategory_item_text">
					İslamda qurban
					</div>
				</div>	
				<div style="height:10px;width:303px;background-color:#00a651;">
				&nbsp;
				</div>
			</div>
			
		</div>
	</div>
	
	<div id="right_sosial">
		<div id="fb">
		<img src="img/fb.png"  /> 
		</div>
		<div id="banner">
		<img src="img/millibyte.png"  /> 
		</div>
	</div>


</div> <!-- main div end -->


<!--

<div id="bottom">
&copy; Copyright&nbsp;2012-2015&nbsp; ExpertTV
</div>

-->

</div> <!-- root div end -->
</body>
</html>