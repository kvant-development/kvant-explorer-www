
      <div class="content">
        <div class="container">
          <div class="wallet wallet_explorer">
            <div class="wallet__wrap">
              <div class="wallet__top">
                <h1 class="wallet__top-title">Кошелек</h1>
                <div class="wallet__block wallet__block_wallet">
                  <div class="wallet__head">
                    <h3 class="wallet__title">Баланс кошелька KVNT</h3>
                    <div class="wallet__icon wallet__icon_wallet">
                      <div onclick=location.href="http://wallet.kvant.io" class="svg-icon svg-icon_icon-wallet-stroke">
                        <svg>
                          <use xlink:href="#icon-wallet-stroke"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="wallet__content">
                    <div class="wallet__balance" id="p_wallet_balance2">&nbsp;
                    </div>
                  </div>
                  <div class="wallet__footer">
<?php
print "                    <div class=\"wallet__num\" id=\"copy-text\">$wal</div>\n";
?>
                    <div class="wallet__icon wallet__icon_copy">
                      <div class="svg-icon svg-icon_icon-copy">
                        <svg>
                          <use xlink:href="#icon-copy"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
                <form class="wallet__search" action="">
                  <input class="form-control" type="text" placeholder="Найти по ID" />
                  <button class="btn" type="submit">
                    <div class="svg-icon svg-icon_icon-search">
                      <svg>
                        <use xlink:href="#icon-search"></use>
                      </svg>
                    </div>
                  </button>
                </form>
              </div>
              <div class="wallet__table wallet__table_type2">
                <div class="wallet__table-wrap" id="wallet_table">


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      