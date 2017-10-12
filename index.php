<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

$catagory = isset($_GET['catagory']) ? $_GET['catagory'] : null;

		if($catagory){
				$template->jobs = $job->getByCategory();
		} else {
				$template->title = 'Latest Jobs';
				$template->jobs = $job->getAllJobs();
		}


$template->categories = $job->getCategories();
echo $template;
