<?php if(count($s_msg) > 0): ?>
	<div class="s-mgs">
		<?php foreach ($s_msg as $msg): ?>
			<p><?php echo $msg; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>
<style type="text/css">
	.s-mgs{
		width: 92%;
		margin: 0px auto;
		padding: 0px 10px;
		border: 1px solid #a94442;
		color: #a94442;
		background: #28a745;
		border-radius: 5px;
		text-align: left;
	}
</style>