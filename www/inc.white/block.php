<?php
$prev = $id-1;
if($prev<1)$prev = '';

$next = $id+1;
//$prev = "";
?>

      <div class="content">
        <div class="container">
          <div class="wallet wallet_block">
            <div class="wallet__wrap">
              <div class="wallet__top wallet__top_block">
<?php
if($prev>0)
{
$url = "/$item/$item2/$prev";
print "
                <a class=\"wallet__back-btn btn btn-default blue with-icon\" href=\"$url\">
                  <div class=\"icon\">
                    <div class=\"svg-icon svg-icon_icon-arrow\">
                      <svg>
                        <use xlink:href=\"#icon-arrow\"></use>
                      </svg>
                    </div>
                  </div>Назад
                </a>
";
}
?>
                <h1 class="wallet__top-title">Block: <span><?php print $id?></span>
                </h1>
<?php
if($next)
{
$url = "/$item/$item2/$next";
print "
                <a class=\"wallet__next-btn btn btn-default blue with-icon\" href=\"$url\">Вперёд<div class=\"icon\">
                    <div class=\"svg-icon svg-icon_icon-arrow\">
                      <svg>
                        <use xlink:href=\"#icon-arrow\"></use>
                      </svg>
                    </div>
                  </div>
                </a>
";
}
?>
              </div>
              <ul class="wallet__tabs nav">
                <li>
                  <a class="active" href="#explorer-tab1" data-toggle="tab">TRANSTACIONS</a>
                </li>
                <li>
                  <a href="#explorer-tab2" data-toggle="tab">BLOCK DETAILS</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="explorer-tab1">
                  <div class="wallet__table wallet__table_block">
                    <div class="wallet__table-wrap">
                      <table class="table">
                        <thead>
                          <tr>
                            <td>Date</td>
                            <td>Type</td>
                            <td>Amount</td>
                            <td>Fee</td>
                            <td>From</td>
                            <td>TO</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                          <tr>
                            <td>25.02.3030 20:19:15</td>
                            <td>
                              <div class="wallet__table-icon">
                                <div class="svg-icon svg-icon_icon-money">
                                  <svg>
                                    <use xlink:href="#icon-money"></use>
                                  </svg>
                                </div>
                              </div>
                            </td>
                            <td>3 892,48</td>
                            <td>2,13</td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                            <td>
                              <a href="">Ktd86793577a309aea4c1eaae22fc5bc32733ac6bac8b5159c67ca24f635494eeb</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="explorer-tab2">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td>Previous Block Hash:</td>
                        <td>bb5aa67b80c9fdcb2198dbfcc7f838019d72b558f83c1e78bcbbd48c3ca3958b</td>
                      </tr>
                      <tr>
                        <td>Payload Length:</td>
                        <td>5828</td>
                      </tr>
                      <tr>
                        <td>Total Amount NQT:</td>
                        <td>2697977</td>
                      </tr>
                      <tr>
                        <td>Generation Signature:</td>
                        <td>e9a5ef1ba8a9cd009600e9de23b089960592a29469ef7b43609124f7ee5e65af</td>
                      </tr>
                      <tr>
                        <td>Generator Public Key:</td>
                        <td>9283cedcf8df77fb213419a61c8ce32dd35134e0592e8bb0d8556c0f1586b404</td>
                      </tr>
                      <tr>
                        <td>Base Target:</td>
                        <td>2197327171</td>
                      </tr>
                      <tr>
                        <td>Payload Hash:</td>
                        <td>0aa76d46d1aeeed114e2197140ccf09c18684dba51a9e144a563653381bd732a</td>
                      </tr>
                      <tr>
                        <td>Number of Transactions:</td>
                        <td>18</td>
                      </tr>
                      <tr>
                        <td>Block Signature:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Version:</td>
                        <td>7</td>
                      </tr>
                      <tr>
                        <td>Total Fee NQT:</td>
                        <td>3464</td>
                      </tr>
                      <tr>
                        <td>Cumulative Difficulty:</td>
                        <td>2018242432564281</td>
                      </tr>
                      <tr>
                        <td>Block:</td>
                        <td>18247657293680668859</td>
                      </tr>
                      <tr>
                        <td>Height:</td>
                        <td>908306</td>
                      </tr>
                      <tr>
                        <td>Timestamp:</td>
                        <td>50512772</td>
                      </tr>
                      <tr>
                        <td>Generator:</td>
                        <td>
                          <a class="show_account_modal_action user-info" href="#" data-user="PRIZM-SRWT-95BX-H9LT-5PJJW">PRIZM-SRWT-95BX-H9LT-5PJJW</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Previous Block:</td>
                        <td>
                          <a class="show_block_modal_action" href="#" data-block="908305">14699126312474663611</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Block Generation Time:</td>
                        <td>03.03.2020 18:37:31</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      