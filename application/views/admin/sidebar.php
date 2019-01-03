<aside>
  <ul id="sideNav" class="side-nav fixed">
    <li>
      <div class="userView">
        <div class="background">
          <img src="<?php echo base_url('assets/images/nav6.jpg'); ?>">
        </div>
        <a href="#!user"><img class="circle" src="<?php echo base_url('assets/images/noavatar.png'); ?>"></a>
        <a><span class="white-text name"><?php echo strtoupper($admin_log['username']);?></span></a>
      </div>
    </li>

    <?php sidemenu($aktive_menu="");?>
    <li>
      <a class="waves-effect"  href="<?php echo base_url('index.php/login/logout'); ?>"><i class="material-icons">exit_to_app</i>Logout</a>
    </li>
  </ul>
</aside>
