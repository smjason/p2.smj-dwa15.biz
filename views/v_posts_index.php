<h1><?=$user->first_name?>, Here are the posts of the users that you are following.</h1>

<?php foreach($posts as $post): ?>

<article>

    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <p><time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time></p>

</article>

<?php endforeach; ?>