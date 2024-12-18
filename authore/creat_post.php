<?php 
include '../signup/header_author.php';
require_once 'add_view.php';

?>


<form class="form-post" action="add.inc.php" method="POST" >

<input type="text" name="title" placeholder="title">
<input type="text" name="content" placeholder="txt">
<button  class="vv" type="submit">Post</button>

</form>