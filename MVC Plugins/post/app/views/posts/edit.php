<h1>Edit Post</h1>
<?php echo $message; ?>
<form action="<?php echo mvc_public_url(array('controller' => 'posts', 'action' => 'edit','id'=>$post->ID)); ?>" method="post">
	<lable>Title</lable><input type="text" name="ed_title" value="<?php echo $post->post_title ?>" /><br>
	<lable>Content</lable><textarea name="ed_content"><?php echo $post->post_content ?></textarea><br>
	<input type="submit" value="Submit" />
</form>
<?php echo $this->html->link('All Posts',array('controller' => 'posts', 'action' =>'index'));?>
<?php/*
echo $this->Form->create('Post', array('action' => 'edit'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
*/?>