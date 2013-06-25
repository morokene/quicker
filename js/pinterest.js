$(function() {
$("#pin_submit").click(function() 
{
var pin = $("#pin_update").val();
var x = $('.preview').attr('id');
if(x)
var z= x;
else
var z=0;
var dataString = 'pin='+ pin+ '&z=' +z;

if(pin=='')
{
alert('Please type your story...');
}
else
{
$.ajax({
type: "POST",
url: "post_pin.php",
data: dataString,
cache: false,
success: function(html){
$("#pin_update").val('');
$("#preview").html('');
$('#photoimg').val('');
$("#container").prepend(html);
$("#container").masonry('reload');
}
});
}
return false;
}); 
});

//comment open

$('.commentopen').live("click",function() 
{
var ID = $(this).attr("id");
$("#commentbox"+ID).slideToggle('fast');

var b=$("#box"+ID);
var a=b.height();
if($("#commentbox"+ID).height() > 1)
{
var Z=a-85;		
}
else
{
var Z=a+85;		
}

b.animate({height: Z }, 
function(){
$('#container').masonry();
});

return false;
});

	
//masonry part

$(function(){
    
    $('#container').masonry({
      itemSelector: '.box'
    });

  });
$(function(){

    var $container = $('#container');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.box'
      });
    });
  
  });
 


//Comment Submit

$('.comment_button').live("click",function() 
{
var ID = $(this).attr("id");
var comment= $("#ctextarea"+ID).val();
var dataString = 'comment='+ comment + '&pid=' + ID;

if($.trim(comment).length==0)
{
alert("Please Enter Comment Text");
}
else
{
$.ajax({
type: "POST",
url: "post_comment.php",
data: dataString,
cache: false,
success: function(html){
$("#commentload"+ID).append($(html).fadeIn('slow'));
$("#ctextarea"+ID).val('');
$("#commentbox"+ID).hide();
$("#container").masonry('reload');
 }
 });
}
return false;
});

//Load More Pins

$('.more').live("click",function() 
{

var ID = $(this).attr("id");

$.ajax({
type: "POST",
url: "more_pin.php",
data: "last_pid="+ ID, 
cache: false,
beforeSend: function(){ $("#more"+ID).html('<img src="css/ajax-loader.gif" />'); },
success: function(html){
$("#more"+ID).hide();

$("div#container").append(html);
$("#container").masonry('reload');
}
});
return false;
});
