<?php 
    
    include_once('lib/dbcon.php');
    include_once('head.php');
    


    $t1 = isset($_GET['t1']) ? $_GET['t1'] : null;
    $t2 = isset($_GET['t2']) ? $_GET['t2'] : null;





  
    $sql	 = "select * from myjob
				
    
    where t1 = '".$t1."'
    and t2 = '".$t2."'
    order by idx DESC
    limit 1
    ;";
            
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
$info	 = mysqli_fetch_array($res);

if($info==Null) {
	echo "<script>
	alert('정확한 정보를 입력해 주세요. 입사 제안을 하신적이 없습니다.');
	history.back();
	</script> ";
}






?>








    
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/table-content/clientlibs.min.js" defer></script>
<link   rel="stylesheet"      href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/table-content/clientlibs.min.css" type="text/css">


<form name="frm" role="form" method="get" action="input_update.php">



<section id="table-content-1157936150" class="table-content component component__spacing-bottom " role="region" aria-labelledby="table-content-1157936150--labelledby">
    <div class="container table-content_container">
        
        <div class="col-12 col-sm-8 offset-sm-2 responsive-columns table-content_wrapper">
            <div class="col-12 table-content_wrapper_content">
                <h3 id="table-content-1157936150--labelledby" class="col-12 font-eyebrow-4 font-subhead-desc-4-sm table-content_header">입사를 제안해 주세요.</h3>
                <div class="row table-content_category">
                    
                <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                                입사 제안 상태
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            <?php 


$array = array('','답변전','거절','감사합니다.');
echo $array[$info['stuu']]
                            
                            ?>
                            
                            
                            </div>


<?php 
    if($info['stuu']==1){}
    else{


?>

                            <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                            <?php 


$array = array('','답변전','거절 사유','감사의말');
echo $array[$info['stuu']]
                            
                            ?>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            
                            <?php 



echo $info['qqqqq']
                            
                            ?>
                            
                            </div>

<?php }?>











                        </div>  <div class="row table-content_category_border">
                            <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                                회사명 <font color='red'>*</font>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                            
                            <input type="text"
                             autocomplete="off" 
                             id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                              name="t1" style="position: relative;" 
                              placeholder="회사명을 입력해주세요" value='<?php echo $info['t1']?>'>                 
                            
                            
                            
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
                              placeholder="연락 받을 시 분의 성명을 입력해 주세요."  value='<?php echo $info['t2']?>'>                       
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
                              placeholder="연락 받을 시 연락처를 입력해 주세요."  value='<?php echo $info['t3']?>'>                            
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
                              placeholder="이력서를 보내드릴 이메일을 입력해 주세요."  value='<?php echo $info['t4']?>'>              
                            </div>
                        </div>

                        
                        <input type="hidden"
                             autocomplete="off" 
                             id="guideContainer-rootPanel-userInputPanel-firstName___widget"
                              name="idx" style="position: relative;" 
                              placeholder="이력서를 보내드릴 이메일을 입력해 주세요."  value='<?php echo $info['idx']?>'>              
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
                            value = '<?php echo $info['t5']?>'>             
                        </div>
                    </div>

                    <div class="row table-content_category_border">
                        <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title">
                            면접 시간
                        </div>
                        <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.">
                        
                        
                            <select multiple class="form-control" name='t6'>
                                <option value=1  <?php if($info['t6']==1){echo "selected";}?>>              9:00~10:00</option>
                                <option value=2  <?php if($info['t6']==2){echo "selected";}?>>10:00~11:00</option>
                                <option value=3 <?php if($info['t6']==3){echo "selected";}?>>11:00~12:00</option>
                                <option value=4 <?php if($info['t6']==4){echo "selected";}?>>12:00~13:00</option>
                                <option value=5 <?php if($info['t6']==5){echo "selected";}?>>13:00~14:00</option>
                                <option value=6 <?php if($info['t6']==6){echo "selected";}?>>14:00~15:00</option>
                                <option value=7 <?php if($info['t6']==7){echo "selected";}?>>15:00~16:00</option>
                                <option value=8 <?php if($info['t6']==8){echo "selected";}?>>16:00~17:00</option>
                                <option value=9 <?php if($info['t6']==9){echo "selected";}?>>17:00~18:00</option>
                                <option value=10 <?php if($info['t6']==10){echo "selected";}?>>18:00~19:00</option>
                                <option value=11 <?php if($info['t6']==11){echo "selected";}?>>19:00~20:00</option>

							
							</select>              
                        </div>
                    </div>

                    <?php 
                     if($info['stuu']==3){}
                     else{
                    
                    ?>

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
    value="입사 제안 수정하기">

</form>
                      
                        </div>
                    </div>

                      <?php
                     } 
                      ?>



                    
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

    

