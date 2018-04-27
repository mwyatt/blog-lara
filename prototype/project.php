<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" rel="preload">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Martin Wyatt - Project - Business Management System</title>
    <link href="main.css" rel="stylesheet">
</head>
<body>
    <div class="feature-project">
        <div class="menu text-center pt-4">
            <div class="menu-item is-active d-inline-block pl-3 pr-3"><a href="#" class="menu-item-link pb-1">Projects</a></div>
            <div class="menu-item d-inline-block pl-3 pr-3"><a href="#" class="menu-item-link pb-1">Writing</a></div>
            <div class="menu-item d-inline-block pl-3 pr-3"><a href="#" class="menu-item-link pb-1">Contact</a></div>
        </div>
        <div class="d-table feature-body">
            <div class="d-table-cell text-center">
                <a href="#" class="logo"><?php include('logo.svg') ?></a>
                <div class="feature-name">Martin Wyatt</div>
                <div class="feature-role">Designer &amp; Developer</div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="row no-gutters">
            <div class="col-lg-4"></div>
            <div class="col">
                <div class="row no-gutters">

                    <?php foreach ($projects as $project): ?>

                        <div class="col-sm-6">
                            <a href="#" class="project text-decoration-none d-block <?php echo implode(' ', $project->classes) ?>">
                                <span class="project-title d-block"><?php echo $project->name ?></span>
                                <span class="project-desc d-block"><?php echo $project->shortDesc ?></span>
                                <!-- <div class="project-logo project-logo-avo"><?php //include($project->pathLogo) ?></div> -->
                            </a>
                        </div>

                    <?php endforeach ?>

                </div>
                <div class="copy">
                    <p>&copy; Martin Wyatt <?php echo date('Y') ?></p>
                </div>

                <!-- <h2>Writing</h2> -->

                <div class="articles d-none">

                    <?php foreach ($articles as $article): ?>

                        <div class="article">
                            <span class="article-date float-right"><?php echo date('d-m-y', $article->timePublished) ?></span>
                            <h3 class="article-title"><a href="#"><?php echo $article->title ?></a></h3>
                            <p class="article-description"><?php echo $article->description ?></p>
                        </div>

                    <?php endforeach ?>

                </div>
            </div>

        </div>
    </div>
</body>
</html>
