<!-- css of searchgig is on search.css -->

<!------------------------------ navbar ------------------------------------>
<?php include APPROOT . '/views/inc/searchNavBar.php'; ?>
<!-- -----------------------------list-container------------------------------- -->
<body>
    <div class="form">
        <h1>Create Cv</h1>
        <form>
            <!-- <form action="?php echo URLROOT; ?>users/register" method="post"> -->
            <div class="inputBox">
                <input type="text" name="name" > <!-- autofil -->
                <span>Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="title" ><!-- autofil -->
                <span>title</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="mobile" ><!-- autofil -->
                <span>Mobile</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="email" ><!-- autofil -->
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="address" ><!-- autofil -->
                <span>Address</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="technicalskills">
                <span>Technical Skills</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="interestedareas">
                <span>Interested Areas</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="personalqualities" >
                <span>Personal Qualities</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="personalskills" >
                <span>Personal Skills</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="education" >
                <span>Education</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="experience">
                <span>Experience</span>
                <i></i>
            </div>
            <input type="submit" name="submit" value="Submit">
    </div>
    </form>
</body>


