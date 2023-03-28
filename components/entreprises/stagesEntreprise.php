<?php $a = 0; ?>
    <?php 
        include('../class/stages.php');
        $stages = new Stage($conn);        
        $stages_list = $stages->getForEnterprise($id);
        ?>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                    foreach($stages_list as $stage) {
                        $title = $stage['title_internship'];
                        $description = $stage['description_internship'];
                        $entreprise = $stage['name_company'];
                        $id = $stage['id_internship'];
                        $image = "../assets/img/ricard.png";
                        if($id){
                            $stage = new Stage($conn);
                            $skill = $stages->getSkills($id);
                        } else {
                            $skill = [];
                        }
                        ?>
                        <div class="swiper-slide">
                        <?php
                        include('../components/general/itemList.php');
                        ?>
                        </div>
                        <?php
                    }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <script>
            var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            });
        </script>