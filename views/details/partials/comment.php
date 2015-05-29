<?php
    
?>
<div>
    <h4><a href="index.php?type=users&id=<?php echo $comment['idusers']; ?>"><?php echo getUsernameById($this->link, $comment['idusers']); ?></a></h4>
    <p><?php echo $comment['comment']; ?></p>
</div>