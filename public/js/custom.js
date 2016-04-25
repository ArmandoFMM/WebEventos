 $('a[href="#topo"]').click(function(){
       $('html, body').animate({scrollTop: 0}, 'slow');
       return false;
   });

 $('button#delete').on('click', function () {
	 swal({
			 title: "Deseja realmente apagar?",
			 text: "Não poderá recuperar os dados e tudo associado a este tambem serão apagados!", type: "warning",
			 showCancelButton: true,
			 confirmButtonColor: "#DD6B55",
			 confirmButtonText: "Sim",
			 closeOnConfirm: false
		 },
		 function () {
			 $("#myform").submit();

		 });
 });