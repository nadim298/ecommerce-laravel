/*
--------------------------------
    : Custom - Validate js :
--------------------------------
*/
"use strict";
$(document).ready(function() {

  $("#current_password").keyup(function(){
		var current_password = $("#current_password").val();
		$.ajax({
			type:'get',
			url:'/admin/check/current/password',
			data:{current_password:current_password},
			success:function(resp){
				if(resp=="false"){
					$("#current_password_check_result").html("<font color='red'>Current Password is incorrect</font>");
				}else if(resp=="true"){
					$("#current_password_check_result").html("<font color='green'>Current Password is correct</font>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});

    jQuery(".form-validate").validate({
        ignore: [],
        errorClass: "invalid-feedback animated fadeInDown",
        errorElement: "div",
        errorPlacement: function(e, a) {
            jQuery(a).parents(".form-group > div").append(e)
        },
        highlight: function(e) {
            jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
        },
        success: function(e) {
            jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
        },
        rules: {
            "val-username": {
                required: !0,
                minlength: 3
            },
            "val-email": {
                required: !0,
                email: !0
            },
            "current_password": {
                required: !0,
            },
            "new_password": {
                required: !0,
                minlength: 5
            },
            "confirm_password": {
                required: !0,
                equalTo: "#val-password"
            },
            "name": {
                required: !0,
            },
            "description": {
                required: !0,
            },
            "url": {
                required: !0,
            },
            "val-select2": {
                required: !0
            },
            "val-select2-multiple": {
                required: !0,
                minlength: 2
            },
            "val-suggestions": {
                required: !0,
                minlength: 5
            },
            "val-skill": {
                required: !0
            },
            "val-currency": {
                required: !0
            },
            "val-website": {
                required: !0,
                url: !0
            },
            "val-phoneus": {
                required: !0
            },
            "val-digits": {
                required: !0,
                digits: !0
            },
            "val-number": {
                required: !0
            },
            "val-range": {
                required: !0,
                range: [1, 5]
            },
            "val-terms": {
                required: !0
            }
        },
        messages: {
            "val-username": {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 3 characters"
            },
            "val-email": "Please enter a valid email address",
            "current_password": {
                required: "Please provide current password",
            },
            "new_password": {
                required: "Please provide new password",
                minlength: "Your password must be at least 5 characters long"
            },
            "confirm_password": {
                required: "Please provide password as above",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            "val-select2": "Please select a value!",
            "val-select2-multiple": "Please select at least 2 values!",
            "val-suggestions": "What can we do to become better?",
            "val-skill": "Please select a skill!",
            "val-currency": "Please enter a price!",
            "val-website": "Please enter your website!",
            "val-phoneus": "Please enter a US phone!",
            "val-digits": "Please enter only digits!",
            "val-number": "Please enter a number!",
            "val-range": "Please enter a number between 1 and 5!",
            "val-terms": "You must agree to the service terms!"
        }
    })
});
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addImageButton = $('.add_image_button'); //Add button selector
    var addAttributeButton = $('.add_attribute_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var imagefieldHTML = '<div><input type="text" name="name[]" id="name" placeholder="Name" style="width:120px;margin-right:4px;" /><input type="file" name="image[]" id="image" placeholder="Image" margin-top:10px;"/><a href="javascript:void(0);" class="remove_button">Remove</a></div>'; //New input field html
    var attributefieldHTML = '<div><input type="text" name="sku[]" id="sku" placeholder="SKU" style="width:120px; margin-right:4px;"/><input type="text" name="size[]" id="size" placeholder="Size" style="width:120px; margin-right:4px;" /><input type="text" name="price[]" id="price" placeholder="Price" style="width:120px; margin-right:4px;" /><input type="text" name="stock[]" id="stock" placeholder="Stock" style="width:120px; margin-right:4px;" /><a href="javascript:void(0);" class="remove_button">Remove</a></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addImageButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(imagefieldHTML); //Add field html
        }
    });
    $(addAttributeButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(attributefieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
