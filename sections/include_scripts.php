<?php
/**
 * Created by IntelliJ IDEA.
 * User: agufed
 * Date: 9/21/17
 * Time: 10:23 PM
 */?>
<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Wow animation -->
<script type="text/javascript" src="assets/js/wow.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/custom.js"></script>

<script>
    $(document).on('click', '#sendMailId', function (e) {
        e.preventDefault();
        var senderName = $('#senderNameId').val();
        var messageSubject = $('#messageSubjectId').val();
        var senderEmail = $('#senderEmailId').val();
        var messageBody = $('#messageBodyId').val();

        $.ajax({
            url: "sendEmail.php",
            method: "POST",
            data: {senderName: senderName, messageSubject: messageSubject, senderEmail: senderEmail, messageBody: messageBody},
            dataType: "text",
            success: function (data) {
                alert(data);
                //                $('#success_alert_message').append(data);
                //                $('#success_alert_message').removeClass('hidden');
                //                faddingAllert('#success_alert_message');
            }
        });
    });
</script>

