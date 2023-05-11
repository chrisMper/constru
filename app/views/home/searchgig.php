<!-- css of searchgig is on search.css -->
<!------------------------------ navbar ------------------------------------>
<?php include APPROOT . '/views/inc/SearchNavSide.php'; ?>
<!-- -----------------------------list-container------------------------------- -->
<div class="searchbody">

    <div class="main-container">
        <div class="searchgig-list-container">
            <div class="list-container">
                <div class="left-mid">
                    <div class="left-col">
                        <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $data['listing']->Photos; ?>">
                        <div class="level">
                            <span>Level 1</span>
                        </div>
                    </div>
                    <div class='mid-col'>
                        <p class='topic'><?php echo $data['listing']->Title;   ?></p>
                        <p class='decription'></p>
                        <div class="serviceProvider">
                            <img src="<?php echo URLROOT; ?>/img/mycart.png">
                            <?php foreach ($data['serviceProvider'] as $serviceProvider) :
                                if ($serviceProvider->email == $data['listing']->UserEmail) : ?>
                                    <span><?php echo $serviceProvider->fName;
                                            echo " "; ?><?php echo $serviceProvider->lName; ?></span>
                            <?php endif;
                            endforeach; ?>
                        </div>
                        <div class="discount">
                            <span>10% offers are mentioned here</span>
                        </div>
                    </div>
                </div>
                <div class='right-col'>
                    <div class="rating">
                        <span><?php echo $data['listing']->visiterCount; ?> views</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="row">
                        <div class="column">Service Completion</div>
                        <div class="column">4.7</div>
                    </div>
                    <div class="row">
                        <div class="column">Friendliness</div>
                        <div class="column">4.7</div>
                    </div>
                    <div class="row">
                        <div class="column">Punctuality</div>
                        <div class="column">4.7</div>
                    </div>
                    <div class="row">
                        <div class="column">Response Time</div>
                        <div class="column">24 hrs</div>
                    </div>
                    <div class="row">
                        <div class="column">No. of Orders Completed</div>
                        <div class="column">100</div>
                    </div>
                    <div class="row">
                        <div class="column">No. of Active Days</div>
                        <div class="column">180</div>
                    </div>
                    <div class="row">
                        <div class="column">Cancellations</div>
                        <div class="column">3</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="image-column">
                <div class="display-images-1">
                    <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $data['listing']->Photos; ?>">
                </div>
                <div class="display-images">
                    <div class="display-images-2">
                        <img src="<?php echo URLROOT; ?>/img/mycart.png">
                    </div>
                    <div class="display-images-2">
                        <img src="<?php echo URLROOT; ?>/img/mycart.png">
                    </div>
                    <div class="display-images-2">
                        <img src="<?php echo URLROOT; ?>/img/mycart.png">
                    </div>
                    <div class="display-images-2">
                        <img src="<?php echo URLROOT; ?>/img/mycart.png">
                    </div>
                </div>
            </div>
            <div class="description-column">
                <div class="text-box">
                    <span><?php echo $data['listing']->Description;   ?></span>
                </div>
                <div class="button-box">
                    <a href="<?php echo URLROOT; ?>/pages/viewcv"><button type="submit" class="viewDetailsBtn btn-1">View Cv</a>
                    <a href="<?php echo URLROOT; ?>/pages/chat"><button type="submit" class="viewDetailsBtn btn-2">Contact</a>
                    <a href="#"><button type="submit" class="viewDetailsBtn add-btn">Book Service</a>
                </div>
                <div class="note-box">
                    <span>Before booking please contact service provider and share your projevt details. (Eg: Requirements, Timeline, Budget)</span>
                </div>

            </div>
        </div>



        <div class="total_reviews">
            <span>47,376 Reviews</span>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>4.8</span>
        </div>
        <div class="star_bars">
            <div class="star_bar_row">
                <span>5 stars</span>
                <div class="outerbox">
                    <div class="innerbox"></div>
                </div>
                <span>(6,984)</span>
            </div>
            <div class="star_bar_row">
                <span>4 stars</span>
                <div class="outerbox">
                    <div class="innerbox"></div>
                </div>
                <span>(984)</span>
            </div>
            <div class="star_bar_row">
                <span>3 stars</span>
                <div class="outerbox">
                    <div class="innerbox"></div>
                </div>
                <span>(84)</span>
            </div>
            <div class="star_bar_row">
                <span>2 stars</span>
                <div class="outerbox">
                    <div class="innerbox"></div>
                </div>
                <span>(4)</span>
            </div>
            <div class="star_bar_row">
                <span>1 stars</span>
                <div class="outerbox">
                    <div class="innerbox"></div>
                </div>
                <span>(1)</span>
            </div>
        </div>

        <div class="review_section">
            <div class="person_review">
                <img class="review_img" src="<?php echo URLROOT; ?>/img/mycart.png">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="months">|2 months ago</span>
            </div>
            <div class="person_review_text">
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </span>
            </div>
        </div>

        <div class="review_section">
            <div class="person_review">
                <img class="review_img" src="<?php echo URLROOT; ?>/img/mycart.png">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="months">|5 months ago</span>
            </div>
            <div class="person_review_text">
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </span>
            </div>
        </div>
        <div class="review_section">
            <div class="person_review">
                <img class="review_img" src="<?php echo URLROOT; ?>/img/mycart.png">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="months">|7 months ago</span>
            </div>
            <div class="person_review_text">
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </span>
            </div>
        </div>
        <div class="review_section">
            <div class="person_review">
                <img class="review_img" src="<?php echo URLROOT; ?>/img/mycart.png">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="months">|10 months ago</span>
            </div>
            <div class="person_review_text">
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </span>
            </div>
        </div>

        <!-- popup starts here -->
        <div class="blur_bg" id="blur_bg"></div>
        <div class="add-form" id="add-form">
            <span>
                <label>Confirm booking </label>
                <label class="close">x</label>
            </span>
            <span class="description">Before booking please contact service provider and share your project details. (Eg- Requirements, timeline, budget etc..</span>

            <form action="<?php echo URLROOT; ?>/engbookings/engBookingPending" method="POST" class="add" id="add">
                <span>
                    <input type="text" value="<?php echo $data['listing']->UserEmail ?>" name="engineerEmail" hidden >
                    <input type="text" value="<?php echo $data['UserEmail'] ?>" name="customerEmail" hidden>
                    <input type="number" value="<?php echo $data['listing']->PostId ?>" name="postId" hidden>
                    <input type="submit" value="Confirm Booking" class="add-btn submit-form">
                    <input type="hidden" value="customer" name="role" class="role">
                </span>
            </form>
        </div>
    </div>
    <div class="review_section">
        <div class="person_review">
            <img class="review_img" src="<?php echo URLROOT; ?>/img/mycart.png">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <span class="months">|7 months ago</span>
        </div>
        <div class="person_review_text">
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </span>
        </div>
    </div>
    <div class="review_section">
        <div class="person_review">
            <img class="review_img" src="<?php echo URLROOT; ?>/img/mycart.png">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <span class="months">|10 months ago</span>
        </div>
        <div class="person_review_text">
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </span>
        </div>
    </div>

    <!-- popup starts here -->
    <div class="blur_bg" id="blur_bg"></div>
    <div class="add-form" id="add-form">
        <span>
            <label>Confirm booking </label>
            <label class="close">x</label>
        </span>
        <span class="description">Before booking please contact service provider and share your project details. (Eg- Requirements, timeline, budget etc..</span>

        <form action="" method="POST" class="add" id="add">
            <span>
                <input type="submit" value="Confirm Booking" class="add-btn submit-form">
                <input type="hidden" value="customer" name="role" class="role">
            </span>
        </form>
    </div>
</div>
    <!-- popup ends here  -->
    <script src="<?php echo URLROOT; ?>/js/popup.js"></script>