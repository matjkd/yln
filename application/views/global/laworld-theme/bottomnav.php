
<ul class="bottomnav">
    

    <li><?= anchor('/', 'Home') ?></li>
    <li><?= anchor('/about-laworld.html', 'About LAWorld') ?></li>

       
            <li><?= anchor('/about-laworld/history-of-laworld.html', 'History of Laworld') ?></li>
            <li><?= anchor('/about-laworld/expertise.html', 'Expertise') ?></li>
            <li><?= anchor('/about-laworld/codes-of-practice.html', 'Codes of Practice') ?></li>
             <li><?= anchor('/about-laworld/aims-and-objectives.html', 'Aims and Objectives') ?></li>
              <li><?= anchor('/about-laworld/lawyer-exchangescareer-opportunities.html', 'Lawyer Exchanges/Career Opportunities') ?></li>
              
       
    
    <li><a href="#">Membership</a>     
    </li>
    	
            <li><?= anchor('/membership/membership-criteria.html', 'Membership Criteria') ?></li>
            <li><?= anchor('/membership/membership-fee-structure.html', 'Membership Fee Structure') ?></li>
            <li><?= anchor('/membership/membership-benefits.html', 'Membership Benefits') ?></li>
             <li><?= anchor('/membership/members-obligations.html', 'Membership Obligations') ?></li>
              <li><?= anchor('/membership/seeking-new-members.html', 'Seeking New Members') ?></li>
                <li><?= anchor('/membership/acceptance-procedure.html', 'Acceptance Procedure') ?></li>
                  <li><?= anchor('/membership/application-form.html', 'Application Form') ?></li>
              
       
  
    <li><?= anchor('/find-a-lawyer', 'Find a LAWorld Lawyer') ?>
        
    </li>

    <li><?= anchor('news', 'News') ?></li>
    	
            <li><?= anchor('/newsletters', 'International Legal News') ?></li>
            <li><?= anchor('/events', 'Events Calendar') ?></li>
          
              
       
    	
    
     <li><?= anchor('/doing-business-with-china.html', 'Doing Business with China') ?>
        
    </li>
    
    <li><?= anchor('/contact', 'Contact us') ?></li>

 <li><?= anchor('/links.html', 'Links') ?>
        
    </li>


    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

        echo "<li>".anchor('admin', 'Admin')."</li>";
    }
    ?>

</ul>

&copy; LAWorld. Website Developed by Redstudio Design Limited