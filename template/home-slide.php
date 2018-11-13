<div class="container-fluid height" id="slide"  >
    <div class="row ">
        <div class="text-center" >
            <div class="slide-image"><img src="img/Slide1.jpg" alt="" class="height" style="width:100% !impotant;margin-left: -10"/></div>
            <div class="slide-image"><img src="img/Slide2.jpg" alt="" class="height"  style="width:100% !impotant;margin-left: -50"/></div>
            <div class="slide-image"><img src="img/Slide3.jpg" alt="" class="height"  style="width:100% !impotant;margin-left: -20"/></div>
            <div id="form" class="col-xs-4" style="background: white; position: relative; top: 0; float: right; right:0 !important">
                <form class="e_submit e_form_submit form-horizontal" method="POST" action="" style="padding: 25px;">
                    <div class="text-center mr-top-15" style="color: black">
                        <p style="font-weight: bold; font-size: 35px; margin-bottom: 0;" id="form_t1">ลงทะเบียนรับสิทธิ์</p>
                        <p style="font-size: 20px; margin-top: 0;" id="form_t2">ทดสอบวัดระดับภาษาอังกฤษ ฟรี</p>
                    </div>
                    <div class="form-group">
                        <div class="full-width mr-top-15" style="border: 1px solid #fff">
                            <input type="text" class="form-control" name="name" placeholder="Name" id="form_t3">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="full-width mr-top-15" style="border: 1px solid #fff">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" id="form_t4">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="full-width mr-top-15" style="border: 1px solid #fff">
                            <input type="text" class="form-control" name="email" placeholder="Email" id="form_t5">
                        </div>
                    </div>
<!--                    <div class="form-group  ">-->
<!--                        <div class="full-width ">-->
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
                        <select class="form-control mr-top-15" id="age" name="age" style="color: black !important">
                            <option value="0" id="form_t6">--- กรุณาเลือกช่วงอายุ ---</option>
                            <option value="17" id="form_t7">ต่ำกว่า 18 ปี</option>
                            <option value="20" id="form_t8">18 - 22 ปี</option>
                            <option value="31" id="form_t9">มากกว่า 22 ปี</option>
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
                        <div class="full-width mr-top-15">
                            <button type="submit" class="btn-form btn-default-form e_btn_submit" id="form_t10">ยืนยันรับสิทธิ์</button>
                        </div>
                    </div>
                    <div class="text-center" style="color: #fff; font-size: 12px; font-weight:bold; padding-top: 15px;">
                        ข้อมูลของคุณจะถูกเก็บไว้เป็นความลับ <br/>
                        ใช้เพียงเพื่อการเรียนกับ TOPICA Native เท่านั้น
                    </div>
                </form>
            </div>
        </div>
        <div class="slide-pager">
            <ul class="pager-container"></ul>
            <div class="slide-control-prev"></div>
            <div class="slide-control-next"></div>
        </div>
    </div>
    
</div>

