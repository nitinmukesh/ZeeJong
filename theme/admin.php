<?php if(isAdmin()){
?>

<div class="container">

    <h2>Admin</h2>


    <ul class="nav nav-pills">
      <li class="<?php if($this->page == 'admin-dashboard') echo 'active'; ?>"><a href="<?php echo SITE_URL . 'admin/dashboard/'; ?>">Dashboard</a></li>
      <li class="<?php if($this->page == 'admin-matches') echo 'active'; ?>"><a href="<?php echo SITE_URL . 'admin/matches/'; ?>">Matches</a></li>
      <li class="<?php if($this->page == 'admin-pages') echo 'active'; ?>"><a href="<?php echo SITE_URL . 'admin/pages/'; ?>">Pages</a></li>
      <li class="<?php if($this->page == 'admin-users') echo 'active'; ?>"><a href="<?php echo SITE_URL . 'admin/users/'; ?>">Users</a></li>
      <li class="<?php if($this->page == 'admin-update-bets') echo 'active'; ?>"><a href="<?php echo SITE_URL . 'admin/update-bets/'; ?>">Update bets</a></li>
    </ul>


</div>

<?php } ?>