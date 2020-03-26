              <div class="wallet__top">
                <h1 class="wallet__top-title"><?php print $stat_headers_title;?></h1>
                <div class="wallet__search-wrap">
                  <p>Поиск</p>
                  <form class="wallet__search" action="">
                    <input class="form-control" type="text" placeholder="Address / Txhash /BlkHash / BlkNum" />
                    <button class="btn" type="submit">
                      <div class="svg-icon svg-icon_icon-search">
                        <svg>
                          <use xlink:href="#icon-search"></use>
                        </svg>
                      </div>
                    </button>
                  </form>
                </div>
              </div>
              <div class="balances">
                <div class="balances__item">
                  <div class="balances__icon">
                    <div class="svg-icon svg-icon_icon-arrows-up">
                      <svg>
                        <use xlink:href="#icon-arrows-up"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="balances__num" id="p_block_last">&nbsp;
                  </div>
                  <div class="balances__desc balances__desc3">Последний блок</div>
                </div>
                <div class="balances__item">
                  <div class="balances__icon">
                    <div class="svg-icon svg-icon_icon-copy">
                      <svg>
                        <use xlink:href="#icon-copy"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="balances__num" id="p_txs">&nbsp;
                  </div>
                  <div class="balances__desc balances__desc1">Транзакций</div>
                </div>
                <div class="balances__item">
                  <div class="balances__icon">
                    <div class="svg-icon svg-icon_icon-time">
                      <svg>
                        <use xlink:href="#icon-time"></use>
                      </svg>
                    </div>
                  </div>
<?php
/*
print "                  <div class=\"balances__num\" id=\"p_bps_tps\">&nbsp;
                  </div>
                  <div class=\"balances__desc\">Block Time / Tx Time</div>
";

*/
print "                  <div class=\"balances__num\" id=\"p_bps\">&nbsp;
                  </div>
                  <div class=\"balances__desc\">Block Time</div>
";

?>
<!--
                  <div class="balances__num" id="p_bps_tps">&nbsp;
                  </div>
                  <div class="balances__desc">Block Time / Tx Time</div>
-->
                </div>

                <div class="balances__item">
                  <div class="balances__icon">
                    <div class="svg-icon svg-icon_icon-cart">
                      <svg>
                        <use xlink:href="#icon-cart"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="balances__num" id="p_wals">&nbsp;
                  </div>
                  <div class="balances__desc balances__desc2">Кошельков</div>
                </div>
              </div>
