<?php foreach($users as $user): ?>
    <br>
    <?=$user['first_name']?> <?=$user['last_name']?>

    <?php if(isset($connections[$user['user_id']])): ?>
    <br>
        <FORM METHOD="POST" ACTION='/posts/unfollow/<?=$user['user_id']?>'>
        <INPUT TYPE="submit" VALUE="Unfollow">
        </FORM>
    <?php else: ?>
    <br>
        <FORM METHOD="POST" ACTION='/posts/follow/<?=$user['user_id']?>'>
       	<INPUT TYPE="submit" VALUE="Follow">
       	</FORM>
    <?php endif; ?>

    <br>

<?php endforeach; ?>