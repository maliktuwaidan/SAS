<?php $this->load->view('template/navigation'); ?><div class="container">	<div class="tabbable tabs-left">		<ul class="nav nav-tabs" id="myTab">			<?php 				$index = 0;				//loops for tab header				foreach($tab_content as $row){					//making condition :  if its was first tab then set it to active state					if(array_search($row,$tab_content) == 0){						echo '<li class="active"><a href="#'.str_replace(" ","",$row['0'].$index).'" data-toggle="tab">'.$row['0'].'</a></li>';					}else{						echo '<li><a href="#'.str_replace(" ","",$row['0'].$index).'" data-toggle="tab">'.$row['0'].'</a></li>';					}					$index++;				} 			?>		</ul>				<div id="myTabContent" class="tab-content">			<?php 				$index = 0;				foreach($tab_content as $row){					if(array_search($row,$tab_content) == 0){						echo '<div class="tab-pane fade in active" id="'.str_replace(" ","",$row['0'].$index).'">';					}else{						echo '<div class="tab-pane fade" id="'.str_replace(" ","",$row['0'].$index).'">';					}										switch ($row['1']) {						case 'table_view':							$this->load->view('breadcrumb/breadcrumb', array('trace' => $row['0']));							$this->load->view($row['3'], $row['2']);						break;											case 'accordion_view':							$this->load->view('breadcrumb/breadcrumb', array('trace' => $row['0']));							$this->load->view($row['3'], array('resource' => $row['2']));						break;												case 'form_view':							$this->load->view('breadcrumb/breadcrumb', array('trace' => $row['0']));							$this->load->view($row['2']);						break;						case 'tab_view':							$this->load->view('breadcrumb/breadcrumb', array('trace' => $row['0']));							$this->load->view($row['3'], array('resource' => $row['2']));						break;												default:							exit('The tab content is not set correctly.');					}										echo '</div>';					$index++;				} 			?>		</div>	</div>		<!-- Example row of columns -->    <hr>  <?php $this->load->view('template/footer_view'); ?></div> <!-- /container -->