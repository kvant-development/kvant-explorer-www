<?php

$stat_headers_title = "Список адресов сети";
$jss[] = $item;
$jss[] = "block_stat";

$glob[title][] = $stat_headers_title;

?>
      <div class="content">
        <div class="container">

          <div class="wallet wallet_blocks">
            <div class="wallet__wrap">

<?php

include "stat_headers.php";
?>

              <div class="wallet__table wallet__table_blocks">
                <div class="wallet__table-wrap" id="p_tbl">
                </div>
              </div>

            </div>
<?php
//include "paginator.php";
?>


          </div>
        </div>
      </div>
