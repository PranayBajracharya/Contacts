<?php 
    include('../includes/class-autoloader.inc.php');
?> 

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="../../public/css/index.css">
    <?php include('./header.php'); ?>
    <main>
        <?php 
            $testObject2 = new IndexController();
            $results = $testObject2->index();
            foreach ($results as $data) {
                echo $data['id'] . ' ' . $data['first_name'] . ' ' . $data['last_name'] . ' ' . $data['nick_name'] . ' ' . $data['email'] . '<br>';
            }
        ?> 
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
                <div class="row">
                    <div class="name">
                        <div class="profile circle">
                            <img src="../../public/img/toothless.png" alt="profile picture" class="circle">
                        </div>
                        <div class="full-name">
                            <span>Pranay Bajracharya</span> 
                        </div>
                    </div>
                    <div class="email"></div>
                    <div class="phone">9861964711</div>
                    <div class="buttons">
                        <button class="button">
                            <img src="../../public/img/star.png" alt="">
                        </button>
                        <button class="button">
                            <img src="../../public/img/pencil.png" alt="">
                        </button>
                        <button class="button">
                            <img src="../../public/img/dustbin.png" alt="">
                        </button>
                    </div>   
                </div>            
                <div class="row">
                    <div class="name">
                        <div class="profile circle">
                            <!-- <img src="../../public/img/toothless.png" alt="profile picture" class="circle"> -->
                            <span class="circle">PB</span>
                        </div>
                        <div class="full-name">
                            <span>Pranay Bajracharya</span> 
                        </div>                    </div>
                    <div class="email">law.asdasdasdpran99@gmail.com</div>
                    <div class="phone">9812312323</div>
                    <div class="buttons">
                        <button class="button">
                            <img src="../../public/img/star.png" alt="">
                        </button>
                        <button class="button">
                            <img src="../../public/img/pencil.png" alt="">
                        </button>
                        <button class="button">
                            <img src="../../public/img/dustbin.png" alt="">
                        </button>
                    </div>   
                </div>               
                <div class="row">
                    <div class="name">
                        <div class="profile circle">
                            <img src="../../public/img/toothless.png" alt="profile picture" class="circle">
                        </div>
                        <div class="full-name">
                            <span>Pranay Bajracharya</span> 
                        </div>                    </div>
                    <div class="email">law.pran99@gmail.com</div>
                    <div class="phone"></div>
                    <div class="buttons">
                        <button class="button">
                            <img src="../../public/img/star.png" alt="">
                        </button>
                        <button class="button">
                            <img src="../../public/img/pencil.png" alt="">
                        </button>
                        <button class="button">
                            <img src="../../public/img/dustbin.png" alt="">
                        </button>
                    </div>   
                </div>               
                <div class="row">
                    <div class="name">
                        <div class="profile circle">
                            <img src="../../public/img/toothless.png" alt="profile picture" class="circle">
                        </div>
                        <div class="full-name">
                            <span>Pranay Bajracharya</span> 
                        </div>                    </div>
                    <div class="email">law.pran99@gmail.com</div>
                    <div class="phone">123123123</div>
                    <div class="buttons">
                        <button class="button">
                            <img src="../../public/img/star.png" alt="">
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
        </div>
    </main>
</body>
</html>