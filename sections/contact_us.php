<?php
/**
 * Created by IntelliJ IDEA.
 * User: agufed
 * Date: 9/21/17
 * Time: 9:17 PM
 */?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-left wow fadeInLeft">
                    <h2>Contact Us</h2>
                    <!--
                    <address class="single-address">
                        <h4>Postal address:</h4>
                        <p>
                        </p>
                    </address>
                    <address class="single-address">
                        <h4>Headquarters:</h4>
                        <p>
                        </p>
                    </address>
                    -->
                    <address class="single-address">
                        <h4>Phone</h4>
                        <p>Cell Phone 1: +254 712 929 181</p>
                        <p>Cell Phone 2: +254 706 091 094</p>
                    </address>
                    <address class="single-address">
                        <h4>E-Mail</h4>
                        <p>Support: info@rahisisha.co.ke</p>
                        <p>Sales: sales@rahisisha.co.ke</p>
                        <p>Other: agunga3d@gmail.com</p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact-right wow fadeInRight">
                    <h2>Message Us</h2>
                    <form action="/sendEmail.php" class="contact-form">
                        <div class="form-group">
                            <input id="senderNameId"  name="senderName" type="text" class="form-control" placeholder="Name">
                        </div>
                        <input id="messageSubjectId" name="messageSubject" type="hidden" value="Message from Rahisisha ContactUs">
                        <div class="form-group">
                            <input id="senderEmailId"  name="senderEmail" type="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <textarea id="messageBodyId" name="messageBody" class="form-control"></textarea>
                        </div>
                        <button id="sendMailId" name="sendMail" type="submit" data-text="SEND" class="button button-default"><span>SUBMIT</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

