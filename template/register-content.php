

<div class="container mr-top-45">
    <div class="row">
        <div class="col-xs-8 text-center mr-top-30" id="opacity">
            <div class="row ">

                <div class="col-xs-2 ">
                    <p class="color-red  size-60 mr-30">01</p>
                </div>
                <div class="col-xs-10 border-red radius-10">
                    <p id="register_t1" id="package_t1" class=" color-red size-normal mr-top-20 bold">
                        FILLING IN YOUR CONTACT INFORMATION INTO APPLICATION FORM
                    </p>
                    <p id="register_t2" class="mr-bottom-45"> Please fill in your contact information correctly including: Full name,<br/>
                        Phone Number, Email address and Age to receive our free consultantion
                    </p>
                </div>
            </div>
            <div class="row mr-45 " >
                <div class="col-xs-10 border-red radius-10">
                    <p id="register_t3" class=" color-red size-normal mr-top-20 bold">
                        
                        RECEIVING ALL INFORMATION ABOUT THE PROGRAM  FROM OUR CONSULTANTS
                     
                    </p>
                    <p id="register_t4" class="mr-bottom-20"> 
                        Consultants from TOPICA Native will call to give you all information you need<br/>
                        to know about the program and answer all your questions about the program
                    </p>
                </div>
                <div class="col-xs-2 ">
                    <p class="color-red  size-60 mr-30">02</p>
                </div>
            </div>


            <div class="row mr-45 " >
                <div class="col-xs-2 ">
                    <p class="color-red size-60 mr-30">03</p>
                </div>
                <div class="col-xs-10 border-red radius-10">
                    <p id="register_t5" class=" color-red size-normal mr-top-20 bold">
                        TESTING YOUR ENGLISH SKILL BY INTERNATIONAL STANDARDS
                    </p>
                    <p id="register_t6" class="mr-bottom-45">
                        Testing your English Skill at TOPICA Native via CASEC Test and<br/>
                        Interview with a TESTER
                    </p>
                </div>
            </div>

            <div class="row mr-45 " >
                <div class="col-xs-10 border-red radius-10">
                    <p id="register_t7" class=" color-red size-normal mr-top-20 bold">
                        MAKING A TUITION PAYMENT FOR YOUR COURSE
                    </p>
                    <p id="register_t8" class="mr-bottom-45">
                        Tuition fee is based on individual learning roadmap, you can make<br/>
                        your tuition by cash, credit card, bank transfer and Cash-on-Delivery
                    </p>
                </div>
                <div class="col-xs-2 ">
                    <p class="color-red  size-60 mr-30">04</p>
                </div>
            </div>



            <div class="row mr-45" style="margin-bottom:60px;">
                <div class="col-xs-2 ">
                    <p class="color-red  size-60 mr-30">05</p>
                </div>
                <div class="col-xs-10 border-red radius-10">
                    <p id="register_t9" class=" color-red size-normal mr-top-20 bold">
                        STARTING YOUR COURSE IMMEDIATELY WITH YOUR OWN<br/>
                        LEARNING ROADMAP
                    </p>
                    <p id="register_t10" class="mr-bottom-20">
                        Student's learning roadmap at TOPICA Native is individual so you can start learning right away without waiting for other students
                    </p>
                </div>
            </div>



        </div>
        <div class="col-xs-3 col-xs-offset-1 pro">
            <p style="font-size:20px; margin-bottom: 20px; margin-top: 30px;">Is our program suitable<br/>
                for you? <a href="http://info.topicanative.asia/"><span style="text-decoration: underline;color: #2f95ab; font-size:23px; font-weight:bold">Find out now!</span></a>
            </p>
            <div class="text-center">
                 <a href="./Package.php"><img src="img/Banner_n01.jpg" style="width:106%;"></a>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-xs-9">
                    <p style="font-weight:bold; margin:0;font-size:18px">CALL US</p>
                    <p style="font-size: 23px; color:#DBAC69; font-weight:bold; margin:0">0999 100 245</p>
                </div>
                <div class="col-xs-3">
                    <img src="img/call_center.png" style="width: 50px; height: 60px; margin-left: 5px;">
                </div>
            </div>
            <div><p style="font-weight:bold;font-size:18px">OR LET US CALL YOU BACK</p></div> 

            <!--form.......................-->

            <div id="form2">
                 <form class="e_submit e_form_submit form-horizontal" method="POST" action="./mol_topmito/helios_save.php">
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
            <div class="text-left">
                 <img src="img/muiten.png" style="width: 45%;margin-left: -100px;margin-top: -22px;">
            </div> 
        </div>
    </div>
</div>




