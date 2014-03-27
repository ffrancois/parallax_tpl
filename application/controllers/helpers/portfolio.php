<?php

 class Zend_Controller_Action_Helper_Portfolio extends Zend_Controller_Action_Helper_Abstract{
 	function __invoke(){
 		$html = '
			<article id=anchor3 class="content dark">
				<header class="title one">Our Portfolio</header>
				<div class="spacer"></div>
				<div class="title two">We have been privileged to work and grow with a diverse range of clients. We have worked with brands in Canada, USA, UK, and many others.</div>
				<div id="portfolio" class="container">
					<div class="section portfoliocontent">
						<div class="clear"></div>
						<div id="project-show"></div>
						<section class="project-window">
							<div class="project-content"></div><!-- AJAX Dinamic Content -->
						</section>
						<section id="i-portfolio" class="clear">
							<div class="inici"></div>
 				
							<div class="ch-grid element graphic music" id="portfolio-1.html">
								<img class="ch-item" src="img/portfolio/thumb-01.jpg" alt="img">
								<div>
									<span>
										<span class="p-category"></span>
											Kallo
										<span class="cat2">Graphic Design</span>
									</span>
								</div>
							</div>
			
							<div class="ch-grid element graphic vector" id="portfolio-2.html">
								<img class="ch-item" src="img/portfolio/thumb-02.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>The Inside<span class="cat2">Photography</span></span>
								</div>
							</div>
							
							<div class="ch-grid element illustration" id="portfolio-1b.html">
								<img class="ch-item" src="img/portfolio/thumb-03.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>Leitberg<span class="cat2">Graphic Design</span></span>
								</div>
							</div>
				
							<div class="ch-grid element illustration" id="portfolio-3.html">
								<img class="ch-item" src="img/portfolio/thumb-04.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>Fashion Brand<span class="cat2">Graphic Design</span></span>
								</div>
							</div>
				
							<div class="ch-grid element graphic vector" id="portfolio-1c.html">
								<img class="ch-item" src="img/portfolio/thumb-05.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>The Chop Shop<span class="cat2">Website</span></span>
								</div>
							</div>
							
							<div class="ch-grid element graphic vector illustration" id="portfolio-1d.html">
								<img class="ch-item" src="img/portfolio/thumb-06.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>Prego<span class="cat2">Website</span></span>
								</div>
							</div>
				
							<div class="ch-grid element music" id="portfolio-4.html">
								<img class="ch-item" src="img/portfolio/thumb-07.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>Behurs<span class="cat2">Graphic Design</span></span>
								</div>
							</div>
				 				
							<div class="ch-grid element graphic vector music" id="portfolio-1e.html">
								<img class="ch-item" src="img/portfolio/thumb-08.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>The New Girl<span class="cat2">Photography</span></span>
								</div>
							</div>
							
							<div class="ch-grid element illustration music" id="portfolio-4b.html">
								<img class="ch-item" src="img/portfolio/thumb-09.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>Shut Up & Shoot<span class="cat2">Graphic Design</span></span>
								</div>
							</div>
							
							<div class="ch-grid element music" id="portfolio-3b.html">
								<img class="ch-item" src="img/portfolio/thumb-10.jpg" alt="img">
								<div>
									<span><span class="p-category"></span>Kulisha 79000<span class="cat2">Graphic Design</span></span>
								</div>
							</div>
 				
							<div class="final"></div>
						</section>
					</div>
				</div>
				<div class="clear"></div>
			</article>';
		return $html;
	}
	

}

?>