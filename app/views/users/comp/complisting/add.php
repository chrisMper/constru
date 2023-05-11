<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/comp.css">

<body>
    <!------------------------------ navbar ------------------------------------>
    <!--   -->

    <!------------------------------------ add listing form ---------------------------------------------->
    <main>
        <div class="container">
            <form id="addform" action="<?php echo URLROOT; ?>/listings/add" method="POST" enctype="multipart/form-data">
                <span id="topic">Add Listing</span>
                <!--first step -->
                <div class="add">
                    <span>Stages</span>
                    <div id="stages-container">
                        <div class="stage">
                            <div class="progressbar">
                                <div class="progress" id="progress"></div>
                                <div class="progress-step progress-step-active" data-title="Intro"></div>
                                <div class="progress-step" data-title="Contact"></div>
                                <div class="progress-step" data-title="ID"></div>
                                <div class="progress-step" data-title="Password"></div>
                            </div>

                            <p><input id="stage1" name="stage1" placeholder="Enter stage 1 here"></p>
                            <p>Contact person</p>
                            <p><input id="contact_person1" name="contact_person1" placeholder="07x xxxxxxx"></p>
                        </div>
                    </div>
                    <button id="add-stage-btn">Add Stage</button>
                </div>
                <div class="sub-discard-btn">
                    <button type="submit" class="submitbtn">Submit<br>
                        <button type="reset" class="discardbtn">Discard<br>
                </div>
            </form>
        </div>
        <script src="<?php echo URLROOT; ?>/js/compadd.js"></script>
        <script src="<?php echo URLROOT; ?>/js/addstages.js"></script>



        <main>
</body>

</html>