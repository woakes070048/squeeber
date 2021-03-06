@extends('guest.layouts.advanced_header')
@section('content')
<div class="wrapper indent">
			
		
<!-- content -->
			<section id="login_content" style="width:96%;margin-left:2%;" >
				
				
				
						<div class="box maxheight">
							<div class="border-right maxheight">
								<div class="border-bot maxheight">
									<div class="border-left maxheight">
										<div class="left-top-corner maxheight">
											<div class="right-top-corner maxheight">
												
												<h2 style="text-transform:capitalize;"><span>Help Center</span>	
												</h2>
												
												<div class="inner">
														
													
													<div class="post">
													
														
														@if(Session::has('global'))
															<p align="center" class="post_global">{{Session::get('global')}} </p>
														@endif 
																												
														
														 	<p><strong>Squeeber is simply your next generation college noticeboard.</strong></p>

															<h3><strong>Guidelines for Posting a Squeeb</strong></h3>
															<p>
														
																Once you have navigated and selected your college/campus and are on the campus home page,  click on the post button on the top left corner of your browsing device.
																This will take you to the page www.squeeber.com/post.
																
																<div class="campusesfeaturephonescreen" style="margin-bottom:20px;">
																	<ul>
																		<li>
																		Once on this page you will be allowed to select the squeeb type which could be: an event, a notice, a sales offer or jobs and internship information.
																		</li>
																		<li>
																		Add a short title describing your squeeb.
																		</li>
																		<li>
																		Select a squeeb photo to help give more information about your squeeb
																		</li>
																		<li>
																			Add a detailed description of your squeeb in the description section.
																		</li>
																		<li>
																		Provide your personal information, names and email if you are not logged in and then click the post squeeb button.
																		</li>
																		<li>
																		Activate your squeeb and it appears in the squeeb board aof the particular college immediately.
																		</li>
																	</ul>
																</div>
															</p>
															
															<h3><strong>Guidelines for Adding Your College/Campus</strong></h3>
															<p>
														
																For you to perform this particular operation you have to be registered with squeeber. Create a free account and login to squeeber.
																
																<div class="campusesfeaturephonescreen" style="margin-bottom:20px;">
																	<ul>
																		<li>
																		Once you log in click on the college link, that will take you to the page where you can add your college.
																		</li>
																		<li>
																		Select the country where this college is situated and add the college name and alias.
																		</li>
																		<li>
																		At the bottom of this page is a link to add a campus belonging to a particular college
																		</li>
																		<li>
																			Once you have submitted the college details you will be taken to another page where you will be allowed to specify the main campus details of the particular college
																		</li>
																		
																	</ul>
																</div>
															</p>
															<h3><strong>Changing your college</strong></h3>
															<p>Once you are at any particular page you will find a link 'Trending at College_Name Change' Click on this link and select your particular college from the colleges listed in that country</p>
															<h3><strong>Changing your Country</strong></h3>
															<p>In order to view information about colleges found in other countries Go to the Select page section as described by the section above. At the top of this page you will find a link:'You are at Country Change' Click on this link and select your country from the list of countries displayed.</p>
															<p><strong>For more help or information contact us at: info@squeeber.com</strong></p>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			</section>
			
			
			
			
			
		</div>
@stop