<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="../../public/css/index.css">
    <?php include('./header.php'); ?>
    <main>   
        <div class="table">
            <div class="thead">
                <div class="name">Name</div>
                <div class="email">Email</div>
                <div class="phone">Phone Number</div>
                <div class="buttons"></div>
                <!-- <div class="row">
                </div> -->
            </div>
            <div class="tbody">
            <?php 
                $user_id = 1;
                $testObject = new IndexController();
                $results = $testObject->index($user_id);
                foreach ($results as $data) {
            ?>
                    <div class="row">
                        <div class="name">
                            <div class="profile circle">
                                <img src="../../public/img/toothless.png" alt="profile picture" class="circle">
                            </div>
                            <div class="full-name">
                                <span>
                                    <?php echo $data['first_name'] . ' ' . $data['last_name'] ?>
                                </span> 
                            </div>
                        </div>
                        <div class="email">
                            <?php echo $data['email'] ?>
                        </div>
                        <div class="phone">
                            <?php echo $data['phone'] ?>
                        </div>
                        <div class="buttons">
                            <button class="button">
                                <?php if ($data['favourite'] == 1) { ?>
                                    <img src="../../public/img/star-active.png" alt="">
                                <?php } else { ?>
                                        <img src="../../public/img/star.png" alt="">
                                <?php } ?>
                            </button>
                            <button class="button">
                                <img src="../../public/img/pencil.png" alt="">
                            </button>
                            <button class="button">
                                <img src="../../public/img/dustbin.png" alt="">
                            </button>
                        </div>   
                    </div>
            </div>
            <?php
                }                
            ?> 
        </div>
        
    </main>
</body>
</html>