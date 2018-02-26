<?php 
	error_reporting(0);
	include("header.php");

	$projectName = str_replace("-", " ", $_GET['name']);


	$categories = array(0 => 'WEB', 1 => 'DESKTOP');

	$mysqli =  mysqli_connect('localhost', 'root', '', 'portfolio');

	if(!$mysqli){
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$sql = "SELECT * FROM portfolio WHERE name = '$projectName'";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$projectID = $row['id'];
			$name = $row['name'];
			$description = $row['description'];
			$category = $categories[$row['category']];
			$tech = $row['tech'];
	    }
	} 

	$nextProjID = $projectID + 1;
	$nextProjQuery = "SELECT * FROM portfolio WHERE id = '$nextProjID'";
	$getNext = $mysqli->query($nextProjQuery);

	if ($getNext->num_rows > 0) {
	    // output data of each row
	    while($row = $getNext->fetch_assoc()) {
	    	$nextProj = mb_strtolower(str_replace(" ", "-", $row['name']));
	    }
	} 

	$prevProjID = $projectID - 1;
	$prevProjQuery = "SELECT * FROM portfolio WHERE id = '$prevProjID'";
	$getPrev = $mysqli->query($prevProjQuery);

	if ($getPrev->num_rows > 0) {
	    // output data of each row
	    while($row = $getPrev->fetch_assoc()) {
	    	$prevProj = mb_strtolower(str_replace(" ", "-", $row['name']));
	    }
	}

	$mysqli->close();
?>

	<!-- Work - Single Page (Right Sidebar)
	================================================== -->
	<section id="works" class="page single">
		<div class="container">

			<div class="desktop-3 push-9 tablet-12 tablet-push-0 nested columns">

				<div class="sidebar sticky">

					<div class="desktop-3 tablet-12 columns">
					
						<div class="box-info">
							<?php 
								$projectButton = '<a href="works.php" alt="Projects">&larr; Works</a>';
								$projectPrev = '<a href="project.php?name='.$prevProj.'" alt="Projects">&larr; Prev</a>';

								echo ($projectID == 1) ? $projectButton : $projectPrev;?>
							<a href="project.php?name=<?php echo $nextProj;?>" alt="Works">Next &rarr; </a>
							<h3 class="border-top"><?php echo $name;?></h3>
							<p class="project-desc"></p>

							<p><?php echo $description;?></p>
						</div><!-- // .box-info -->

					</div><!-- // .desktop-3 -->

					<div class="clear"></div>

					<div class="desktop-3 tablet-6 mobile-half columns">

						<div class="box-info">
							<h4 class="border-top">Category</h4>
							<p>
								<?php echo $category;?>
							</p>
						</div><!-- // .box-info -->

					</div><!-- // .desktop-3 -->

					<div class="clear hide-under-tablet"></div>

					<div class="desktop-3 tablet-6 mobile-half columns">
						
						<div class="box-info">
							<h4 class="border-top">Technology</h4>
							<p><?php echo $tech; ?></p>
						</div><!-- // .box-info -->

					</div><!-- // .desktop-3 -->
					
					<div class="clear"></div>

				</div><!-- // .sticky -->

			</div><!-- // .desktop-3 -->


			<div class="clear show-under-tablet"></div>


			<div class="desktop-9 pull-3 tablet-12 tablet-pull-0 columns">
				<?/*
					1. Create folder projects/$id 
					2. Count elements of projects/$id
					3. Loop til the end of projects/$id
					4. echo img src
	
				*/?>

				<?php 

					$path = 'images/projects/'.$projectID;
					if(!$path){ echo "Errore";}
					$fi = new FilesystemIterator($path, FilesystemIterator::SKIP_DOTS);
					$cnt = iterator_count($fi);
					for($i = 1; $i < $cnt; $i++){
						echo '<img src="'.$path.'/'.mb_strtolower(str_replace(" ", "-",$projectName)).'_0'.$i.'.jpg" alt="" />';
					}

				?>
				

			</div><!-- // .desktop-0 -->

			<div class="clear"></div>

		</div><!-- // .container -->
	</section><!-- // section -->

<?php include("footer.php");?>