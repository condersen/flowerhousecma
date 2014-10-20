var slider_variable = $(function()(
$(function() {
var slider_container;
var current_image_index = 0;
function next_image_index() {
if (current_image_index < images.length - 1) {
return current_image_index + 1;
} else {
return 0;
}
}

function prev_image_index() {
if (current_image_index > 0) {
return current_image_index - 1;
} else {
return images.length - 1;
}
}

$(function() {
slider_container = $('#gallery');
for (var i = 0; i < images.length; i++) {
var row = images[i];
var class_name = 'slider-img slider-right';
if (i == 0) {
class_name = 'slider-img';
}
var img = $('<img>').attr('src', row).addClass(class_name);
slider_container.append(img);
}
});

$('#button-left').click(function() {
var next_image = $(slider_container.find('img.slider-img')[prev_image_index()]);
var current_image = $(slider_container.find('img.slider-img')[current_image_index]);
var next_image_log = next_image_index();
console.log(next_image_log);
$("#button-left").prop('disabled', true);

current_image.animate({
left : '1020'
}, 1000, function() {
current_image.addClass('slider-right').removeClass('slider-current').attr('style', '');
});
next_image.removeClass('slider-right').addClass('slider-left')
next_image.animate({
left : '0'
}, 1000, function() {
next_image.addClass('slider-current').removeClass('slider-left').attr('style', '');
$("#button-right").prop('disabled', false);
});

current_image_index--;
if (current_image_index == -1) {
current_image_index = images.length - 1;
}

});

$('#button-right').click(function() {
var next_image = $(slider_container.find('img.slider-img')[next_image_index()]);

var current_image = $(slider_container.find('img.slider-img')[current_image_index]);

var next_image_log = next_image_index();

console.log(current_image_index, next_image_log);
$("#button-right").prop('disabled', true);

current_image.animate({
left : '-1020'
}, 1000, function() {
current_image.addClass('slider-right').removeClass('slider-current').attr('style', '');
});

next_image.animate({
left : '0'
}, 1000, function() {
next_image.removeClass('slider-right').addClass('slider-current').attr('style', '');
$("#button-left").prop('disabled', false);
});

current_image_index++;
if (current_image_index == images.length) {
current_image_index = 0;
}

});
});
});