<?php

 class Zend_Controller_Action_Helper_About extends Zend_Controller_Action_Helper_Abstract{
 	function __invoke(){
 		$about=new Application_Model_DbTable_About();
 		$data_about=$about->fetchAll();
 		$html = '
			<article id="anchor2" class="content menu-top dark">
					<article class="content light">
						<div class="full">
							<section class="half car-show-1">
								<header class="title-one">'.$data_about[0]['accroche_image'].'</header>
								<div class="title-two">'.$data_about[0]['titre_image'].'</div>
								<div class="show hideme dontHide">
									<div class="caroussel">
										<div class="caroussel-list">
											<div class="car-img"><img src="img/about/about.png" alt="img"></div>
										</div>
									</div>
								</div>
							</section>
							<section class="half">
								<header class="title-one">'.$data_about[0]['accroche_about'].'</header>
								<div class="title-two">'.$data_about[0]['titre_about'].'</div>
								<div class="half-content hideme dontHide">
									'.$data_about[0]['description_about'].'
								</div>
							</section>
						</div>
						<div class="clear"></div>
					</article>
				</article>
				<div class="clear"></div>';
		return $html;
	}
	

}

?>