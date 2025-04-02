<?php
    $user_data=Model::get_user_info();
?>
<div class="friends-section">
        <div class="friends-title">
            <h1>Friends</h1>
        </div>
        <div class="friends-top-items">
            <div class="friend-btns">
                <button class="gradient-whiteoutline" id="share" onclick="window.open('https://t.me/share/url?url=https://t.me/CharliegameBot?startapp=<?=$user_data->login;?>');"><span>Share</span></button-->
                <button class="gradient-whiteoutline" id="copy-link" onclick="copytoC()" style="    margin: 0 auto;"><span>Copy link</span></button>
                <input type="text" style="display: none!important;" id="urlText_h" value="https://t.me/CharliegameBot?startapp=<?=$user_data->login;?>">
            </div>
            <div class="points-bar">
                <span style="width: 100%;text-align: center;font-size: 1em;color: white;font-weight: bold;">Get 500 Points for every new friend</span>
            </div><br>
            <div class="points-bar">
                <span>My Charlie points:</span>
                <div class="points-balance"><?=$user_data->balance_points;?></div>
            </div>
        </div>
        <div class="ranks">
            <div class="ranks-title">
                <h2>Ranks</h2>
            </div>
            <div class="ranks-items">
                <div class="ranks-items-items">

                    <?php
                       $ssd=Model::get_my_ref();      
        foreach ($ssd as $key => $value) {
          $sort_array[]=$value['balance_chrle'];
        }
        arsort($sort_array);
        foreach ($sort_array as $key => $value) {
          $new_array[]=$ssd[$key];
        }

        foreach ($new_array as $key => $value) {


                        //foreach (Model::get_my_ref() as $key => $value) {
                    ?>
                        <div class="ranks-item" data-number="<?=$key+1;?>">
                            <div class="ranks-avatar"><img src="<?=$value['avatar'];?>" alt=""></div>
                            <div class="ranks-name"><?=$value['name'];?></div>
                            <div class="ranks-balance"><?=intval($value['balance_chrle']);?> $CHRLEP</div>
                        </div>
                    <?php
                      }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
function copytoC() {
  // Get the text field
  var copyText = document.getElementById("urlText_h");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
}
</script>