<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">

<body>
    <!------------------------------ navbar ------------------------------------>
    <div class='navbar'>
        <?php include APPROOT . '/views/inc/navbar.php'; ?>
    </div>

    <!------------------------------------ add listing form ---------------------------------------------->
    <main>
        <div class="container">


            <form id="addform" action="<?php echo URLROOT; ?>#" method="POST" enctype="multipart/form-data">
                <span id="topic">Add Curriculum vitae Data</span>

                <!--first step -->
                <div class="add">
                    <p><input id="Name" type="text" name="Name" placeholder="Enter Name here"></p>

                    <p><input id="description" type="text" name="description" placeholder="Enter short description here"></p>

                    <p><input id="contactPerson" type="text" name="jobTitle" placeholder="Enter job title here ex: 'Civil engineer'"></p>
                    <p><input id="contactEmail" type="text" name="contactEmail" placeholder="Enter email here"></p>
                    <p><input id="contactNumber" type="number" name="contactNumber" placeholder="Enter contact Number here"></p>
                    <p><input id="address1" type="text" name="adress1" placeholder="Enter your adress line 1 here"></p>
                    <p><input id="address2" type="text" name="adress2" placeholder="Enter your adress line 2 here"></p>
                    <p><input id="address3" type="text" name="adress3" placeholder="Enter your adress line 3 here"></p>

                    <div id="stages-container">
                        <div class="stage">
                            <span>Skill 1 </span>
                            <input id="skill" type="text" name="skill" placeholder="Enter skill 1 here">
                            <span>Indicate your skill as a percentage</span>
                            <select id="Presentages" name="presentages" placeholder="Enter presentage of your skill">
                                <?php for ($i = 10; $i <= 100; $i += 10) : ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?>% </option>
                                <?php endfor; ?>
                            </select><br />
                        </div>

                    </div>
                    <button type="button" onclick="addStage()">Add Stage</button>


                    <div id="education-container">
                        <div class="stage">
                            <span>Education qualification 1 </span>
                            <input id="education" type="text" name="education" placeholder="Enter education qualification 1 here">
                            <span>Start year</span>
                            <select id="Start" name="Start">
                                <?php for ($i = 1965; $i <= 2023; $i++) : ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?> </option>
                                <?php endfor; ?>
                            </select>
                            <span>End year</span>
                            <select id="End" name="End">
                                <?php for ($i = 1966; $i <= 2023; $i++) : ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?> </option>
                                <?php endfor; ?>
                            </select><br />
                        </div>

                    </div>
                    <button type="button" onclick="addEducation()">Add Stage</button>


                    <div id="experience-container">
                        <div class="stage">
                            <span>Experience 1 </span>
                            <input id="experience" type="text" name="experience" placeholder="Enter experience qualification 1 here">
                            <span>Start year</span>
                            <select id="Start" name="Start">
                                <?php for ($i = 1965; $i <= 2023; $i++) : ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?> </option>
                                <?php endfor; ?>
                            </select>
                            <span>End year</span>
                            <select id="End" name="End">
                                <?php for ($i = 1966; $i <= 2023; $i++) : ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?> </option>
                                <?php endfor; ?>
                            </select><br />
                        </div>

                    </div>
                    <button type="button" onclick="addExperience()">Add Stage</button>



                    <span>Input Profile Picture</span>
                    <p><input id="inputfile" type="file" name="image"></p>
                </div>
                <div class="sub-discard-btn">
                    <button type="reset" class="discardbtn">Discard<br>

                        <button type="submit" class="submitbtn">Submit<br>

                </div>
            </form>

        </div>
        <script src="<?php echo URLROOT; ?>/js/compadd.js"></script>
        <script src="<?php echo URLROOT; ?>/js/addstages.js"></script>



        <main>
</body>

</html>