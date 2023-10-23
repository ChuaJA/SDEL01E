$(document).ready(function() {
    //event listener for SAVE button
    $('$savebtn').click(function(e) {
        e.preventDefault();
        //inputs data from the design
        var employee_number = $('#employee_number').val();
        var fname = $('#fname').val();
        var mname = $('#mname').val();
        var lname = $('#lname').val();
        var suffix = $('#suffix').val();
        var birth_date = $('#birth_date').val();
        var gender = $('#gender').val();
        var nationality = $('#nationality').val();
        var civil_status = $('#civil_status').val();
        var department = $('#department').val();
        var designation = $('#designation').val();
        var qualified_dependent_status = $('#qualified_dependent_status').val();
        var employee_status = $('#employee_status').val();
        var pay_date = $('#pay_date').val();
        var contact_number = $('#contact_number').val();
        var email_address = $('#email_address').val();
        var social_media = $('#social_media').val();
        var social_media_account_id = $('#social_media_account_id').val();
        var address_line1 = $('#address_line1').val();
        var address_line2 = $('#address_line2').val();
        var municipality = $('#municipality').val();
        var state_province = $('#state_province').val();
        var country = $('#country').val();
        var zip_code = $('#zip_code').val();
        var picpath = $('#picpath').val();

        var data_string = 'employee_number=' + employee_number;
        data_string += '&fname=' + fname; 
        data_string += '&mname=' + mname;
        data_string += '&lname=' + lname;
        data_string += '&suffix=' + suffix;
        data_string += '$birth_date=' + birth_date;
        data_string += '&gender=' + gender;
        data_string += '&nationality=' + nationality;
        data_string += '&civil_status=' + civil_status;
        data_string += '&department=' + department;
        data_string += '&designation=' + designation;
        data_string += '&qualified_dependent_status=' + qualified_dependent_status;
        data_string += '&employee_status=' + employee_status;
        data_string += '&pay_date=' + pay_date;
        data_string += '&contact_number=' + contact_number;
        data_string += '&email_address=' + email_address;
        data_string += '&social_media=' + social_media;
        data_string += '&social_media_account=' + social_media_account_id;
        data_string += '&address_line1=' + address_line1;
        data_string += '$address_line2=' + address_line2;
        data_string += '&municipality=' + municipality;
        data_string += '$state_province=' + state_province;
        data_string += '&country=' + country;
        data_string += '&zip_code=' + zip_code;
        data_string += '&picpath=' + picpath;
        $.ajax({
            type: 'POST',
            url: 'process/employee_info_save.php',
            data: data_string,
            dataType:'json',
            success: function(result){
                if (result.ok){
                    alert('Data successfully added!')
                    //codes for landing page after clicking OK in the alert for Data Successfully added!
                    window.location.href="http://localhost/lpu_web_application/employee_registration_save.php";                   
                }

                var picpath = result.picpath;
                $('#picpath').val(picpath);
            }
        })
    });
})

$(document).ready(function(){
    $('#uploadfile').change(function(e){
        var formData = new FormData($('#pic-upload')[0]);
        //codes in AJAX for uploading of picture
        $.ajax({
            type: 'POST',
            url: 'upload_pic.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(result){
                if (result.ok){
                    $('#pic-box').html('');
                    $('#pic-box').append("<img src='" + result.temp_path + "' style = 'width:100%'/>");
                    $('#picpath').val(result.temp_path);
                } else {
                    alert('Error encountered while trying to upload the picture!');
                }
            }            
        });
        return false;
    });
});