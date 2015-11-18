var toolTip = {
	offsetY : 10,
	offsetX : 10,
	preview : function(obj, event) {
		var target = obj.attr('id') + '-content';
		if (target.length > 0) {
			if (event.type == 'mouseover') {
				if (!$('#' + target).hasClass('selected')) {
					$('#' + target)
						.css('top', (event.pageY - toolTip.offsetX) + 'px')
						.css('left', (event.pageX + toolTip.offsetY) + 'px')
						.fadeIn(100);
				}
			} else if (event.type == 'mouseout') {
				if (!$('#' + target).hasClass('selected')) {
					$('#' + target).hide();
				}
			} else if (event.type == 'mousemove') {
				if (!$('#' + target).hasClass('selected')) {
					$('#' + target)
						.css('top', (event.pageY - toolTip.offsetX) + 'px')
						.css('left', (event.pageX + toolTip.offsetY) + 'px');
				}
			} else {
				if (!$('#' + target).hasClass('selected')) {
					$('.tooltip-target').removeClass('selected');
					$('.tooltip-target').hide();
					$('#' + target).addClass('selected');
					$('#' + target)
						.css('top', (event.pageY - toolTip.offsetX) + 'px')
						.css('left', (event.pageX + toolTip.offsetY) + 'px')
						.show();
				} else {
					$('#' + target).removeClass('selected');
					$('#' + target).hide();
				}
			}
		}
	}
};
$(function() {

	$('.tooltip').live('mouseover mouseout mousemove click', function(event) {
		toolTip.preview($(this), event);
		return false;
	});
	
	$('.tooltip-target').live('click', function() {
		$(this).removeClass('selected');
		$(this).hide();
		return false;
	});

});