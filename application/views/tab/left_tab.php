	<div class="tabbable tabs-left">
		<ul class="nav nav-tabs" id="myNextTab">
			<?php 
				$index = 0;
				//loops for tab header
				foreach($resource as $row){
					//making condition :  if its was first tab then set it to active state
					if(array_search($row,$resource) == 0){
						echo '<li class="active"><a href="#'.str_replace(" ","",$row['0'].$index.$index).'" data-toggle="tab">'.$row['0'].'</a></li>';
					}else{
						echo '<li><a href="#'.str_replace(" ","",$row['0'].$index.$index).'" data-toggle="tab">'.$row['0'].'</a></li>';
					}
					$index++;
				} 
			?>
		</ul>
		
		<div id="myNextTabContent" class="tab-content">
			<?php 
				$index = 0;
				foreach($resource as $row){
					if(array_search($row,$resource) == 0){
						echo '<div class="tab-pane fade in active" id="'.str_replace(" ","",$row['0'].$index.$index).'">';
					}else{
						echo '<div class="tab-pane fade" id="'.str_replace(" ","",$row['0'].$index.$index).'">';
					}
					
					switch ($row['1']) {
						case 'table_view':
							$this->load->view('table/table_view', $row['2']);
						break;
					
						case 'accordion_view':
							$this->load->view('accordion/accordion_view', array('resource' => $row['2']));
						break;
						
						case 'form_view':
							$this->load->view('form/'.$row['2']);
						break;

						case 'tab_view':
							$this->load->view('accordion/accordion_view', array('resource' => $row['2']));
						break;
						
						default:
							exit('The tab content is not set correctly.');
					}
					
					echo '</div>';
					$index++;
				} 
			?>
		</div>
	</div>	