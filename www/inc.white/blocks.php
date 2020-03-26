<?php

$jss[] = $item;
$glob[title][] = "Блоки";
print "\n<script>var block_page = 1;</script>\n";
?>
      <div class="content">
        <div class="container">

          <div class="wallet wallet_blocks">
            <div class="wallet__wrap">

<?php
$stat_headers_title = "Блоки";
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
