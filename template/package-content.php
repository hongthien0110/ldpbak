<div class="container mr-45">
    <div class="row">
        <div class="col-xs-9 content mr-top-30">
            <div class="payment">
                <div id="package_t1">Learning Program with flexible fee based on student level</div>
                <div id="package_t2">After receiving consultation and completing a pretest, you will have an individual learning roadmap and
                    get help selecting the most suitable package for your level.
                </div>     
            </div>
            <div class="payment" style="margin-top: 30px">
                <div id="package_t3">Payment method</div>
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <p id="package_t4">BY TRANSFER</p>
                        <img src="img/p1.png">
                    </div>
                    <div class="col-xs-4 text-center">
                        <p id="package_t5">BY CASH</p>
                        <img src="img/p2.png">
                    </div>
                    <div class="col-xs-4 text-center">
                        <p id="package_t6" style="white-space: nowrap;">BY CREDIT CARD</p>
                        <img src="img/p3.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3 pro">

            <div class="row" style="margin-top:30px;">
                <div class="col-xs-9">
                    <p style="font-weight:bold; margin:0;font-size:18px">CALL US</p>
                    <p style="font-size: 23px; color:#DBAC69; font-weight:bold; margin:0">0999 100 245</p>
                </div>
                <div class="col-xs-3">
                    <img src="img/call_center.png" style="width: 50px; height: 60px; margin-left: 5px;">
                </div>
            </div>
            <div><p style="font-weight:bold;font-size:18px">OR LET US CALL YOU BACK</p></div> 

            <!--form-->

            <div id="form2">
                 <form class="e_submit e_form_submit form-horizontal" method="POST" action="">
                    <div class="form-group">
                        <div class="full-width ">
                            <input type="text" class="form-control" name="name"  placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="full-width "> 
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="full-width"> 
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
<!--                    <div class="form-group  ">-->
<!--                        <div class="full-width "> -->
<!--                            <input type="text" class="form-control" name="line_id" placeholder="Line ID (Optional)">-->
<!--                        </div>-->
<!--                    </div>-->
                    
                    <!-- <div class="form-group  ">
                        <div class="full-width "> 
                            <input type="text" class="form-control" name="age" placeholder="Age">
                        </div>
                    </div> -->
                   <!--  test form age -->
                    <div class="form-group">
                        <select class="form-control" id="age" name="age"  style="color: black !important">
                            <option value="0">--- กรุณาเลือกช่วงอายุ ---</option>
                            <option value="ต่ำกว่า 18 ปี">ต่ำกว่า 18 ปี</option>
                            <option value="18 - 22 ปี">18 - 22 ปี</option>
                            <option value="มากกว่า 22 ปี">มากกว่า 22 ปี</option>
                            
                        </select>
                    </div>
                    <?php
                    echo "<input type='hidden' class='e_domain_ref' name='http_referer' value=" . $ref . ">";
                    echo "<input type='hidden' name='domain' value=" . $domain . ">";
                    echo "<input type='hidden' name='id_camp_landingpage' value=" . $id . ">";
                    echo "<input type='hidden' name='preview' value=" . $preview . ">";
                    echo "<input type='hidden' name='code_chanel' value=" . $code_chanel . ">";
                    ?>
                    <div class="form-group "> 
                        <div class="">
                            <button type="submit" class="btn-form btn-default-form short e_btn_submit">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


