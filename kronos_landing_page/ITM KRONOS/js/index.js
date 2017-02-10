(function () {
  
  'use strict';
  
  var pop_up_video = $('#pop_up_video'),
    pop_up_video_iframe = $('#pop_up_video_iframe'),
    close_pop_up_video_id = $('#pop_up_video_bg'),
  	open_pop_up_video_id = $('#open_pop_up_video'),
  	mobile_open_pop_up_video_id = $('#mobile_open_pop_up_video');

  	// Pop-up Video
  	
  	var close_pop_up_video = function(event){
  		event.preventDefault();
  		pop_up_video_iframe.attr('src', '');
  		pop_up_video.css('display', 'none');
  	};
  	close_pop_up_video_id.on('click', close_pop_up_video);
  	
  	
  	var open_pop_up_video = function(event){
  		event.preventDefault();    
  		pop_up_video_iframe.attr('src', 'https://www.youtube.com/embed/eMM3OLV2Qpc');
  		pop_up_video.css('display', 'block');
  	};
  	
    open_pop_up_video_id.on('click', open_pop_up_video);    
    mobile_open_pop_up_video_id.on('click', open_pop_up_video);
                                   
}());

