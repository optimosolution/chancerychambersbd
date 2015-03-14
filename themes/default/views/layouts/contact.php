<?php $this->beginContent('//layouts/main'); ?>   
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8">
            <section>
                <h2 class="section-title">Send Message</h2>
                <p> If you have business inquiries or other questions, please fill out the following form to contact us. Thank you. </p>
                <?php echo $content; ?>
            </section>
        </div>
        <div class="col-md-4">
            <section>
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-envelope-o"></i> Additional Information</div>
                    <div class="panel-body">
                        <h4 class="section-title">Contacts</h4>
                        <address>
                            <strong>The Chancery Chambers</strong><br />
                            Meherba Plaza (15th Floor)<br />
                            33, Topkhana Road,<br />
                            Dhaka 1000<br />                            
                            <abbr title="Phone">P:</abbr> +88 02 9552133, 9573856, 9575760<br />
                            <abbr title="Phone">M:</abbr>+8801841333999<br />
                            <abbr title="Phone">F:</abbr>+88 02 9560210<br />
                            Mail: <a href="mailto: chancerylc@gmail.com">chancerylc@gmail.com</a>
                        </address>
                        <!-- Business Hours -->
                        <h4 class="section-title">Business Hours</h4>
                        <ul class="list-unstyled">
                            <li><strong>Monday-Friday:</strong> 9am to 7pm</li>
                            <li><strong>Saturday:</strong> 9am to 2pm</li>
                            <li><strong>Sunday:</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section>
        <div class="well well-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29217.457219016287!2d90.412073!3d23.740883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x625665f03bd95f80!2sChancery+Research+%26+Consultants!5e0!3m2!1sen!2s!4v1395241651361" width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </div>
    </section>
</div>
<?php $this->endContent(); ?>