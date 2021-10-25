<div id="blog" class="py-4">

    <div class="container">

        <div class="row">

        <?php

        foreach($blog as $data) {
            require("blog_card.php");
        }

        ?>

        </div>

    </div>
    
</div>  