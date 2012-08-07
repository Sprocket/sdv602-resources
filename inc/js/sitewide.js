prettyPrint();

$("a").each(function() {
  var a = new RegExp("/" + window.location.host + "/");
    if(!a.test(this.href)) {
    $(this).click(function(event) {
      event.preventDefault();
      event.stopPropagation();
      window.open(this.href, "_blank");
    });
  }
});

$('#editor_content').redactor({
		focus: false,
		cleanUp: false,
		removeClasses: false,
	});

$('#nav-hide').on('click', function(e){
	e.preventDefault();
  $("#sub-nav").hide('slow');
  $(".navbar").slideUp();
	// $("#sub-nav, .navbar").hide('slow');
});
