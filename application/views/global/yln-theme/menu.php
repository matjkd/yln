
<ul class="topnav">
    <li><?= anchor('/', lang('menu_home')) ?></li>
    <li><?= anchor('/about-laworld.html', lang('menu_about')) ?>

        <ul class="subnav">
            <li><?= anchor('/about-laworld/history-of-laworld.html', 'History of Laworld') ?></li>
            <li><?= anchor('/about-laworld/expertise.html', 'Expertise') ?></li>
            <li><?= anchor('/about-laworld/codes-of-practice.html', 'Codes of Practice') ?></li>
             <li><?= anchor('/about-laworld/aims-and-objectives.html', 'Aims and Objectives') ?></li>
              <li><?= anchor('/about-laworld/lawyer-exchangescareer-opportunities.html', 'Lawyer Exchanges/Career Opportunities') ?></li>
              
        </ul>
    </li>
    <li><a href="#"><?=lang('menu_membership')?></a>
    	<ul class="subnav">
            <li><?= anchor('/membership/membership-criteria.html', 'Membership Criteria') ?></li>
            <li><?= anchor('/membership/membership-fee-structure.html', 'Membership Fee Structure') ?></li>
            <li><?= anchor('/membership/membership-benefits.html', 'Membership Benefits') ?></li>
             <li><?= anchor('/membership/members-obligations.html', 'Membership Obligations') ?></li>
              <li><?= anchor('/membership/seeking-new-members.html', 'Seeking New Members') ?></li>
                <li><?= anchor('/membership/acceptance-procedure.html', 'Acceptance Procedure') ?></li>
                  <li><?= anchor('/membership/application-form.html', 'Application Form') ?></li>
              
        </ul>
       
    </li>
    <li><?= anchor('/find-a-lawyer', lang('menu_findMember')) ?>
        
    </li>

    <li><?= anchor('news', lang('menu_news')) ?>
    	<ul class="subnav">
            <li><?= anchor('/newsletters', 'International Legal News') ?></li>
            <li><?= anchor('/events', 'Events Calendar') ?></li>
          
              
        </ul>
    	
    </li>
     
    
    <li><?= anchor('/contact', lang('menu_contact')) ?></li>

 <li><?= anchor('/links.html', lang('menu_links')) ?>
        
    </li>

    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

       
         echo "<li>".anchor('admin', 'Admin')."</li>";
         
    }
    ?>

</ul>

