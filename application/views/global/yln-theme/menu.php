
<ul class="topnav">
    <li><?= anchor('/', lang('menu_home')) ?></li>
    <li><?= anchor('/about-yln.html', lang('menu_about')) ?>

        <ul class="subnav">
           
            <li><?= anchor('/about-yln/gateway_to_china', lang('menu_gateway')) ?></li>
           <li><?= anchor('/about-yln/code_of_conduct', lang('menu_code')) ?></li>
              
        </ul>
    </li>
     <li><?= anchor('/events', lang('menu_conferences')) ?></li>
    
    <li><?= anchor('/find-a-lawyer', lang('menu_findMember')) ?>
        
    </li>

    <li><?= anchor('news', lang('menu_news')) ?>
    	<ul class="subnav">
            <li><?= anchor('/newsletters', 'International Legal News') ?></li>
          
              
        </ul>
    	
    </li>
     
    
    <li><?= anchor('/contact', lang('menu_contact')) ?></li>

 <li><?= anchor('/links.html', lang('menu_links')) ?>
        
    </li>

    <?php
		$is_logged_in = $this -> session -> userdata('is_logged_in');
		$role = $this -> session -> userdata('role');
		if ($is_logged_in != 0 || $role == 1)
		{

			echo "<li>" . anchor('admin', 'Admin') . "</li>";

		}
    ?>

</ul>

