<script src="js/comments.js"></script>
<div id="commentsDiv">
    <input hidden value="<?php echo $this->type; ?>" id="type" />
    <input hidden value="<?php echo $_GET['id']; ?>" id="id" />
    <h2>Coments</h2>
    <div id="innerCommentsDiv">
        <div>
            <?php $this->getComments(); ?>
        </div>
    </div>
    <?php 
        if (isset($_SESSION['userData'])) {
            include 'views/details/partials/newComment.php';
        }
    ?>
</div>