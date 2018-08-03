    $(function(){



	$('.dropdown').mouseenter(function(){
		$(this).find('.dropdown-menu').fadeIn(300);

		$(this).mouseleave(function(){
			$(this).find('.dropdown-menu').fadeOut(300);
		});
	});
	$('img.click-pic').click(function(){
        $("#imgInp").trigger('click');
    });


     $("#imgInp").change(function(){
        readURL(this);
    });
    

       from = $('input[name="from"]').val();
    	tos = parseInt($('input[name="to"]').val())+15;
    	total = parseInt($('input[name="total_member"]').val());
    	if(from==0){
    		$('.prev-page').hide();
    	}
    	if(total<=tos){
    		$('.next-page').hide();
    	}
    $('.prev-page').click(function(){
    	from = parseInt($('input[name="from"]').val())-20;
    	to = parseInt($('input[name="to"]').val()) - 20;
    	

    	$('input[name="from"]').val(from);
    	$('input[name="to"]').val(to);
    	$('#paging').submit();
    });

     $('.next-page').click(function(){
     	from = parseInt($('input[name="from"]').val()) + 20;
    	to = parseInt($('input[name="to"]').val()) + 20;
    	

    	$('input[name="from"]').val(from);
    	$('input[name="to"]').val(to);
    	$('#paging').submit();
    });

     $('.member-searches').on('keyup',function(){
     	setTimeout(function() {$('.loading-alert').fadeIn(0);}, 0);
     	setTimeout(function() {$('.loading-alert').fadeOut(500);}, 3000);
     	
     });
     
     
     
         // $('.dropdown-main').click(function(){
         // 	$(this).find('.dropdown-slave').fadeIn(500);
         // 	$(this).blur(function(){
         // 		$(this).find('.dropdown-slave').fadeOut(500);
         // 	});
         // 		id = $(this).find('input[name="id"]').val();
         // 		updateForm = 'updateForm_'+id;
         		
    	    //  	$('#'+updateForm).find('.btn-edit').click(function(){
    	     
    	    //  	$('.dropdown-input').removeClass('dropdown-input');
    	    //  	$('.dropdown-name').hide();
    	    //  	$('.edit-name').show();
    	    //  	$('.click-picture').show();
    	    //  	$(this).removeClass('btn-warning');
    	    //  	$(this).addClass('btn-primary');
    	    //  	$(this).addClass('btn-update');
    	    //  	$(this).text('Update');


    	    //  	 $('.btn-update').click(function(){
    	    //  		$('#'+updateForm).submit();
    	    //  	});
    	    //  });

    	    //  $('#'+updateForm).find('.click-picture').click(function(){
         //    	$('#'+updateForm).find(".imgInput").trigger('click');
        	// });


    	    //  $('#'+updateForm).find(".imgInput").change(function(){
    	    //     dropdownReadURL(this);
    	    // });
    	    //  $('#'+updateForm).find('.btn-delete').click(function(){
    	    //  	$('#deleteForm_'+id).submit();
    	    //  });
         // });	

    $('#add-members').click(function(){
        $('#add-member-modal').modal('show');
    });
    

});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function dropdownReadURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.dropdown-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
