<!--container-->
<section id="container">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="gmap">
                	<iframe class="" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                	
src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=95+Queensway+Hong+Kong&amp;aq=&amp;sll=52.8382,-2.327815&amp;sspn=9.229687,21.533203&amp;ie=UTF8&amp;hq=&amp;hnear=95+Queensway,+Hong+Kong&amp;t=m&amp;ll=22.279209,114.165137&amp;spn=0.00695,0.00912&amp;z=16&amp;iwloc=&amp;output=embed "></iframe>       </div>
        <div class="row">
            <section id="page-sidebar" class="pull-left span8">
                <h3>Leave Your Message</h3>
               <?= form_open('email/send'); ?>
                    <div class="af-outer af-required pull-left">
                        <div class="af-inner">
                            <label for="name" id="name_label">Your Name:</label>
                            <input type="text" name="name" id="name" size="30" value="" class="text-input span4" />
                            <label class="error" for="name" id="name_error">Name is required.</label>
                        </div>
                    </div>
                    <div class="af-outer af-required pull-right">
                        <div class="af-inner">
                            <label for="email" id="email_label">Your Email:</label>
                            <input type="text" name="email" id="email" size="30" value="" class="text-input span4" />
                            <label class="error" for="email" id="email_error">Email is required.</label>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="af-outer af-required">
                        <div class="af-inner">
                            <label for="input-message" id="message_label">Your Message:</label>
                            <textarea name="message" id="input-message" cols="30" class="text-input span8"></textarea>
                            <label class="error" for="input-message" id="message_error">Message is required.</label>
                        </div>
                    </div>
                    <div class="af-outer af-required">
                        <div class="af-inner">
                            <!-- <input type="submit" name="submit" class="form-button btn btn-primary btn-large" id="submit_btn" value="Send Message!" /> -->
                            
                            
                            
                            <button class="btn btn-primary btn-large"  name="submit" id="submit_btn" type="submit">
			Send Message
		</button>
                        </div>
                    </div>
               <?=form_close()?>
            </section>
            <!--sidebar-->
            <aside id="sidebar" class="pull-right span4">
                <!--address-->
                <section>
                    <h3>Address</h3>
                <address>
                    <p> 21st Floor, United Centre, 95 Queensway, Hong Kong, CHINA</p>
                    <p>tel: + 852 2523 9155</p>
                    <p>fax: + 852 2810 6511</p>
                    <p><i class="icon-envelope"></i> <a href="mailto:steveng@ngnshum.com">steveng@ngnshum.com</a></p>
                </address>
                </section>
               
            </aside>
        </div>
    </div>    
</section>