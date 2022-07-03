<?php 
    
    include_once('lib/dbcon.php');
    include_once('head.php');
  
?>



<![if IE]>
<script type="text/javascript">
    //CustomEvent polyfill for IE compatibility
    (function () {

        if (typeof window.CustomEvent === "function") return false;

        function CustomEvent(event, params) {
            params = params || {bubbles: false, cancelable: false, detail: undefined};
            var evt = document.createEvent('CustomEvent');
            evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
            return evt;
        }

        CustomEvent.prototype = window.Event.prototype;

        window.CustomEvent = CustomEvent;
    })();
</script>
<![endif]>

<script type="text/javascript">
    var campaignID = '';
    var queryParametersCampaign = location.search.substring(1) ? location.search.substring(1) : '';

    function getQueryStringParams(name) {
        var match = RegExp('[?&]' + name + '=([^&#]*)', 'i').exec(window.location.search);
        var queryParam = match && match[1];
        if (queryParam == null) {
            return "";
        }
        else {
            return queryParam;
        }
    }
    if (queryParametersCampaign != '') {
        campaignID = getQueryStringParams('cid');
        sessionStorage.setItem("digitialDataQueryParametersCampaign", queryParametersCampaign);
        if (campaignID != null && campaignID != "") {
            sessionStorage.setItem("digitialDataCampaignID", campaignID);
        } else {
            if (sessionStorage.getItem("digitialDataCampaignID") != null && sessionStorage.getItem("digitialDataCampaignID") != "") {
                campaignID = sessionStorage.getItem("digitialDataCampaignID");
            }
        }
    } else if (sessionStorage.getItem("digitialDataQueryParametersCampaign") != null && sessionStorage.getItem("digitialDataQueryParametersCampaign") != "") {
        queryParametersCampaign = sessionStorage.getItem("digitialDataQueryParametersCampaign");
        campaignID = sessionStorage.getItem("digitialDataCampaignID");
    }
</script>

<script type="text/javascript">
    var pagePath = "/content/metlife/reference/homepage/component-library/chaptering";
    window.digitalData = {
        version: '1.0',
        eventTrack: function (cevt, eventDetail) {
            var msg = ' The "cevt" argument (required) is a string defining the Javascript custom event name';
            if (typeof cevt !== 'string' || cevt.length < 1) {
                throw msg;
            }
            if (typeof digitalData.event !== 'object') {
                digitalData.event = [];
            }
            if (typeof eventDetail !== 'object') {
                eventDetail = {
                    eventName: cevt
                };
            }
            digitalData.event.push(eventDetail);
            var ev = new CustomEvent(cevt, {
                'detail': eventDetail
            });
            document.getElementsByTagName('body')[0].dispatchEvent(ev);
        },
        getEventAttr: function () {
            var ev, i;
            ev = digitalData.event;
            i = ev.length - 1;
            return ev[i].attributes;
        },
        campaign: {
            id: campaignID,
            queryStringParameters: queryParametersCampaign
        },
        page: {
            pageInfo: {
                pageTemplateType: "/apps/MetlifeMarketGlobal/templates/reference/solution-detail",
                pageType:"Unspecified",
                audienceType: "Uncategorized"
            }
        }
    };
</script>


<script type="text/javascript">
    (function (win, doc, style, timeout) {
        var STYLE_ID = 'at-body-style';

        function getParent() {
            return doc.getElementsByTagName('head')[0];
        }

        function addStyle(parent, id, def) {
            if (!parent) {
                return;
            }
            var style = doc.createElement('style');
            style.id = id;
            style.innerHTML = def;
            parent.appendChild(style);
        }

        function removeStyle(parent, id) {
            if (!parent) {
                return;
            }
            var style = doc.getElementById(id);
            if (!style) {
                return;
            }
            parent.removeChild(style);
        }

        addStyle(getParent(), STYLE_ID, style);
        setTimeout(function () {
            removeStyle(getParent(), STYLE_ID);
        }, timeout);
    }(window, document, "#heroimage {opacity: 0 !important}", 8000));
</script>



    <script type="text/javascript">
        var oPageName = "MetLife.com ";
        var oPID = 18661;
    </script>









    
        <script src="https://evolution.metlife.com/assets.adobedtm.com/launch-EN0379f0d4da0c425b813fd7573a3070a7.min.js"></script>
    









    
        <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.css" type="text/css">






<div class="content-parsys parsys">




    
    
    <div class="chaptering parbase">




    
    <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-stickybits.min.js" defer></script>



    
    <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/chaptering/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/chaptering/clientlibs.min.css" type="text/css">





<div class="component chaptering component__spacing-bottom ">
    <div class="container enable-left-nav">
        <div class="row chaptering-row">
            
                <div class="chaptering-nav-button" tabindex="0" role="button" aria-label="chaptering">
                    <svg class="icon icon-chaptering" tabindex="-1" aria-hidden="true" focusable="false">
                        <use xlink:href="https://evolution.metlife.com/static/images/icons-metlife.svg#icon-list" tabindex="-1" aria-hidden="true" focusable="false"></use>
                    </svg>
                </div>
                <div class="chaptering-leftnav col-12 col-sm-12 col-md-3" data-aos="zoom-in" data-aos-once="true">
                    <div class="chaptering-leftnav-content" role="list">
                        <div class="chaptering-description-section">
                            <div class="chaptering-leftnav-description">
                                <p>Mobile description</p>

                            </div>
                            <span class="pull-right " role="button" tabindex="0" aria-label="close">
                            <svg class="icon icon-close" tabindex="-1" aria-hidden="true" focusable="false">
                                <use xlink:href="https://evolution.metlife.com/static/images/icons-metlife.svg#icon-close" tabindex="-1" aria-hidden="true" focusable="false"></use>
                            </svg>
                        </span>
                        </div>
                        
                            <div class="chaptering-leftnav-section chapter-1" data-chapter-redirect="chapter-1" tabindex="0" aria-label="Providing Confidence for our Customers." role="listitem" data-chapter-section-heading="chapter-1-heading">
                                <span class="border-top"></span>
                                <div class="chaptering-leftnav-title" role="link">
                                    <p>[소프트맥스 알고리즘을 이용한 학습자 분류]

</p>
                                </div>
                                <progress value="0" max="1" aria-hidden="true"></progress>
                                <span class="border-bottom"></span>
                            </div>
                        
                            <div class="chaptering-leftnav-section chapter-2" data-chapter-redirect="chapter-2" tabindex="0" aria-label="Strengthening Our Workforce" role="listitem" data-chapter-section-heading="chapter-2-heading">
                                
                                <div class="chaptering-leftnav-title" role="link">
                                    <p>[가장 효율적으로 일 하는 방법은 일을 하지 않는 것이다?]

</p>
                                </div>
                                <progress value="0" max="1" aria-hidden="true"></progress>
                                <span class="border-bottom"></span>
                            </div>
                        
                            <div class="chaptering-leftnav-section chapter-3" data-chapter-redirect="chapter-3" tabindex="0" aria-label="Creating Value as an Investor" role="listitem" data-chapter-section-heading="chapter-3-heading">
                                
                                <div class="chaptering-leftnav-title" role="link">
                                    <p>[익숙하지 않은 일은 어려운 일이 아니다. ]

</p>
                                </div>
                                <progress value="0" max="1" aria-hidden="true"></progress>
                                <span class="border-bottom"></span>
                            </div>
                        
                            <div class="chaptering-leftnav-section chapter-4" data-chapter-redirect="chapter-4" tabindex="0" aria-label="Empowering Our Communities" role="listitem" data-chapter-section-heading="chapter-4-heading">
                                
                                <div class="chaptering-leftnav-title" role="link">
                                    <p>[분석이 먼저다. ]

</p>
                                </div>
                                <progress value="0" max="1" aria-hidden="true"></progress>
                                <span class="border-bottom"></span>
                            </div>
                        <!--
                            <div class="chaptering-leftnav-section chapter-5" data-chapter-redirect="chapter-5" tabindex="0" aria-label="Protecting Our Environment" role="listitem" data-chapter-section-heading="chapter-5-heading">
                                
                                <div class="chaptering-leftnav-title" role="link">
                                    <p>[항상 고객의 입장에서]                                    </h2>
</p>
                                </div>
                                <progress value="0" max="1" aria-hidden="true"></progress>
                                <span class="border-bottom"></span>
                            </div>
-->
                    </div>
                </div>
            
            <div class="chaptering-container col-12 col-sm-12 col-md-9">
                
                    
                    
                    <div id="providing-confidence-for-our-customers" class="chapter-container-section chapter-1" data-chapter-section="chapter-1">
                        <div class="chaptering-hero-module bg" data-desktop-src="https://evolution.metlife.com/static/images/chaptering/chaptering-desktop.svg" data-tablet-src="https://evolution.metlife.com/static/images/chaptering/chaptering-tablet.svg" data-mobile-src="https://evolution.metlife.com/static/images/chaptering/chaptering-mobile.svg">
                            <div class="chapter-hero-module-intro">
                                <div class="chaptering-hero-module-numerical" data-aos="fade-up">
                                </div>
                                <div class="chaptering-hero-module-title" data-aos="fade-up">
                                    <h2 id="chapter-1-heading" tabindex="-1">
                                    소프트맥스 알고리즘을 이용한 학습자 분류

</h2>
                                </div>
                                <div class="hero-module-divider" data-aos="fade-up"></div>
                            </div>
                            <div class="chaptering-hero-module-description" data-aos="fade-up">
                            <p> 저는 딥러닝 소프트맥스 알고리즘을 이용해 학습 평가 로직 적중률을 80% 이상까지 올린 경험이 있습니다.<p>

학습 프로그램 개발에 막바지 해당 학습 프로그램을 평가하는 검사 결과 페이지 기획 업무를 맡게 되었습니다. 제가 만든 평가 기준에 따라 학습자의 학습 커리큘럼이 결정되고 이는 회사 매출에도 영향을 주는 중요한 요인 이였습니다.<p>

문항별로 가산점 부여하며 총점으로 분류하는 것만으로 해결 가능한가? 그렇다면 분류 기준 점수대를 어떻게 구성할까? 에 대한 고민을 계속하던 중 저는 지도 학습 방법인 소프트 맥스 알고리즘에서 답을 찾았습니다.<p>

자사 학습자의 학습 수준을 미리 파악하고 분류해 둔 상태에서 학습자에게 시험을 진행 시켜 결과 자료를 수집하고, 이 결과 데이터를 학습 데이터로 활용하여 기계 학습으로 채점 함수를 산출하는 방법이었습니다.<p>

나이, 문항의 정답 유무와 더불어 타 검사 결과를 기준 변수를 사용하여 소프트맥스 알고리즘을 이용해 채점 함수를 산출하여 학습 프로그램을 론칭하였고, 이렇게 분류된 학습자에게 학습 프로그램을 진행했습니다. 그리고 각 학습자의 지도교사에 해당 학습자가 해당 커리큘럼에 적합한지에 대한 인터뷰와 해당 학습 프로그램의 효과 측정을 한 결과, 우리가 50명의 학습자 중 40명 이상이 해당 학습 프로그램이 적합하고, 그 학습효과가 증가하였다는 결론을 얻게 되었습니다.<p>

학습효과에 완벽한 측정 및 시각화는 아직 불가능하지만, 소프트맥스와 같은 딥러닝 기술을 활용한다면 교육 시스템의 오랜 고민인 측정과 시각화에 대해 답을 찾는 과정에 대해 어느 정도 실마리를 제공 할 수 있을 것이라 생각합니다.<p>
                            </div>
                        </div>
                        




    
    
    <div class="wysiwyg-rte parbase">




    
    <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.css" type="text/css">








<section id="wysiwyg-rte-883957371" class="wysiwyg-rte component component__spacing-bottom " role="region" aria-labelledby="wysiwyg-rte-883957371--labelledby">
    <div id="wysiwyg-rte-883957371--labelledby" class="d-none" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    

                </div>
            </div>
        </div>
    </div>
</section></div>


    
    
    <div class="wysiwyg-rte parbase">




    
    



    








<section id="wysiwyg-rte-264383422" class="wysiwyg-rte component component__spacing-bottom " role="region" aria-labelledby="wysiwyg-rte-264383422--labelledby">
    <div id="wysiwyg-rte-264383422--labelledby" class="d-none" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    

                </div>
            </div>
        </div>
    </div>
</section></div>



                    </div>
                
                    
                    
                    <div id="strengthening-our-workforce" class="chapter-container-section chapter-2" data-chapter-section="chapter-2">
                        <div class="chaptering-hero-module bg" data-desktop-src="https://evolution.metlife.com/static/images/chaptering/chaptering-desktop.svg" data-tablet-src="https://evolution.metlife.com/static/images/chaptering/chaptering-tablet.svg" data-mobile-src="https://evolution.metlife.com/static/images/chaptering/chaptering-mobile.svg">
                            <div class="chapter-hero-module-intro">
                                <div class="chaptering-hero-module-numerical" data-aos="fade-up">
                                </div>
                                <div class="chaptering-hero-module-title" data-aos="fade-up">
                                    <h2 id="chapter-2-heading" tabindex="-1">
                                    가장 효율적으로 일 하는 방법은 일을 하지 않는 것이다?

</h2>
                                </div>
                                <div class="hero-module-divider" data-aos="fade-up"></div>
                            </div>
                            <div class="chaptering-hero-module-description" data-aos="fade-up">
                            <p>저는 홍보 효과가 낮은 뉴스레터 업무 시간을 홍보 효과가 좋은 SNS, 카카오톡 홍보에 투자하여 단일 상품 페이지 기준 전일 대비 카카오톡 홍보는 3.5배, SNS 홍보는 2.5배 트래픽 상승효과와 하루 사용자 2,000명대에서 2,500명대로 상승시킨 경험이 있습니다.
                    <p>
제가 이끌었던 서비스 플래닝팀은 서비스 기획 업무뿐만 아니라 홍보 / 디자인 / 플랫폼 운영 업무 등 다양한 업무를 수행하였습니다. 팀장으로 팀원의 업무 성과 및 효율을 분석하던 중 뉴스레터가 가장 많은 비중을 차지하는 것을 발견했습니다.
<p>
뉴스레터에 대한 리턴률이 낮은 것을 알고 있는 와중에서 해당 업무에 대한 비중이 높은 것은 이해가 가지 않았기에 홍보 성과를 분석할 필요를 느꼈습니다. 같은 상품을 같은 날 SNS, 카카오톡, 뉴스 레터에 같은 콘텐츠를 기재하여 유입경로를 분석한 결과, 전일 대비 트래픽 상승이 카오톡홍보은 평균 2배 정도, SNS 홍보는 평균 1.5배 정도 증가한 데 비해 뉴스레터는 유의미한 트래픽 변화가 발견하지 못했습니다.
<p>
이에 저희 팀은 뉴스레터에 대한 홍보 업무를 과감히 배제하고, 이렇게 확보한 업무 시간에 SNS, 카카오톡 홍보에 집중하기로 하였습니다. 이 결과 카카오톡은 2배에서 3.5배, SNS는 1.5배에서 2.5배의 트래픽효과를 상승할 수 있었습니다. 하루 사용자는 2,000명대에서 2, 5000명대로 상승하였습니다.
<p>
이 과정에서 저는 업무 진행을 위한 업무가 아닌, 끊임없이 효율성을 확인하고 효율성이 높은 업무에 집중한다면 궁극적인 목표를 이룰 수 있다는 결론을 얻을 수 있었습니다.
                            </div>
                        </div>
                        




    
    
    <div class="wysiwyg-rte parbase">




    
    



    








<section id="wysiwyg-rte-590554364" class="wysiwyg-rte component component__spacing-bottom " role="region" aria-labelledby="wysiwyg-rte-590554364--labelledby">
    <div id="wysiwyg-rte-590554364--labelledby" class="d-none" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    

                </div>
            </div>
        </div>
    </div>
</section></div>


    
    
    <div class="wysiwyg-rte parbase">




    
    



    








<section id="wysiwyg-rte-1773672867" class="wysiwyg-rte component component__spacing-bottom " role="region" aria-labelledby="wysiwyg-rte-1773672867--labelledby">
    <div id="wysiwyg-rte-1773672867--labelledby" class="d-none" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    

                </div>
            </div>
        </div>
    </div>
</section></div>



                    </div>
                
                    
                    
                    <div id="creating-value-as-an-investor" class="chapter-container-section chapter-3" data-chapter-section="chapter-3">
                        <div class="chaptering-hero-module bg" data-desktop-src="https://evolution.metlife.com/static/images/chaptering/chaptering-desktop.svg" data-tablet-src="https://evolution.metlife.com/static/images/chaptering/chaptering-tablet.svg" data-mobile-src="https://evolution.metlife.com/static/images/chaptering/chaptering-mobile.svg">
                            <div class="chapter-hero-module-intro">
                                <div class="chaptering-hero-module-numerical" data-aos="fade-up">
                                </div>
                                <div class="chaptering-hero-module-title" data-aos="fade-up">
                                    <h2 id="chapter-3-heading" tabindex="-1">
                                    익숙하지 않은 일은 어려운 일이 아니다. 

</h2>
                                </div>
                                <div class="hero-module-divider" data-aos="fade-up"></div>
                            </div>
                            <div class="chaptering-hero-module-description" data-aos="fade-up">
                            <p>저는 기획자 포지션으로 공공데이터 포탈에서 실거래가 정보를 받아, 부동산 실거래가 DB를 구축하고, 이 정보를 기반으로 랭킹 및 통계 시스템을 구현한 경험이 있습니다.
                <p>
복덕 판에 재직할 당시 경영진과 개발팀의 불화로 모든 개발자가 퇴사하는 상황이 있었습니다. 이에 따라 진행 중인 프로젝트가 중단될 위기에 빠졌고, 저는 기획업무와 함께 부동산 데이터베이스 구축이란 개발 업무를 병행하기로 대표님과 합의 하였습니다.
<p>
DB를 구축하는 모든 과정은 저에게 처음 진행하는 업무로 모든 업무가 쉬운 일은 아니었습니다. 공공 데이터 포털 API를 이용해 데이터를 우리 서버에 불러오는 작업, 10기가 넘는 데이터 테이블의 검색 속도를 향상하는 작업, 실거래 데이터를 이용해 통계 정보를 생성하는 작업 이 모든 작업이 저에게 처음 하는 작업기에 불안감으로 작용하였습니다.
<p>
막연한 불안감은 실제 업무를 진행하며 자연스럽게 해결되었습니다. 개발적으로 막히는 지점에 대한 해결책은 이미 인터넷을 통해 많은 개발자가 정리해 놓았기에 그들의 해결책을 인용하면 되었으며, 5기가가 넘는 부동산 실거래 데이터 핸들링에 대한 문제는 친한 개발자에게 SQL 학습을 진행하며 해결해 나갔습니다.
<p>
그 결과 무사히 기한 내 부동산 데이터베이스 구축뿐만 아니라 크롤링을 통한 시세 데이터베이스 구축, 이 데이터를 이용한 랭킹 및 통계 시스템 구현이란 산출물을 내게 되었습니다.
<p>
이 과정에서 저는 새로운 업무 진행에 대한 불안감은 익숙하지 않아 생기는 불안감일 뿐 실제 해당 업무를 진행하다 보면 해결할 수 있다는 인사이트를 얻게 되었습니다.
                            </div>
                        </div>
                        




    
    
    <div class="wysiwyg-rte parbase">




    
    



    








<section id="wysiwyg-rte-297151357" class="wysiwyg-rte component component__spacing-bottom " role="region" aria-labelledby="wysiwyg-rte-297151357--labelledby">
    <div id="wysiwyg-rte-297151357--labelledby" class="d-none" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 responsive-columns">
                <div class="richtext richtext-wysiwyg">
               

                </div>
            </div>
        </div>
    </div>
</section></div>


    
    
    <div class="wysiwyg-rte parbase">




    
    



    








<section id="wysiwyg-rte-886840585" class="wysiwyg-rte component component__spacing-bottom " role="region" aria-labelledby="wysiwyg-rte-886840585--labelledby">
    <div id="wysiwyg-rte-886840585--labelledby" class="d-none" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    

                </div>
            </div>
        </div>
    </div>
</section></div>



                    </div>
                
                    
                    
                   
                    <div id="empowering-our-communities" class="chapter-container-section chapter-4" data-chapter-section="chapter-4">
                        <div class="chaptering-hero-module bg" data-desktop-src="https://evolution.metlife.com/static/images/chaptering/chaptering-desktop.svg" data-tablet-src="https://evolution.metlife.com/static/images/chaptering/chaptering-tablet.svg" data-mobile-src="https://evolution.metlife.com/static/images/chaptering/chaptering-mobile.svg">
                            <div class="chapter-hero-module-intro">
                                <div class="chaptering-hero-module-numerical" data-aos="fade-up">
                                </div>
                                <div class="chaptering-hero-module-title" data-aos="fade-up">
                                    <h2 id="chapter-4-heading" tabindex="-1">
                                        분석이 먼저다
                                    </h2>
                                </div>
                                <div class="hero-module-divider" data-aos="fade-up"></div>
                            </div>
                            <div class="chaptering-hero-module-description" data-aos="fade-up">
                            <p>저는 메인페이지의 고객 행동을 분석하여 메인 페이지를 개선한 결과 메인페이지의 이탈률을 90%에서 70%로 낮춘 경험이 있습니다.
                <p>
오마이컴퍼니 이직 후 가장 먼저 진행한 업무는 메인 페이지 개선이었습니다. 메인 페이지를 개선하기 위해 문제점을 파악한 결과, 오마이컴퍼니 메인페이지의 문제점은 메인 페이지의 체류 시간이 1분 이상인 것에 있었습니다. 그 이유로 많은 정보를 전달하기 위해 고객이 원하지 않은 정보 나열, 가독성이 떨어지는 폰트 사용 등의 문제점이 존재하였습니다.
<p>
웹로그 분석을 통해 고객의 행동 패턴을 파악하여, 찾지 않는 메뉴와 콘텐츠를 파악하여 제거하고, 타 사이트를 방문하여 가독성이 좋은 폰트 스타일을 찾아 내부 투표를 제공하여 메인 페이지를 개선하는 프로젝트를 진행하였습니다.
<p>
그 결과 메인페이지의 이탈률을 90%에서 70%대로 낮춘 결과를 낼 수 있었습니다.
                            </div>
                        </div>
                        





                    </div>
                
                    
<!--                    
                    <div id="protecting-our-environment" class="chapter-container-section chapter-5" data-chapter-section="chapter-5">
                        <div class="chaptering-hero-module bg" data-desktop-src="https://evolution.metlife.com/static/images/chaptering/chaptering-desktop.svg" data-tablet-src="https://evolution.metlife.com/static/images/chaptering/chaptering-tablet.svg" data-mobile-src="https://evolution.metlife.com/static/images/chaptering/chaptering-mobile.svg">
                            <div class="chapter-hero-module-intro">
                                <div class="chaptering-hero-module-numerical" data-aos="fade-up">
                                </div>
                                <div class="chaptering-hero-module-title" data-aos="fade-up">
                                    <h2 id="chapter-5-heading" tabindex="-1">
   운영 기획 = Lean & 애자일 (?)
                                    </h2>
                                </div>
                                <div class="hero-module-divider" data-aos="fade-up"></div>
                            </div>
                            <div class="chaptering-hero-module-description" data-aos="fade-up">
저는 서비스 기획자라면 운영 기획 경험이 필요하다고 생각합니다. <p>                      
<p>  메가존 입사전 여러 회사 면접에서 "운영기획이 없는게 흠 이네요"란 피드백을 받은 적이 있습니다. 당시에는 무슨 의미인지 전혀 알지 못하였지만, 메가존에서 운영 기획을 2년간 진행하면 그 의미를 알 수 있었습니다. 
<p> 운영의 핵심은 장애가 발생하면 빠르게 처리해야 하고, 고객의 요구사항은 빠르게 파악하여 짧은 호흡으로 개선해야 하
<p>
<p>
<p>    
                        -->
</div>
                        </div>
                        



                        <?php   include_once('footer.php');?>