
<form method= <?php echo ("'".$this->method."'"); ?> action=<?php echo ("'".$this->action."'"); ?> >
<?php
echo $this->label;
echo $this->fields;
echo $this->errors;
     ?>
</form>