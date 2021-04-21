
<div class="projectPhotos view">
	<h2><?php echo ___('project photo'); ?></h2>
	
	<div class="panel panel-default">
		<div class="panel-heading">
		<?php
		echo $this->Navbars->actionButtons(['buttons_group' => 'view', 'model_id' => $projectPhoto->id]);
		?>
		</div>
		<div class="panel-body">
			<dl class="dl-horizontal">
			
				<dt><?= ___('work_list_id'); ?></dt>
				<dd>
					<?php 
					echo h($projectPhoto->work_list_id);
					?>
				</dd>
				
				<dt><?= ___('pics'); ?></dt>
				<dd>
					<?php 
					echo h($projectPhoto->pics);
					?>
				</dd>
				
				<dt><?= ___('name'); ?></dt>
				<dd>
					<?php 
					echo h($projectPhoto->name);
					?>
				</dd>
				
				<dt><?= ___('img_code'); ?></dt>
				<dd>
					<?php 
					echo h($projectPhoto->img_code);
					?>
				</dd>
				
				<dt><?= ___('font_icon'); ?></dt>
				<dd>
					<?php 
					echo h($projectPhoto->font_icon);
					?>
				</dd>
				
			</dl>
			<?php 
			echo $this->element('Alaxos.create_update_infos', ['entity' => $projectPhoto], ['plugin' => 'Alaxos']);
			?>
			<div>
			</div>
		</div>
	</div>
</div>
	
