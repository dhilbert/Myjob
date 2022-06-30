<?php 
    
    include_once('lib/dbcon.php');
    include_once('head.php');
    include_once('banner.php');
  
?>

    














    <script type="text/javascript"
                    src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/sorting-hat/clientlibs.min.js"
                    defer></script>
                <link rel="stylesheet"
                    href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/sorting-hat/clientlibs.min.css"
                    type="text/css">



        <div class="content-parsys parsys">
            <div class="sorting-hat parbase">
               
                <div class="sorting-hat component__spacing-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-14 col-md-10 offset-md-1 sortinghat-border-top">
                                <div class="sortinghat-desktop-bordertop"></div>
                            </div>
                            <div class="col-12 col-md-5 sorting-hat__left-container">
                                <div class="sorting-hat__left-container--image">
                                    <div class="sorting-hat__headline-left font-header-2-md font-header-4-sm font-header-4"
                                        aria-label="원하시는 서비스를 선택하세요​" data-default-text="원하시는 서비스를 선택하세요​">
                                        <h3 class="headline-text">원하시는 서비스를 선택하세요​</h3>
                                        <div class="sorting-hat__headline-left-backButton desktop d-none" role="button"
                                            aria-label="sorting hat" tabindex="0" data-previous>
                                            <svg class="icon icon-chevron-left" aria-hidden="true" tabindex="-1"
                                                focusable="false">
                                                <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-left"
                                                    aria-hidden="true" tabindex="-1" focusable="false"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 sorting-hat__right-container">
                                <div class="row sorting-hat__right-section">
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://www.metlife.co.kr/customer-service/contact-us/request-consultation/"
                                            target="_self" tabindex="0" aria-label="Inclusion Plus" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-chat" role="img" aria-hidden="true"
                                                    tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-chat"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>Inclusion Plus</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://cyber.metlife.co.kr/" target="_blank" tabindex="0"
                                            aria-label="재무건강 연구 및 캠페인" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-phone" role="img" aria-hidden="true"
                                                    tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-phone"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>재무건강 연구 및 캠페인</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://www.metlife.co.kr/customer-protection" target="_self"
                                            tabindex="0" aria-label="기부금 활용실적" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-change-beneficiary" role="img"
                                                    aria-hidden="true" tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-change-beneficiary"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>기부금 활용실적</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://brand.metlife.co.kr/pn/paReal/main.do" target="_blank"
                                            tabindex="0" aria-label="MetLife금융그룹" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-folder-more" role="img"
                                                    aria-hidden="true" tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-folder-more"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>MetLife금융그룹</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://cyber.metlife.co.kr/claim/billNotice" target="_blank"
                                            tabindex="0" aria-label="지역사회 나눔" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-file-a-claim" role="img"
                                                    aria-hidden="true" tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-file-a-claim"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>지역사회 나눔</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://cyber.metlife.co.kr/" target="_blank" tabindex="0"
                                            aria-label="비전과 전략" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-policy-note" role="img"
                                                    aria-hidden="true" tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-policy-note"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>비전과 전략</span>
                                            </div>
                                        </a>
                                    </div>
                                  
                                </div>
                                <div class="show-more__section hide-show-more">
                                    <div class="sorting-hat__showmore font-cta-1">
                                        <div href="#" class="showmore-link" role="button" aria-label="Show More"
                                            tabindex="0">
                                            Show More
                                            <svg class="icon sorting-hat-plus" aria-hidden="true" tabindex="-1"
                                                focusable="false">
                                                <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-plus"
                                                    aria-hidden="true" tabindex="-1" focusable="false"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="sorting-hat__headline-left-backButton mobile d-none d-md-none d-lg-none"
                                    tabindex="0" role="button" aria-label="sorting hat" data-previous="">
                                    <svg class="icon icon-chevron-left" aria-hidden="true" tabindex="-1"
                                        focusable="false">
                                        <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-left"
                                            aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-10 offset-md-1 sortinghat-border-bottom">
                                <div class="sortinghat-desktop-borderbottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>       


            <div class="value-prop parbase">
                <script type="text/javascript"     src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.js"
                    defer></script>
                <link rel="stylesheet"          href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.css"
                    type="text/css">
                <section class="component value-prop component__spacing-bottom   " role="region"
                    aria-labelledby="value_prop_copy--labelledby">
                    <div id="value_prop_copy--labelledby" class="d-none" aria-hidden="true">arialabel</div>
                    <div class="gradiant-div"></div>
                    <div class="value-prop__wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-11 offset-md-1 value-prop__bar">
                                    <div class="value-prop__border"></div>
                                </div>
                                </div>
                            <div class="header_panel row">
                                <h2
                                    class="col-8 offset-md-1 font-header-4 font-header-4-sm font-header-2-md value-prop__title">
                                    누적 나눔활동(2005.01.01~2021.12.31)

                                </h2>
                                <div class="col-4 col-md-2 value-prop__controls">
                                    <a class="carousel-control left js-leftClick" href="#" role="button" tabindex="0"
                                        aria-label="Prev">
                                        <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-left"
                                                aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </a>
                                    <span class="updatepipe"></span>
                                    <a class="carousel-control right js-rightClick" href="#" role="button" tabindex="0"
                                        aria-label="Next">
                                        <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-right"
                                                aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 offset-md-1 col-lg-11-offset-1-right-edge carousel-4-items no-carousel value-prop__item-container"
                                    data-aos="fade-left" data-aos-delay="350" data-aos-duration="750"
                                    aria-live="assertive" aria-atomic="true">
                                    <div class="value-prop__item col-md-3">
                                        <div class="value-prop__container">
                                            <div class="value-prop__item__bg">
                                                <img src="https://www.metlife.co.kr/content/dam/metlife/kr/author/about-us/about-metlife/ca/Icon-PSP-ca-202111.png"
                                                    alt="" aria-hidden="true" />
                                            </div>
                                            <div class="value-prop__item__content  ">
                                                <div
                                                    class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    봉사자

                                                </div>
                                                <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                    <p>58,473명</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="value-prop__item col-md-3">
                                        <div class="value-prop__container">
                                            <div class="value-prop__item__bg">
                                                <img src="https://www.metlife.co.kr/content/dam/metlife/kr/author/about-us/about-metlife/ca/ca-Icon-performancereview-fixes-202112.png"
                                                    alt="" aria-hidden="true" />
                                            </div>
                                            <div class="value-prop__item__content  ">
                                                <div
                                                    class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    봉사시간
                                                </div>
                                                <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                    <p>192,473시간                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="value-prop__item col-md-3">
                                        <div class="value-prop__container">
                                            <div class="value-prop__item__bg">
                                                <img src="https://www.metlife.co.kr/content/dam/metlife/kr/author/about-us/about-metlife/ca/Group-26439-ca-202111.png"
                                                    alt="" aria-hidden="true" />
                                            </div>
                                            <div class="value-prop__item__content  ">
                                                <div
                                                    class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    수혜자

                                                </div>
                                                <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                    <p>11,329,008명
</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>           
        </div>                 

<?php

include_once('main_content.php')

?>

<!--





-->











<?php
include_once('footer.php')


?>