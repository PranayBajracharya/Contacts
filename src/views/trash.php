<!DOCTYPE html>
<?php include('./header.php'); ?>
<link rel="stylesheet" href="../../public/css/trash.css">
    <main>
        <div class="table">
            <div class="thead">
                <div class="name">Name</div>
                <div class="deleted">Delete on</div>
                <div class="recover"></div>
            </div>
            <div class="tbody">   
            <?php 
                $user_id = 1;
                $testObject = new IndexController();
                $results = $testObject->deleted($user_id);
                foreach ($results as $data) {
            ?>             
                <div class="row">
                    <div class="name">
                        <div class="profile circle contacts">
                            <img src="../../public/img/toothless.png" alt="profile picture" class="circle">
                        </div>
                        <div class="full-name">
                            <span>
                                <?php echo $data['first_name'] . ' ' . $data['last_name'] ?>
                            </span> 
                        </div>
                    </div>
                    <div class="deleted">
                        <?php echo $data['deleted_at'] ?>
                    </div>
                    <div class="recover">
                        <form action="">
                            <button>Recover</button>
                        </form>
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