<?php
$files = scandir("assets/images/banner/");
$files = array_diff($files, array('.', '..'))
?>
<div class="banner">
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <?php
            $id = 0;
            foreach ($files as $file) {
                if (basename($file) != "images") {
                    ?>
                    <div class="carousel-item <?php if ($id == 0) echo "active"; ?>">
                        <!--                    --><?php //if ($file . "banner") return; ?>
                        <img class="image d-block w-100" src="assets/images/banner/<?php echo $file ?>" alt="banner"/>
                        <h1 style=" text-align: center; position: absolute; top: 42.5%; left: 50%; transform: translate(-50%)">
                            <?php
                            $fp = @fopen("assets/images/banner/images/" . basename($file, ".png") . ".txt", "r");
                            if ($fp) {
                                while (($buffer = fgets($fp, 4096)) !== false) {
                                    echo $buffer;
                                }
                                if (!feof($fp)) {
                                    echo "Error: unexpected fgets() fail\n";
                                }
                                fclose($fp);
                            }
                            ?>
                        </h1>
                    </div>
                    <?php
                    $id++;
                }
            } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>