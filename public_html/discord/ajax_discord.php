<div class="col-md-12 mb-5">
        <div class="list-group">
          <a href="#" class="discord list-group-item list-group-item-action flex-column align-items-start active">
            <div class="d-flex w-100 justify-content-between">
              <?php
                require('discordConfig.php');
                require('class/discord.php');
                $discord = new discord(DISCORD_ID);
                $discord->fetch();

                $member_list = $discord->getMembers();
                $member_count = $discord->getMemberCount();
              ?>
              <h5 class="mb-1 discordHeader"><i class="fab fa-discord"></i> <?php echo WIDGET_HEADER; ?></h5>
              <small><?php echo $member_count; ?> online</small>
            </div>
          </a>
          <?php 
          $member_list = array_slice($member_list, 0, MAX_MEMBERS);
          foreach($member_list as $ml){
            echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">';
              echo '<div class="member">
                <div class="profile">
                  <img src="'.$ml->avatar_url.'" class="avatar" id="">
                  <div class="status '.$ml->status.'"></div>
                </div>
                <span class="userName">'.$ml->username.'</span>
              </div>';
              //
            echo '<small>'.$ml->status.'</small></div>
                  </a>';
          }
          ?>
         <a href="<?php echo DISCORD_INVITE; ?>" class="discord btn btn-primary"><i class="fas fa-project-diagram"></i> <?php echo DISCORD_LINK; ?></a>
        </div>
      </div>