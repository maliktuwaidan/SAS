<div class="accordion offset1" id="accordion2">	<?php 		//count the number of accordion viewed		$limit = 5;		if(count($resource) > $limit)			{ $limit = $limit;}		else			{ $limit = count($resource); }		for($index=0; $index <= $limit-1; $index++){		$row = $resource[$index];		?>		<div class="accordion-group">			<div class="accordion-heading">				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo str_replace(" ","",$row['0']).'-accordion-'.$index; ?>">				<?php 					echo $row['0'];					$label = explode(",",$row['4']);					foreach($label as $row_label){						echo '<span class="label label-info pull-right center">'.$row_label.'</span>';					}				?>				</a>			</div>			<div id="<?php echo str_replace(" ","",$row['0']).'-accordion-'.$index; ?>" class="accordion-body collapse offset1">				<div class="accordion-inner">				<?php 					echo $row['1'].'<hr>'; 					echo '<p><small class="pull-right"> '.$row['3'].'</small></p><br>';					echo '<p><small class="pull-right"> <b>'.$row['2'].'</b></small></p>';				?>				</div>			</div>		</div>		<?php		}	?></div>	