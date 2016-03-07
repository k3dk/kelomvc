<p>Lista na postovi</p>

<?php

    foreach($posts as $post) { ?>
    <p>
        <?php echo $post->author; ?>
        <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>
            Check here
        </a>
    </p>

    <?php }?>