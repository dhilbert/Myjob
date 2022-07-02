<?php

$want_array=array(array('1233','11111','4444','사이트바로가기','K-006.png','K-006.png'));

?>



 <script type="text/javascript"
                    src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.js"
                    defer></script>
                <link rel="stylesheet"
                    href="https://www.metlife.co.kr//etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.css"
                    type="text/css">

        <div id="skiptomaincontent" tabindex="-1">
            <div class="immersive-brand-navigation">
               
                <div class="immersive-brand-navigation component ">
                    <div class="component__container">
                        <div class="background">
                        <?php
                        
                        for($i = 0 ; $i < count($want_array);$i++){
                            if($i==0    ){$temp_tex='active';}
                            $temp_want = $want_array[$i];
                              echo '
                              <div class="background__image bg '.$temp_tex.'"
                              data-desktop-src="img/'.$temp_want[4].'"
                              data-mobile-src="img/'.$temp_want[4].'"
                              style="background-position: center center;"></div>                         
                              
                              
                              ';      

                        }
                        
                        
                        
                        ?>
                        </div>
                     
                    <div class="headline">
                        <?php
                        
                        for($i = 0 ; $i < count($want_array);$i++){
                            if($i==0    ){$temp_tex='active';}

                            $temp_want = $want_array[$i];
                              echo '
                            <div class="headline__item '.$temp_tex.'">
                              <div class="container">
                                  <div class="row">
                                      <div class="headline__item-container">
                                          <div class="headline__item-content-container">
                                              <div
                                                  class="col-12 col-sm-8 col-md-7 offset-md-1 headline__item-content">
                                                  <div class="headline__item-eyebrow">'.$temp_want[0].'</div>
                                                  <h2 class="headline__item-text font-header-4 font-header-2-md">
                                                        '.$temp_want[1].'
                                                  </h2>
                                              </div>
                                              <div
                                                  class="col-12 col-sm-4 offset-md-1 col-md-3 headline__item-content-cta brand-button">
                                                  <a class="headline__item-cta"
                                                      href="#" target="_blank"
                                                      aria-label="&#39;내게 착 맞는 여행찾기&#39; 이벤트 참여">'.$temp_want[3].'</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>                            
                              
                              
                              ';      

                        }
                        
                        
                        
                        ?>  
                           
                        
                        
                            
                            
                            
                            
                        </div>
                        <div class="category">
                        <?php
                        
                        for($i = 0 ; $i < count($want_array);$i++){
                            $temp_want = $want_array[$i];
                              echo '


                            <div class="category__item active" role="button">
                                <div class="category__item-container">
                                    <p class="category__item-text font-subhead-desc-4" aria-live="assertive"
                                        aria-atomic="true">
                                        '.$temp_want[0].'<span class="sr-only state"></span>
                                    </p>
                                </div>
                            </div>';
                        }
                        ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>





















    <main>


    <!--메인 배너--->
    <!--
      

-->
<!--메인 배너--->








