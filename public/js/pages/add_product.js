'use strict';
$(document).ready(function() {
    $("#commentForm").bootstrapValidator({
        fields: {
            asincode: {
                validators: {
                    notEmpty: {
                        message: 'Enter ASIN Code To Fetch Data'
                    }
                },
                required: true,
                minlength: 3
            }
        }
    });

    $('#acceptTerms').on('ifChanged', function(event){
        $('#commentForm').bootstrapValidator('revalidateField', $('#acceptTerms'));
    });
    
    $('#rootwizard_no_val').bootstrapWizard({'tabClass': 'nav nav-pills'});

    $(".user2, .finish_tab, .next_btn1").on("click", function(){
        $(".userprofile_tab").addClass("tab_clr");
    });
    $(".user1, .previous_btn2").on("click", function(){
        $(".userprofile_tab").removeClass("tab_clr");
    });
    $(".finish_tab, .next_btn2").on("click", function(){
        $(".profile_tab").addClass("tab_clr");
    });
    $(".user2, .previous_btn3").on("click", function(){
        $(".profile_tab").removeClass("tab_clr");
    });
    $(".user1").on('click',function () {
        $(".user2 a span").removeClass("tab_clr");
    });
    $(".general_number").on('keyup',function () {
        if (/\D/g.test(this.value)) {
            this.value = this.value.replace(/\D/g,'')
        }
    });
});

