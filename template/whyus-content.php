
<div class="container">
    <div class="row">
        <div class="col-xs-9 content mr-top-45" id="opacity">
            <div class="row">
                <div class="col-xs-4 ">
                    <img src="img/sa1.png" >
                </div>
                <div class="col-xs-8">
                    <h2 id="whyus_t2" class="bold color-red">ANY TIME! ANYWHERE!</h2>
                    <p  id="whyus_t3" class="text-justify">With only an Internet-connected laptop, everyone can learn
                        English online any time, anywhere and avoid traffic jam when
                        going to English centers during peak hours. In addition, the
                        method of e-learning makes it possible for anyone to study
                        English with international standards without travelling to big
                        cities like Bangkok.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 ">
                    <h2  id="whyus_t4" class="bold color-red">ALL YOU CAN LEARN</h2>
                    <p  id="whyus_t5" class="text-justify">TOPICA Native is the platform of learning English online,
                        focusing on communication skill development. Everyday, from
                        8.00am to 24.00pm, TOPICA Native opens online classes. Learners
                        are instructed by native teachers in vividly designed classes.
                        As a result, the lessons are familiar with learners as if they
                        were talking in real life which brings in the best results possible.</p>        
                </div>
                <div class="col-xs-4">
                    <img src="img/sa2.png" >         
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 ">
                    <img src="img/sa3.png" >         
                </div>
                <div class="col-xs-8">
                    <h2  id="whyus_t6" class="bold color-red">WITH PERSONAL SCHEDULE</h2>
                    <p  id="whyus_t7" class="text-justify">Each learner is given an individual roadmap. They do
                        not have to wait for classes as they can join in right after
                        registering and completing an entrance test. Even when there
                        is only one learner in the class, the lesson still goes on as normal.</p>         
                </div>
            </div>
        </div>
        <div class="col-xs-3 pro">
<!--            <p  id="whyus_t8" style="font-size:20px; margin-bottom: 20px;margin-top: 30px;">Is our program suitable<br/>-->
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
                    <div class="form-group" >
                        <div class="full-width " style="border: 1px solid #fff">
                            <input type="text" class="form-control" name="name"  placeholder="Name" id="form_t3">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="full-width " style="border: 1px solid #fff">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" id="form_t4">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="full-width" style="border: 1px solid #fff">
                            <input type="text" class="form-control" name="email" placeholder="Email" id="form_t5">
                        </div>
                    </div>
<!--                    <div class="form-group  ">-->
<!--                        <div class="full-width "> -->
<!--                            <input type="text" class="form-control" name="line_id" placeholder="Line ID (Optional)">-->
<!--                        </div>-->
<!--                    </div>-->
                  
                    <!-- <div class="form-group  ">
                        <div class="full-width " style="border: 1px solid #fff">
                            <input type="text" class="form-control" name="age" placeholder="Age">
                        </div>
                    </div> -->
                   <!--  test form age -->
                    <div class="form-group">
                        <select class="form-control" id="age" name="age"  style="color: black !important">
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
                        <div class="">
                            <button type="submit" class="btn-form btn-default-form short e_btn_submit" id="form_t10">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</div>

<!-- sb -->
<div class="container  sb">
    <div class="row">
        <!--1-->
        <div class="col-xs-4 text-center">
            <div class="red-border"></div>
            <img src="img/sb1.png" alt="" >
            <div>
                <h3  id="whyus_t9" class="color-red">PERSONAL ADVISOR</h3>
                <p  id="whyus_t10"class="text-center">
                    Advisors always follow students'<br/>
                    learning progress in online English<br/>
                    classes and remind them to do<br/>
                    homework.
                </p>
            </div>

        </div>

        <!--2-->
        <div class="col-xs-4 text-center">
            <div class="red-border"></div>
            <img src="img/sb2.png" alt="">
            <!--            <div style="border-left:1px solid #DBAC69;border-right: 1px solid #DBAC69;">-->
            <div>
                <h3 id="whyus_t11" class="color-red">SPECIAL METHOD</h3>
                <p  id="whyus_t12" class="text-center" >
                    The online English learning method that<br/>
                    TOPICA Native has been applying is<br/>
                    designed for those who want to improve<br/>
                    listening and speaking skills, which most<br/>
                    of Thai people are not very good at.<br/>
                    However, the learners still are provided<br/>
                    with knowledge about grammar and
                    vocabulary.
                </p>
            </div>

        </div>

        <!--3-->
        <div class="col-xs-4 text-center">
            <div class="red-border"></div>
            <img src="img/sb3.png" alt="" >
            <div>
                <h3  id="whyus_t13" class="color-red">100% NATIVE TEACHERS</h3>
                <p  id="whyus_t14" class="text-center">
                    TOPICA Native's teaching staff consists<br/>
                    of over 200 native speakers from<br/>
                    Europe, America anf Australia, giving<br/>
                    the opportunity for students to<br/>
                    familiarize themselves with various<br/>
                    accents.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="border-top: solid #DBAC69; margin-top:50px;"></div>
<div class="container student" style="width:1200px;" >
    <div class="text-center row">
        <h2  id="whyus_t15" class="color-red">ความสำเร็จของนักเรียนของเรา</h2>
        <p style="border-top: 3px solid #DBAC69; width:230px; margin:auto; "></p>
    </div>
    <div class="row stu">
        <div class="col-xs-4 text-center">
            <img src="img/stu1.png" >
            <h3 class="color-red" style="min-height: 40px"><span id="whyus_t16">Ms. Pusshamon Khongkha</span><br/><span id="whyus_t17">Nurse</span></h3>
            <p id="whyus_t18" style="min-height: 330px">ประทับใจในรูปแบบการเรียนของ TOPICA Native คือเราสามารถเข้าเรียนบทเรียนในชั้นกับครูชาวต่างชาติ และยังสามารถเข้าเรียนบทเรียนเดิมได้อีกครั้งในวันต่อมากับชั้นเรียนครูไทย บทเรียนเดียวกัน แต่เราได้เรียนประโยคมากขึ้น เหมือนได้ทบทวน และเพิ่มเติมไปพร้อมกัน เป็นการจัดตารางเรียนที่ดีมาก<br/><br/>
            </p>
        </div>
        <div class="col-xs-4 text-center">
            <img src="img/stu2.png" >
            <h3 class="color-red" style="min-height: 40px"><span id="whyus_t19">Mr. Nititorn C.</span><br/><span id="whyus_t20">Online Businessman</span></h3>
            <p id="whyus_t21" style="min-height: 330px">ภาษาของผมอ่อนมาก ได้แค่ yes, no ,ok ผมต้องดันตัวเอง ธุรกิจของผมขยายกลุ่มลูกค้าจากคนไทย เป็นต่างชาติ ซึ่งทำให้ผมต้องใช้ภาษาอังกฤษในการสื่อสารกับลูกค้า ถ้าภาษาไม่ได้ผมก็ขายไม่ได้ ธุรกิจผมก็ไปไม่ได้.
            </p>
        </div>
        <div class="col-xs-4 text-center">
            <img src="img/stu3.png" >
            <h3 class="color-red" style="min-height: 40px"><span id="whyus_t22">Ms. Sopa Mamee</span><br/><span id="whyus_t23">Manager</span></h3>
            <p id="whyus_t24" style="min-height: 330px">ดิฉันเป็นหัวหน้างาน ภาษาอังกฤษต้องได้ ดิฉันเริ่มหันมาพัฒนาทักษะภาษาอังกฤษด้วยตัวเองก่อน ซึ่งพื้นฐานพอจะอ่านออกบ้าง แต่ฟังรัวๆไม่รู้เรื่อง แล้วเราต้องไปเป็นโค้ชให้พนักงานที่มาจากต่างประเทศ ต้องให้เพื่อนคอยช่วยเช็คภาษาอังกฤษให้ตลอด โดยเฉพาะเวลาจะร่างเอกสารเกี่ยวกับภาษาอังกฤษ หลังจากเรียนกับ TOPICA ตอนนี้สามารถคิดแล้วพูดเองได้เลย ไม่ต้องใช้เอกสารอีกแล้ว ทักษะทางการสื่อสารเราดีขึ้นเยอะ อาจจะไม่ถูกแกรมม่าไปทั้งหมด แต่รู้ว่ามันพัฒนาขึ้นเยอะจริงๆ.
            </p>
        </div>
    </div>
</div>


