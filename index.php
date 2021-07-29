<!DOCTYPE html>
<?php
	require_once('admin/dbconnect.php');
?>
<html>
	<head>
		<title>Resume</title>
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
			<div class="container">
			<div class="container-inner">
			<nav id="header">
				<?php
					$query="select * from personal where uid=1";
					$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
					$personaldetails=mysqli_fetch_assoc($result);
					mysqli_free_result($result);
				?>
				<ul class="nav">
					<li class="splash">
						<a href="#information">
							<div class="profile-image">
								<img src="<?php echo $personaldetails['image']; ?>" />
							</div>
							<div class="profile-info">
								<div class="profile-name"><?php echo strtoupper($personaldetails['fname']); ?><br/><?php echo strtoupper($personaldetails['lname']); ?></div>
								<div class="profile-designation"><?php echo strtoupper($personaldetails['designation']); ?></div>
							</div>
						</a>
					</li>
				</ul>
				<div class="clear"></div>
			</nav>
			<section id="information">
				<div class="info">
					<div class="info-text"><?php echo $homecontent['data']; ?></div>
					<div class="phone-icon"><span class="icon2">d</span></div>
					<div class="call"><?php echo $personaldetails['phone']; ?></div>
					<div class="reach-me"><?php echo $personaldetails['email']; ?><br/><?php echo $personaldetails['website']; ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section id="profile">
				<article id="employment">
					<div class="emploment-header collapse">
						<div class="icon-emp"><span class="icon">e</span></div>
						<h2>Employment</h2>
						<span class="collapse-control"></span>
						<div class="clear"></div>
					</div>
					<div class="emploment-details">
						<?php
							$query="select * from employment";
							$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
							
							$oddeven="odd";
							while($empdetails=mysqli_fetch_assoc($result))
							{
						?>
						<div class="emploment-detail <?php echo $oddeven; ?>">
							<div class="duration">
								<div class="from"><?php echo $empdetails['fromyear']; ?></div>
								<div class="to"><?php echo $empdetails['toyear']; ?></div>
							</div>
							<div class="company-pos">
								<h4 class="company"><span class="icon3"></span><?php echo $empdetails['company']; ?></h4>
								<h4 class="position"><span class="icon3"></span><?php echo $empdetails['designation']; ?></h4>
								<div class="clear"></div>
								<div class="desc"><p><?php echo $empdetails['description']; ?></p></div>
							</div>
							<div class="clear"></div>
						</div>
						<?php
								$oddeven==="odd" ? $oddeven="even" : $oddeven="odd";
							}
							mysqli_free_result($result);
						?>
					</div>
				</article>
				<article id="education">
					<div class="education-header collapse">
						<div class="icon-edu"><span class="icon">h</span></div>
						<h2>Education</h2>
						<span class="collapse-control"></span>
						<div class="clear"></div>
					</div>
					<div class="education-details">
						<?php
							$query="select * from education";
							$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
							
							$oddeven="odd";
							while($edudetails=mysqli_fetch_assoc($result))
							{
						?>
						<div class="education-detail <?php echo $oddeven; ?>">
							<div class="duration">
								<div class="from"><?php echo $edudetails['fromyear']; ?></div>
								<div class="to"><?php echo $edudetails['toyear']; ?></div>
							</div>
							<div class="company-pos">
								<h4 class="company"><span class="icon3"></span><?php echo $edudetails['college']; ?></h4>
								<h4 class="position"><span class="icon3"></span><?php echo $edudetails['course']; ?></h4>
								<div class="clear"></div>
								<div class="desc"><p><?php echo $edudetails['description']; ?></p></div>
							</div>
							<div class="clear"></div>
						</div>
						<?php
								$oddeven==="odd" ? $oddeven="even" : $oddeven="odd";
							}
							mysqli_free_result($result);
						?>
						
					</div>
				</article>
				<article id="skills">
					<div class="skills-header collapse">
						<div class="icon-skills"><span class="icon">i</span></div>
						<h2>SKILLS</h2>
						<span class="collapse-control"></span>
						<div class="clear"></div>
					</div>
					<div class="skills-details odd">
						<aside class="left-aside">
							<h4>PROGRAMMING SKILLS</h4>
							<?php
								$query="select * from skills where skilltype='progskill'";
								$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
								$progskill=1;
								while($progskilldetails=mysqli_fetch_assoc($result))
								{
							?>
							<div class="skill <?php echo "progskill".$progskill ?>" style="width:<?php echo $progskilldetails['skillvalue'].'%;' ?>"><strong><?php echo $progskilldetails['skill'] ?></strong> / <?php echo $progskilldetails['skillvalue'] ?>% </div>
							<?php
									$progskill++;
								}
								mysqli_free_result($result);
							?>
						</aside>
						<aside class="right-aside">
							<h4>Database SKILLS</h4>
							<?php
								$query="select * from skills where skilltype='graphskill'";
								$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
								$graphskill=1;
								while($graphskilldetails=mysqli_fetch_assoc($result))
								{
							?>
							<div class="skill <?php echo "graphskill".$graphskill ?>" style="width:<?php echo $graphskilldetails['skillvalue'].'%;' ?>"><strong><?php echo $graphskilldetails['skill'] ?></strong> / <?php echo $graphskilldetails['skillvalue'] ?>% </div>
							<?php
									$graphskill++;
								}
								mysqli_free_result($result);
							?>
						</aside>
						<div class="clear"></div>
					</div>
				</article>
				<article id="hobbies">
					<div class="education-header collapse">
						<div class="icon-edu"><span class="icon">h</span></div>
						<h2>Hobbies</h2>
						<span class="collapse-control"></span>
						<div class="clear"></div>
					</div>
					<div class="education-details">
						<?php
							$query="select * from hobbies";
							$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
							
							$oddeven="odd";
							while($edudetails=mysqli_fetch_assoc($result))
							{
						?>
						<?php
								$oddeven==="odd" ? $oddeven="even" : $oddeven="odd";
							}
							mysqli_free_result($result);
						?>
						
					</div>
				</article>
			</section>
		
		<?php
			require_once('admin/dbclose.php');
		?>
	</body>
</html>