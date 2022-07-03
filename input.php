<?php 
    
    include_once('lib/dbcon.php');
    include_once('head.php');
    
  
?>








    
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/table-content/clientlibs.min.js" defer></script>
<link   rel="stylesheet"      href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/table-content/clientlibs.min.css" type="text/css">



<form name="frm" role="form" method="get" action="input_proc.php">


<section id="table-content-1157936150" class="table-content component component__spacing-bottom " role="region" aria-labelledby="table-content-1157936150--labelledby">
    <div class="container table-content_container">
        
        <div class="col-12 col-sm-8 offset-sm-2 responsive-columns table-content_wrapper">
            <div class="col-12 table-content_wrapper_content">
                <h3 id="table-content-1157936150--labelledby" class="col-12 font-eyebrow-4 font-subhead-desc-4-sm table-content_header">입사를 제안해 주세요.</h3>
                <div class="row table-content_category">
                    
                <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                                회사명 <font color='red'>*</font>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            
                            <input type="text"
                             autocomplete="off" 
                             id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                              name="t1" style="position: relative;" 
                              placeholder="회사명을 입력해주세요" >                 
                            
                            
                            
                            </div>



                        </div> 
                        
                        


                        <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                                담당자<font color='red'>*</font>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            
                            <input type="text"
                             autocomplete="off" 
                             id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                              name="t2" style="position: relative;" 
                              placeholder="연락 받을 시 분의 성명을 입력해 주세요." >                 
                            </div>
                        </div>



                        <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                                연락처<font color='red'>*</font>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            
                            <input type="text"
                             autocomplete="off" 
                             id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                              name="t3" style="position: relative;" 
                              placeholder="연락 받을 시 연락처를 입력해 주세요." >                 
                            </div>
                        </div>

                        
                        <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                                이메일<font color='red'>*</font>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            
                            <input type="text"
                             autocomplete="off" 
                             id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                              name="t4" style="position: relative;" 
                              placeholder="이력서를 보내드릴 이메일을 입력해 주세요." >                 
                            </div>
                        </div>

                        




                        
                        <h3 id="table-content-1157936150--labelledby" class="col-12 font-eyebrow-4 font-subhead-desc-4-sm table-content_header"> 면접은 선택 사항입니다. </h3>
                        

                        <div class="row table-content_category_border">
                        <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                            면접 일자
                        </div>
                        <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                        
                        <input type="date"
                            autocomplete="off" 
                            id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                            name="t5" style="position: relative;" 
                            value = '2022-07-01' >                 
                        </div>
                    </div>

                    <div class="row table-content_category_border">
                        <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                            면접 시간
                        </div>
                        <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                        
                        
                            <select multiple class="form-control" name='t6'>
                                <option value=1>9:00~10:00</option>
                                <option value=2>10:00~11:00</option>
                                <option value=3>11:00~12:00</option>
                                <option value=4>12:00~13:00</option>
                                <option value=5>13:00~14:00</option>
                                <option value=6>14:00~15:00</option>
                                <option value=7>15:00~16:00</option>
                                <option value=8>16:00~17:00</option>
                                <option value=9>17:00~18:00</option>
                                <option value=10>18:00~19:00</option>
                                <option value=11>19:00~20:00</option>

							
							</select>              
                        </div>
                    </div>

                    <div class="row table-content_category_border">
                        <div class="col-12 "> <input  type='submit'  type="submit" style ='    background: #007abc;
    box-shadow: rgb(0 0 0 / 20%) 0 2px 3px 0;
    border-radius: 2px;
    font-size: 14px;
    color: #fff;
    height: 40px;
    border: 1px solid #007abc;
    padding: 20px 10px;
    line-height: 1px;
    margin-bottom: 10px;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: bold;
    margin-top: 5px;'
    value="입사제안하기">

</form>
                      
                        </div>
                    </div>

                      



                    
                </div>
            </div>
            <div class="table-content-gradientback d-none"></div>
            
        </div>
        <!--
            <div class="col-12 col-sm-8 offset-sm-2 responsive-columns font-content-link-4">
                <a href="/content/forms/NewForms/BrochuresAndUsermanuals/life-insurance/MET_FU~1.PDF" target="_blank" aria-label="Download pdf" tabindex="0">
                    <span class="table-content_download_icon" aria-hidden="true" tabindex="-1" focusable="false">
                        <svg class="icon icon-download" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="/static/images/icons-metlife.svg#icon-download" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </span>
                    <span class="table-content_download_text">Download pdf</span>
                </a>
            </div>
-->
    </div>
</section></div>

    




<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/table-content/clientlibs.min.js" defer></script>
<link   rel="stylesheet"      href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/table-content/clientlibs.min.css" type="text/css">



<form name="frm" role="form" method="get" action="input_check.php">


<section id="table-content-1157936150" class="table-content component component__spacing-bottom " role="region" aria-labelledby="table-content-1157936150--labelledby">
    <div class="container table-content_container">
        
        <div class="col-12 col-sm-8 offset-sm-2 responsive-columns table-content_wrapper">
            <div class="col-12 table-content_wrapper_content">
                <h3 id="table-content-1157936150--labelledby" class="col-12 font-eyebrow-4 font-subhead-desc-4-sm table-content_header">입사 제안을 확인하세요.</h3>
                <div class="row table-content_category">
                    
                <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                                회사명 <font color='red'>*</font>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            
                            <input type="text"
                             autocomplete="off" 
                             id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                              name="t1" style="position: relative;" 
                              placeholder="회사명을 입력해주세요" >                 
                            
                            
                            
                            </div>



                        </div> 
                        
                        


                        <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                                담당자<font color='red'>*</font>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            
                            <input type="text"
                             autocomplete="off" 
                             id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                              name="t2" style="position: relative;" 
                              placeholder="연락 받을 시 분의 성명을 입력해 주세요." >                 
                            </div>
                        </div>  <div class="row table-content_category_border">
                        <div class="col-12 "> <input  type='submit'  type="submit" style ='    background: #007abc;
    box-shadow: rgb(0 0 0 / 20%) 0 2px 3px 0;
    border-radius: 2px;
    font-size: 14px;
    color: #fff;
    height: 40px;
    border: 1px solid #007abc;
    padding: 20px 10px;
    line-height: 1px;
    margin-bottom: 10px;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: bold;
    margin-top: 5px;'
    value="입사 제안 확인 하기">

</form>
                      
                        </div>
                    </div>

                      