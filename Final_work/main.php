        <div id="main_img_bar">
            <img src="./img/main_img.png">
        </div>



        <div id="main_content">
            <div id="latest">
                <h4>일일 박스오피스 <?php echo date("Ymd")-1 ?></h4>
                <ul>
                    <?php   include 'ViewAdapter.php'; 
                            Viewadater("daily") ; ?> 

                </ul>
            </div>
            <div id="point_rank">
                <h4>지난주 박스오피스</h4>
                <ul>

                </ul>
            </div>
        </div>