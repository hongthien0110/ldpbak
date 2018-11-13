<div class="container mr-45">
    <div class="row">
        <div class="col-xs-9 content"id="opacity">
            <p id="method_t1" class="text-justify mr-top-30 "><span style="color:#DBAC69;font-weight: bold">TOPICA Native</span> is an online English program that applies the most modern technology: focusing 
                on communication skill development by encouraging students to practice speaking with native
                teachers on a daily basis, following topics which are related to life and work.<br/>
                What is the advantage of this modern teaching method applied at<span style="color:#DBAC69;font-weight: bold"> TOPICA Native</span> in comparison
                with the traditional method?
            </p>
            <div style="margin-top: 60px">
                <h2 class="text-center bold color-red">L I P E</h2>
                <h3 id="method_t2" class="color-red text-center" style="margin-top: 0px">LECTURE - INTERACTION - PRACTICE - EXAM</h3>
                <p style="border-top: 1px solid #DBAC69; width:360px; margin:auto; margin-bottom:20px"></p>
                <p id="method_t3" class="text-justify  mr-top-20 ">With the traditional method (L.I.P.E), you start with theory lesson (Lecture), following by
                    discussion with classmates (Interactive), then practicing with teachers (Practice) and test (Exam).
                </p>
            </div>
            <div style="margin-top: 60px"> 
                <h2 class="text-center bold color-red">P I E L E</h2>
                <h3 id="method_t4" class="color-red text-center" style="margin-top: 0px">PRACTICE - INTERACTION - EVALUATION - LECTURE - EXAM</h3>
                <p style="border-top: 1px solid #DBAC69; width:360px; margin:auto;  margin-bottom:20px"></p>
                <p  id="method_t5" class="text-justify  mr-top-20 font-size18">With the advanced method of <span style="color:#DBAC69; font-weight: bold">P.I.E.L.E</span> from the beginning, you get to <span style="color:#DBAC69; font-weight: bold">(Practice)</span> with native teachers even when you have not thoroughly understand theory, following by exchange and discussion with classmates and your advisor <span style="color:#DBAC69; font-weight: bold">(Interaction)</span> that will help you reognize your mistakes, then the teacher will evaluate <span style="color:#DBAC69; font-weight: bold">(Evaluation)</span> your performance in class. After that, the teacher will summarize the lesson <span style="color:#DBAC69; font-weight: bold">(Lecture)</span> and finally, you will take periodical <span style="color:#DBAC69; font-weight: bold">(Exam)</span> to determine you current English level.
                </p>
                <p id="method_t6" class="text-justify  mr-top-20 ">
                    Furthermore, by joining <span style="color:#DBAC69;font-weight: bold">TOPICA Native English Online</span> with <span style="color:#DBAC69; font-weight: bold">P.I.E.L.E</span> process, you have a chance to
                    practice more and work toward the final goal that is to apply what you learn into real life, instead
                    of mere results from tests and exams, so you will achieve outstanding improvement. 
                </p>
            </div>
        </div>
        <div class="col-xs-3 pro">
<!--            <p style="font-size:20px; margin-bottom: 20px; margin-top: 30px;">Is our program suitable<br/>-->
<!--                for you? <a href="http://info.topicanative.asia/"><span style="text-decoration: underline;color: #2f95ab; font-size:23px; font-weight:bold">Find out now!</span></a>-->
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
                        <div class="full-width "> 
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
<div class="container mr-top-45" style="width:1200px;">
<!--    <table class="tb-lm">-->
<!--        <tr class="color-red" style="font-size:50px;">-->
<!--            <td style="font-weight: bold;">P</td>-->
<!--            <td style="font-weight: bold;">I</td>-->
<!--            <td style="font-weight: bold;">E</td>-->
<!--            <td style="font-weight: bold;">L</td>-->
<!--            <td style="font-weight: bold;">E</td>-->
<!--        </tr>-->
<!--        <tr class="color-red" style="font-size:24px;">-->
<!--            <td>PRACTICE</td>-->
<!--            <td>INTERACTION</td>-->
<!--            <td>EVALUATION</td>-->
<!--            <td>LECTURE</td>-->
<!--            <td>EXAM</td>-->
<!--        </tr>-->
<!--        <tr style="font-size:17px; ">-->
<!--            <td>-->
<!--                Practice speaking despite incomprehensive understanding of theory<br/><br/><br/>-->
<!--            </td>-->
<!--            <td>-->
<!--                Discuss, Q&A with teacher about one’s right and wrong<br/><br/><br/>-->
<!--            </td>-->
<!--            <td>-->
<!--                Student receives detailed evaluation on his/her weak points in grammar, vocabulary pronunciation-->
<!--            </td>-->
<!--            <td>-->
<!--                Focus on what student is not good at (vocabulary, grammar, pronunciation)<br/><br/><br/>-->
<!--            </td>-->
<!--            <td>-->
<!--                Test and re-evaluate one’s study results<br/><br/><br/><br/>-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--    </table>-->
    <img src="img/PIELE.png" alt="" style="width: 100%; margin: 10px auto; display: block;">
</div>
<div class="container-fluid mr-top-45" style="border-top: solid #DBAC69;"></div>
<div class="container student" >
    <div class="text-center row">
        <h2 class="color-red">OUR CLASS</h2>
        <p style="border-top: 3px solid #DBAC69; width:230px; margin:auto; "></p>
    </div>
    <div class="row stu text-center">
    <iframe width="784" height="441" src="https://www.youtube.com/embed/WOnYvvv-2F8" frameborder="0"  allowfullscreen></iframe>
   </div>
</div>
