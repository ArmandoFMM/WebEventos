
$('#proximos a').nivoLightbox({
        effect: 'fadeScale',
    });


   $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });
   
   $('a[href="#topo"]').click(function(){
       $('html, body').animate({scrollTop: 0}, 'slow');
       return false;
   });
   
   
   $(document).ready(function(){
	   // Add scrollspy to <body>
	   $('body').scrollspy({target: ".navbar", offset: 50});   

	   // Add smooth scrolling on all links inside the navbar
	   $("#minhaNav a").on('click', function(event) {

	     // Prevent default anchor click behavior
	     event.preventDefault();

	     // Store hash
	     var hash = this.hash;

	     // Using jQuery's animate() method to add smooth page scroll
	     // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	     $('html, body').animate({
	       scrollTop: $(hash).offset().top
	     }, 800, function(){
	    
	       // Add hash (#) to URL when done scrolling (default click behavior)
	       window.location.hash = hash;
	     });
	   });
	 });