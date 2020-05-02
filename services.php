<?php include('includes/header.php');?>



<?php include('includes/navbar.php');?>

<!-- SERVICES -->
		<div id="services" class="main-section not-home ">	
		<div class="services gray-light-bg">			
		<div class="container">					
		<div class="title page-title text-center">
		<h1 class="dark-text">Services</h1>
		<span class="underline green"></span>
		</div></div>	
				<!-- SERVICES LIST -->
		<div class="container pad-bot">
		<div class="content green">					
		<div class="service">
							<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-top custom-animation-slide-top">
								<div class="service-icon colored-background"><i class="icon-pencil"></i></div>								
								<h5 class="uppercase">Concept</h5>
								<p>The interior design concept is the starting point of every interior design project.  It consists of visual presentation of style, color and mood of the prospective space.In a simpler way it is the thread which binds all the beads of design elements ( furniture, color, upholstery and all other materials).<br>
To understand the conceptual way of thinking, which is about ideas and how they are formulated, requires new thinking and willingness to empty the old cupboard of preconceptions and prejudices. The major themes are the seven concepts of planning, circulation, 3D, construction, materials, colour and lighting, which covers the entire spectrum of a designer’s activity. Each of these concepts will ultimately drive the grand concept of the interior.
</p>								
								<div class="service-description"></div>
							</div>	
							<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-right custom-animation-slide-right">
								<div class="service-icon colored-background"><i class="icon-picture"></i></div>
								<h5 class="uppercase">Design</h5>
								<p>During the design phase we take the requirements and limitations of the initial phases, the program/analysis phase and/or the record drawing phase, and produce a conceptual design. Depending on the options that the client would like to consider, several conceptual designs can be produced.
<br>
After the concept design phase, permit drawings are created. Depending on the clients approach to contractors, construction drawings can be created. To create construction drawings, a finished interior design is required. Basically we can thus divide the design phase into the following categories:
<br>
1.ConceptualDesign<br>
2. Design Development<br>
3. Permit Documents<br>
4. Construction Drawings<br>
5. Interior Design
</p>								
								<div class="service-description"></div>
							</div>														
						</div>									
						<div class="service">
							<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-left custom-animation-slide-left">
								<div class="service-icon colored-background"><i class="icon-cogs"></i></div>
								<h5 class="uppercase">Construction</h5>
								<p>With our qualified team of architects and our many years of group experience and resources in other professions, we can offer our clients the highest standard of site management to suit their requirements.This phase is about the details and the requirements for construction of the Project. The Construction Documents shall include Drawings and Specifications that establish in detail the quality levels of materials and systems required for the Project.<br>
The scope of work which includes, but is not limited to preparing working drawings and specifications in compliance with universal accessibility guidelines and all applicable codes for:<br>
•	non-load bearing interior construction<br>
•	space planning<br>
•	reflected ceiling plans<br>
•	lighting<br>
•	interior detailing<br>
•	materials and finishes<br>
•	furnishings, fixtures and equipment
<br>Since public health, safety and welfare (HSW) are our first priorities, the Designer may collaborate with other licensed practitioners in the technical areas of mechanical, electrical, and load-bearing design as required for regulatory approval.
</p>								
								<div class="service-description"></div>
							</div>		
							<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-bottom custom-animation-slide-bottom">
								<div class="service-icon colored-background"><i class="icon-building"></i></div>
								<h5 class="uppercase">Installation</h5>
								<p>This is our final step, and certainly the most exciting! While you were waiting for the big day, we were planning, ordering and confirming, measuring, sewing, building, and finishing the various pieces designed just for you. We conclude our projects with a "white glove" installation of all furnishings, dressing each room, ensuring a seamless handover to our clients.<br><br>
Everything you are expecting, will be delivered and setup on the same day, after the completion of any preliminary site work – maybe new flooring, fresh paint, new window treatment, etc.<br>
 The designer will arrive with our delivery crew to lay the rugs, place the furniture, hang the artwork, style the bookcases, set up the lamps – even to screwing in the light bulbs – and attend to all the finishing touches.<br>
With your Final Presentation in hand you will be equipped to verify that every item delivered is exactly as ordered – no surprises!
We have witnessed many faces gradually change from a somewhat anxious concern, to a smile, to a big grin. As your room comes together, you'll see that our diligence up until this step has really paid off – your room looks and feels even better than you had imagined.
</p>								
								<div class="service-description"></div>
							</div>													
						</div>																		
					</div>
				</div>						
				<!-- PROJECT LIST -->
				<div class="project-list">
					<div class="project_top bot_angle_right" style="border-right-width: 1366px;"></div>	
					<div class="white">					
						<div class="title page-title text-center colored-text">
							<h1 class="light-text">Project List</h1>
							<span class="underline white"></span>
						</div>									
					</div>
					<div class="caroufred green pad-bot animated-fade custom-animation-fade">
						<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1365px; height: 147px; margin: 0px 0px 18px; overflow: hidden;">
                        <ul class="project-list-gallery" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 6825px; height: 154px; max-height: 147px;">               					
							
<?php 
$project=mysqli_query($connection,"select project_id, project_name, project_pic, project_details from projects")or die ("query 1 incorrect.....");

while(list($project_id,$project_name,$project_pic,$project_details)=mysqli_fetch_array($project))
{
echo"<li class='project-list-item' style='width: 273px;'>
	<a href='#' class='project-popover' data-content='$project_details' data-original-title='$project_name'><img src='images/projects/$project_pic' alt='img' style='width:100%;'></a>
	</li>";
}
?></ul></div>
						<div id="caroufred_project_list_gallery" class="carousel_pagination left" style="display: table;"><a href="#" class="selected"><span>1</span></a><a href="#"><span>2</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>5</span></a><a href="#"><span>6</span></a><a href="#"><span>7</span></a><a href="#"><span>8</span></a><a href="#"><span>9</span></a><a href="#"><span>10</span></a></div>		
					</div>
					<div class="project_bottom top_angle_right" style="border-left-width: 1366px;"></div>
				</div>	
				<!-- PROCESS -->
				<div class="process gray-light-bg pad-bot">					
					<div class="title page-title text-center">
						<h1 class="dark-text">Process</h1>
						<span class="underline green"></span>
					</div>				
					<div class="container green process-description">
						<ul class="nav-tabs col-lg-5 col-md-6 col-sm-5 col-xs-12 uppercase animated-scale-up custom-animation-scale-up" id="process-tabs">
							<li class="active"><i class="icon-circle"></i> <a href="#management">Project Management</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#plan">Interior Design Property Plan</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#materials">Materials Presentation</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#ffespecifications">Furniture and Equipment Specifications</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#purchasing">Purchasing</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#installation">Installation</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#documents">Construction Drawings and Documents</a> <i class="icon-circle"></i></li>
						</ul>
						<div class="tab-content col-lg-7 col-md-6 col-sm-7 col-xs-12 animated-scale-up custom-animation-scale-up">
							<div class="tab-pane active" id="management">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<ul>
									<li><i class="icon-magic"></i> Lorem Ipsum</li>
									<li><i class="icon-paper-clip"></i> Ullamco Laboris</li>
									<li><i class="icon-legal"></i> Nostrud Exercitation</li>
									<li><i class="icon-pencil"></i> Dolore Magna</li>
								</ul>
							</div>
							<div class="tab-pane" id="plan">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <span class="colored-text">tempor incididunt</span> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse <span class="colored-text">cillum dolore</span> eu fugiat nulla pariatur.</p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							</div>
							<div class="tab-pane" id="materials"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<ul>
									<li><i class=" icon-magic"></i> Lorem Ipsum</li>
									<li><i class="icon-paper-clip"></i> Ullamco Laboris</li>
									<li><i class="icon-legal"></i> Nostrud Exercitation</li>
									<li><i class="icon-pencil"></i> Dolore Magna</li>
								</ul>
							</div>						
							<div class="tab-pane" id="ffespecifications">
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <span class="colored-text">tempor incididunt</span> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse <span class="colored-text">cillum dolore</span> eu fugiat nulla pariatur.</p>
							</div>
							<div class="tab-pane" id="purchasing">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<ul>
									<li><i class=" icon-magic"></i> Lorem Ipsum</li>
									<li><i class="icon-paper-clip"></i> Ullamco Laboris</li>
									<li><i class="icon-legal"></i> Nostrud Exercitation</li>
									<li><i class="icon-pencil"></i> Dolore Magna</li>
								</ul>
							</div>
							<div class="tab-pane" id="installation">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <span class="colored-text">tempor incididunt</span> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse <span class="colored-text">cillum dolore</span> eu fugiat nulla pariatur.</p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							</div>
							<div class="tab-pane" id="documents">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<ul>
									<li><i class=" icon-magic"></i> Lorem Ipsum</li>
									<li><i class="icon-paper-clip"></i> Ullamco Laboris</li>
									<li><i class="icon-legal"></i> Nostrud Exercitation</li>
									<li><i class="icon-pencil"></i> Dolore Magna</li>
								</ul>
							</div>
						</div>
					</div>
				</div>							
			</div>
		</div>
		<!-- END OF services -->		
			
<?php include('includes/footer.php');?>
