<?php


?>

<div class="container">
	<div class="title">
		<h1>Slider+</h1>
	</div>

		<div id="slide1" class="slide">
		<h3 class="slide-title"><?php echo get_option( 'slider_plus_title_one' ); ?></h3>
			<div class="flex-container">
				<div class="slider-plus-image editable">
					<?php
						if ( empty( get_option( 'slider_plus_image_one' ))) { ?>
							<form method="post">
								<label for="image1">Image:</label><br>
								<input class="image_url" type="text" name="image1">
								<input class="upload_button" type="button" class="button" value="Upload Image"><br>		  
								<input type="submit" value="Submit">
							</form>
								<?php
									if ( !empty( $_POST['image1'] )) {
									  $sliderPlusImageOne = $_POST['image1'];
									  
									  add_option( 'slider_plus_image_one', $sliderPlusImageOne, '', 'yes' );
									  header("Refresh:0");
									}

									function delete() {
										delete_option( 'slider_plus_image_one');
										header("Refresh:0");
									}
								
						} else { ?>
					<img src="<?php echo get_option( 'slider_plus_image_one' ); ?>">
					<div class="edit-container">
						<span class="edit-button"></span>
						<span class="delete-button"></span>
						<div class="edit-container-slide">
							<div class="edit-content">
								<form method="post">
									<label for="editimage1">Image:</label>
									<input class="image_url" type="text" name="editimage1>
									<input class="upload_button button" type="button" value="Upload Image"><br>
									<input type="submit" value="update">
								</form>
								<?php
									if ( !empty( $_POST['editimage1'] )) {
										$editImage1 = $_POST['editimage1'];
							
										update_option( 'slider_plus_image_one', $editImage1);
										header("Refresh:0");
									}
								?>
							</div>
						</div>
					</div><!-- Edit Container -->
					<?php } ?>
				</div>
		
				<div class="slider-plus-info">
					<div class="slider-plus-title editable">
						<?php
							if ( empty( get_option( 'slider_plus_title_one' ))) { ?>
								<form method="post">
									<label for="title1">Title:</label><br>
									<input id="title_one" type="text" name="title1"><br>
									<input type="submit" value="submit">
								</form>
									<?php
									  	if ( !empty( $_POST['title1'] ) ) {
										  $sliderPlusTitleOne = stripslashes($_POST['title1']);
										  
										  add_option( 'slider_plus_title_one', $sliderPlusTitleOne, '', 'yes' );
										  header("Refresh:0");
										}
									?>
							<?php } else { ?>
								<h2><?php echo get_option( 'slider_plus_title_one' ); ?></h2>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="edittitle1">Title:</label>
												<input class="image_url" type="text" name="edittitle1" placeholder="<?php echo get_option( 'slider_plus_title_one' ); ?>"><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['edittitle1'] )) {
													$editTitle1 = stripslashes($_POST['edittitle1']);
										
													update_option( 'slider_plus_title_one', $editTitle1);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php }	?>
					</div>
					<div class="slider-plus-description editable">
						<?php
							if ( empty( get_option( 'slider_plus_description_one' ))) { ?>
								<form method="post">
									<label for="description1">Description</label><br>
									<textarea id="description_one" name="description1"></textarea><br>
									<input type="submit" value="submit">
								</form>
									<?php
									  	if ( !empty( $_POST['description1'] ) ) {
										  $sliderPlusDescriptionOne = stripslashes($_POST['description1']);
										  
										  add_option( 'slider_plus_description_one', $sliderPlusDescriptionOne, '', 'yes' );
										  header("Refresh:0"); 
										}
									?>
							<?php } else { ?>
								<p><?php echo get_option( 'slider_plus_description_one' ); ?></p>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="editdescription1">Descript:</label><br>
												<textarea name="editdescription1"><?php echo get_option( 'slider_plus_description_one' ); ?></textarea><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['editdescription1'] )) {
													$editDescription1 = stripslashes($_POST['editdescription1']);
										
													update_option( 'slider_plus_description_one', $editDescription1);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php } ?>
					</div><!-- Slider+ Description -->
					<div class="slider-plus-values editable">
						<?php
							if ( empty( get_option( 'slider_plus_values_one' ))) { ?>
								<form method="post">
									<label for="values1">Value</label><br>
									<textarea id="values_one" name="values1"></textarea><br>
									<input type="submit" value="submit">
								</form>
									<?php
										if ( !empty( $_POST['values1'] ) ) {
											  $sliderPlusValuesOne = stripslashes($_POST['values1']);
											  
											  add_option( 'slider_plus_values_one', $sliderPlusValuesOne, '', 'yes' );
											  header("Refresh:0"); 
										}
									?>
							<?php } else { ?>
								<em><?php echo get_option( 'slider_plus_values_one' ); ?></em>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="editvalues1">Values:</label><br>
												<textarea name="editvalues1"><?php echo get_option( 'slider_plus_values_one' );?></textarea><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['editvalues1'] )) {
													$editValues1 = stripslashes($_POST['editvalues1']);
										
													update_option( 'slider_plus_values_one', $editValues1);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php } ?>
					</div><!-- Slider+ Values -->
				</div><!-- Slider+ Info -->
			</div><!-- Flex Container -->
		</div><!-- Slide 1 -->	

		<!-- Slide 2 -->
		<div id="slide2" class="slide">
		<h3 class="slide-title"><?php echo get_option( 'slider_plus_title_two' ); ?></h3>
			<div class="flex-container">
				<div class="slider-plus-image editable">
					<?php
						if ( empty( get_option( 'slider_plus_image_two' ))) { ?>
							<form method="post">
								<label for="image2">Image:</label><br>
								<input class="image_url" type="text" name="image2">
								<input class="upload_button" type="button" class="button" value="Upload Image"><br>		  
								<input type="submit" value="Submit">
							</form>
								<?php
									if ( !empty( $_POST['image2'] )) {
									  $sliderPlusImageTwo = $_POST['image2'];
									  
									  add_option( 'slider_plus_image_two', $sliderPlusImageTwo, '', 'yes' );
									  header("Refresh:0");
									}
								
						} else { ?>
					<img src="<?php echo get_option( 'slider_plus_image_two' ); ?>">
					<div class="edit-container">
						<span class="edit-button"></span>
						<span class="delete-button"></span>
						<div class="edit-container-slide">
							<div class="edit-content">
								<form method="post">
									<label for="editimage2">Image:</label>
									<input class="image_url" type="text" name="editimage2">
									<input class="upload_button button" type="button" value="Upload Image"><br>
									<input type="submit" value="update">
								</form>
								<?php
									if ( !empty( $_POST['editimage2'] )) {
										$editImage2 = $_POST['editimage2'];
							
										update_option( 'slider_plus_image_two', $editImage2);
										header("Refresh:0");
									}
								?>
							</div>
						</div>
					</div><!-- Edit Container -->
					<?php } ?>
				</div>
		
				<div class="slider-plus-info">
					<div class="slider-plus-title editable">
						<?php
							if ( empty( get_option( 'slider_plus_title_two' ))) { ?>
								<form method="post">
									<label for="title2">Title</label><br>
									<input id="title_two" type="text" name="title2"><br>
									<input type="submit" value="submit">
								</form>
									<?php
									  	if ( !empty( $_POST['title2'] ) ) {
										  $sliderPlusTitleTwo = stripslashes($_POST['title2']);
										  
										  add_option( 'slider_plus_title_two', $sliderPlusTitleTwo, '', 'yes' );
										  header("Refresh:0");
										}
									?>
							<?php } else { ?>
								<h2><?php echo get_option( 'slider_plus_title_two' ); ?></h2>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="edittitle2">Title:</label>
												<input class="image_url" type="text" name="edittitle2" placeholder="<?php echo get_option( 'slider_plus_title_two '); ?>"><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['edittitle2'] )) {
													$editTitle2 = stripslashes($_POST['edittitle2']);
										
													update_option( 'slider_plus_title_two', $editTitle2);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php }	?>
					</div>
					<div class="slider-plus-description editable">
						<?php
							if ( empty( get_option( 'slider_plus_description_two' ))) { ?>
								<form method="post">
									<label for="description2">Description</label><br>
									<textarea id="description_two" name="description2"></textarea><br>
									<input type="submit" value="submit">
								</form>
									<?php
									  	if ( !empty( $_POST['description2'] ) ) {
										  $sliderPlusDescriptionTwo = stripslashes($_POST['description2']);
										  
										  add_option( 'slider_plus_description_two', $sliderPlusDescriptionTwo, '', 'yes' );
										  header("Refresh:0"); 
										}
									?>
							<?php } else { ?>
								<p><?php echo get_option( 'slider_plus_description_two' ); ?></p>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="editdescription2">Descript:</label><br>
												<textarea name="editdescription2"><?php echo get_option( 'slider_plus_description_two '); ?></textarea><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['editdescription2'] )) {
													$editDescription2 = stripslashes($_POST['editdescription2']);
										
													update_option( 'slider_plus_description_two', $editDescription2);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php } ?>
					</div><!-- Slider+ Description -->
					<div class="slider-plus-values editable">
						<?php
							if ( empty( get_option( 'slider_plus_values_two' ))) { ?>
								<form method="post">
									<label for="values2">Value</label><br>
									<textarea id="values_two" name="values2"></textarea><br>
									<input type="submit" value="submit">
								</form>
									<?php
										if ( !empty( $_POST['values2'] ) ) {
											  $sliderPlusValuesTwo = stripslashes($_POST['values2']);
											  
											  add_option( 'slider_plus_values_two', $sliderPlusValuesTwo, '', 'yes' );
											  header("Refresh:0"); 
										}
									?>
							<?php } else { ?>
								<em><?php echo get_option( 'slider_plus_values_two' ); ?></em>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="editvalues2">Values:</label><br>
												<textarea name="editvalues2"><?php echo get_option( 'slider_plus_values_two '); ?></textarea><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['editvalues2'] )) {
													$editValues2 = stripslashes($_POST['editvalues2']);
										
													update_option( 'slider_plus_values_two', $editValues2);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php } ?>
					</div><!-- Slider+ Values -->
				</div><!-- Slider+ Info -->
			</div><!-- Flex Container -->
		</div><!-- Slide 2 -->	

		<!-- Slide 3 -->
		<div id="slide3" class="slide">
		<h3 class="slide-title"><?php echo get_option( 'slider_plus_title_three' ); ?></h3>
			<div class="flex-container">
				<div class="slider-plus-image editable">
					<?php
						if ( empty( get_option( 'slider_plus_image_three' ))) { ?>
							<form method="post">
								<label for="image3">Image:</label><br>
								<input class="image_url" type="text" name="image3">
								<input class="upload_button" type="button" class="button" value="Upload Image"><br>		  
								<input type="submit" value="Submit">
							</form>
								<?php
									if ( !empty( $_POST['image3'] )) {
									  $sliderPlusImageThree = $_POST['image3'];
									  
									  add_option( 'slider_plus_image_three', $sliderPlusImageThree, '', 'yes' );
									  header("Refresh:0");
									}
								
						} else { ?>
					<img src="<?php echo get_option( 'slider_plus_image_three' ); ?>">
					<div class="edit-container">
						<span class="edit-button"></span>
						<span class="delete-button"></span>
						<div class="edit-container-slide">
							<div class="edit-content">
								<form method="post">
									<label for="editimage3">Image:</label>
									<input class="image_url" type="text" name="editimage3">
									<input class="upload_button button" type="button" value="Upload Image"><br>
									<input type="submit" value="update">
								</form>
								<?php
									if ( !empty( $_POST['editimage3'] )) {
										$editImage3 = $_POST['editimage3'];
							
										update_option( 'slider_plus_image_three', $editImage3);
										header("Refresh:0");
									}
								?>
							</div>
						</div>
					</div><!-- Edit Container -->
					<?php } ?>
				</div>
		
				<div class="slider-plus-info">
					<div class="slider-plus-title editable">
						<?php
							if ( empty( get_option( 'slider_plus_title_three' ))) { ?>
								<form method="post">
									<label for="title3">Title</label><br>
									<input id="title_three" type="text" name="title3"><br>
									<input type="submit" value="submit">
								</form>
									<?php
									  	if ( !empty( $_POST['title3'] ) ) {
										  $sliderPlusTitleThree = stripslashes($_POST['title3']);
										  
										  add_option( 'slider_plus_title_three', $sliderPlusTitleThree, '', 'yes' );
										  header("Refresh:0");
										}
									?>
							<?php } else { ?>
								<h2><?php echo get_option( 'slider_plus_title_three' ); ?></h2>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="edittitle3">Title:</label>
												<input class="image_url" type="text" name="edittitle3" placeholder="<?php echo get_option( 'slider_plus_title_three' ); ?>"><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['edittitle3'] )) {
													$editTitle3 = stripslashes($_POST['edittitle3']);
										
													update_option( 'slider_plus_title_three', $editTitle3);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php }	?>
					</div>
					<div class="slider-plus-description editable">
						<?php
							if ( empty( get_option( 'slider_plus_description_three' ))) { ?>
								<form method="post">
									<label for="description3">Description</label><br>
									<textarea id="description_three" name="description3"></textarea><br>
									<input type="submit" value="submit">
								</form>
									<?php
									  	if ( !empty( $_POST['description3'] ) ) {
										  $sliderPlusDescriptionThree = stripslashes($_POST['description3']);
										  
										  add_option( 'slider_plus_description_three', $sliderPlusDescriptionThree, '', 'yes' );
										  header("Refresh:0"); 
										}
									?>
							<?php } else { ?>
								<p><?php echo get_option( 'slider_plus_description_three' ); ?></p>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="editdescription3">Descript:</label><br>
												<textarea name="editdescription3"><?php echo get_option( 'slider_plus_description_three '); ?></textarea><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['editdescription3'] )) {
													$editDescription3 = stripslashes($_POST['editdescription3']);
										
													update_option( 'slider_plus_description_three', $editDescription3);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php } ?>
					</div><!-- Slider+ Description -->
					<div class="slider-plus-values editable">
						<?php
							if ( empty( get_option( 'slider_plus_values_three' ))) { ?>
								<form method="post">
									<label for="values3">Value</label><br>
									<textarea id="values_three" name="values3"></textarea><br>
									<input type="submit" value="submit">
								</form>
									<?php
										if ( !empty( $_POST['values3'] ) ) {
											  $sliderPlusValuesThree = stripslashes($_POST['values3']);
											  
											  add_option( 'slider_plus_values_three', $sliderPlusValuesThree, '', 'yes' );
											  header("Refresh:0"); 
										}
									?>
							<?php } else { ?>
								<em><?php echo get_option( 'slider_plus_values_three' ); ?></em>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="editvalues3">Values:</label><br>
												<textarea name="editvalues3"><?php echo get_option( 'slider_plus_values_three '); ?></textarea><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['editvalues3'] )) {
													$editValues3 = stripslashes($_POST['editvalues3']);
										
													update_option( 'slider_plus_values_three', $editValues3);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php } ?>
					</div><!-- Slider+ Values -->
				</div><!-- Slider+ Info -->
			</div><!-- Flex Container -->
		</div><!-- Slide 3 -->

		<!-- Slide 4 -->
		<div id="slide4" class="slide">
		<h3 class="slide-title"><?php echo get_option( 'slider_plus_title_four' ); ?></h3>
			<div class="flex-container">
				<div class="slider-plus-image editable">
					<?php
						if ( empty( get_option( 'slider_plus_image_four' ))) { ?>
							<form method="post">
								<label for="image4">Image:</label><br>
								<input class="image_url" type="text" name="image4">
								<input class="upload_button" type="button" class="button" value="Upload Image"><br>		  
								<input type="submit" value="Submit">
							</form>
								<?php
									if ( !empty( $_POST['image4'] )) {
									  $sliderPlusImageFour = $_POST['image4'];
									  
									  add_option( 'slider_plus_image_four', $sliderPlusImageFour, '', 'yes' );
									  header("Refresh:0");
									}
								
						} else { ?>
					<img src="<?php echo get_option( 'slider_plus_image_four' ); ?>">
					<div class="edit-container">
						<span class="edit-button"></span>
						<span class="delete-button"></span>
						<div class="edit-container-slide">
							<div class="edit-content">
								<form method="post">
									<label for="editimage4">Image:</label>
									<input class="image_url" type="text" name="editimage4">
									<input class="upload_button button" type="button" value="Upload Image"><br>
									<input type="submit" value="update">
								</form>
								<?php
									if ( !empty( $_POST['editimage4'] )) {
										$editImage4 = $_POST['editimage4'];
							
										update_option( 'slider_plus_image_four', $editImage4);
										header("Refresh:0");
									}
								?>
							</div>
						</div>
					</div><!-- Edit Container -->
					<?php } ?>
				</div>
		
				<div class="slider-plus-info">
					<div class="slider-plus-title editable">
						<?php
							if ( empty( get_option( 'slider_plus_title_four' ))) { ?>
								<form method="post">
									<label for="title4">Title</label><br>
									<input id="title_four" type="text" name="title4"><br>
									<input type="submit" value="submit">
								</form>
									<?php
									  	if ( !empty( $_POST['title4'] ) ) {
										  $sliderPlusTitleFour = stripslashes($_POST['title4']);
										  
										  add_option( 'slider_plus_title_four', $sliderPlusTitleFour, '', 'yes' );
										  header("Refresh:0");
										}
									?>
							<?php } else { ?>
								<h2><?php echo get_option( 'slider_plus_title_four' ); ?></h2>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="edittitle4">Title:</label>
												<input class="image_url" type="text" name="edittitle4" placeholder="<?php echo get_option( 'slider_plus_title_four' ); ?>"><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['edittitle4'] )) {
													$editTitle4 = stripslashes($_POST['edittitle4']);
										
													update_option( 'slider_plus_title_four', $editTitle4);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php }	?>
					</div>
					<div class="slider-plus-description editable">
						<?php
							if ( empty( get_option( 'slider_plus_description_four' ))) { ?>
								<form method="post">
									<label for="description3">Description</label><br>
									<textarea id="description_four" name="description4"></textarea><br>
									<input type="submit" value="submit">
								</form>
									<?php
									  	if ( !empty( $_POST['description4'] ) ) {
										  $sliderPlusDescriptionFour = stripslashes($_POST['description4']);
										  
										  add_option( 'slider_plus_description_four', $sliderPlusDescriptionFour, '', 'yes' );
										  header("Refresh:0"); 
										}
									?>
							<?php } else { ?>
								<p><?php echo get_option( 'slider_plus_description_four' ); ?></p>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="editdescription4">Descript:</label><br>
												<textarea name="editdescription4"><?php echo get_option( 'slider_plus_description_four' ); ?></textarea><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['editdescription4'] )) {
													$editDescription4 = stripslashes($_POST['editdescription4']);
										
													update_option( 'slider_plus_description_four', $editDescription4);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php } ?>
					</div><!-- Slider+ Description -->
					<div class="slider-plus-values editable">
						<?php
							if ( empty( get_option( 'slider_plus_values_four' ))) { ?>
								<form method="post">
									<label for="values4">Value</label><br>
									<textarea id="values_four" name="values4"></textarea><br>
									<input type="submit" value="submit">
								</form>
									<?php
										if ( !empty( $_POST['values4'] ) ) {
											  $sliderPlusValuesFour = stripslashes($_POST['values4']);
											  
											  add_option( 'slider_plus_values_four', $sliderPlusValuesFour, '', 'yes' );
											  header("Refresh:0"); 
										}
									?>
							<?php } else { ?>
								<em><?php echo get_option( 'slider_plus_values_four' ); ?></em>
								<div class="edit-container">
									<span class="edit-button"></span>
									<span class="delete-button"></span>
									<div class="edit-container-slide">
										<div class="edit-content">
											<form method="post">
												<label for="editvalues4">Values:</label><br>
												<textarea name="editvalues4"><?php echo get_option( 'slider_plus_values_four'); ?></textarea><br>
												<input type="submit" value="update">
											</form>
											<?php
												if ( !empty( $_POST['editvalues4'] )) {
													$editValues4 = stripslashes($_POST['editvalues4']);
										
													update_option( 'slider_plus_values_four', $editValues4);
													header("Refresh:0");
												}
											?>
										</div>
									</div>
								</div><!-- Edit Container -->
						<?php } ?>
					</div><!-- Slider+ Values -->
				</div><!-- Slider+ Info -->
			</div><!-- Flex Container -->
		</div><!-- Slide 4 -->	

</div><!-- Container -->

