
<div class="container mr-45">
    <div class="row">
        <div class="col-xs-9 content" id="opacity">
            <div class="row">
                <div class="col-xs-4 ">
                    <img src="img/sa4.png" class="full-width" style="margin-top: 6px;">
                </div>
                <div class="col-xs-8">
                    <p id="ourteam_t1" class="color-red bold" style="font-size:30px;">NATIVE TEACHERS<p>
                    <p id="ourteam_t2" class="size-normal text-justify">100% teachers in TOPICA Native are from US, UK and Australia to
                        ensure that students can practice listening with various accents.
                        The selected teachers all possess years of experience at
                        prestigious colleges and English centers.  All of them have to
                        undergo strict ability examinations and receive thorough
                        training of online teaching skills so that the quality of classes
                        always reach the highest standard possible.</p>
                </div>
            </div>
            <div class="row margin-30">
                <div class="col-xs-8 ">
                    <p id="ourteam_t3" class="color-red bold" style="font-size:30px;">PERSONAL ADVISOR<p>
                    <p id="ourteam_t4" class="size-normal text-justify">During your study with TOPICA Native you will have your own
                        English advisor who takes the role of a tutor and closely follows
                        your progress from the first day until the very last. Every week
                        she will send documents to you via email and contact you at
                        least twice a week to help you review grammar and theory
                        lessons. She will also offer advice to help you improve your skills.</p>        
                </div>
                <div class="col-xs-4" >
                    <img src="img/sa5.png" class="full-width" style="margin-top: 6px;">         
                </div>
            </div>
            <div class="row margin-30">
                <div class="col-xs-4">
                    <img src="img/sa6.png" class="full-width" style="margin-top: 6px;">         
                </div>
                <div class="col-xs-8">
                    <p id="ourteam_t5" class="color-red bold" style="font-size:30px;">TECHNICAL SUPPORT</p>
                    <p id="ourteam_t6" class="size-normal text-justify">Before joining an online class, TOPICA's technical team will check
                        your Internet connection, headphones, microphone to ensure
                        the highest quality possible, then they will put you into a class
                        with learners at the same the level as yours. There will be a
                        technician on duty in class to assist you when necessary.</p>         
                </div>
            </div>
        </div>
         <div class="col-xs-3 pro">
<!--            <p style="font-size:20px; margin-bottom: 20px">Is our program suitable<br/>-->
<!--            for you? <a href="http://info.topicanative.asia/"><span style="text-decoration: underline;color: #2f95ab; font-size:23px; font-weight:bold">Find out now!</span></a>-->
<!--            </p>-->
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


<div class="container-fluid mr-top-45" style="border-top: solid #DBAC69;"></div>
<div class="container student" >
    <div class="text-center row">
        <h2 id="ourteam_t7" class="color-red">INTRODUCTION ABOUT TOPICA</h2>
        <p style="border-top: 3px solid #DBAC69; width:230px; margin:auto; "></p>
    </div>
    <div class="row stu text-center">
        <iframe width="784" height="441" src="https://www.youtube.com/embed/o8qeft4UHEE" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
</div>

