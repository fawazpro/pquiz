<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Quiz</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex" />

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet" />

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet" />

    <!-- Fix Footer CSS -->
    <link type="text/css" href="assets/vendor/fix-footer.css" rel="stylesheet" />

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet" />

    <!-- Preloader -->
    <link type="text/css" href="assets/css/preloader.css" rel="stylesheet" />

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet" />
</head>

<body class="layout-sticky-subnav layout-default">
    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">
        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header mb-0" data-fixed data-effects="">
            <div class="mdk-header__content">
                <div class="navbar navbar-expand pr-0 navbar-dark-dodger-blue navbar-shadow" id="default-navbar" data-primary>
                    <!-- Navbar toggler -->
                    <button class="navbar-toggler w-auto mr-16pt d-block rounded-0" type="button" data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="fixed-index.html" class="navbar-brand mr-16pt">
                        <div class="flex align-items-center">
                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">
                                <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" alt="logo" class="img-fluid" /></span>
                            </span>
                            <span class="mr-5">PHF Quiz</span>


                            <span class="ml-5 text-white text-monospace h3" id="countdown"></span>
                        </div>


                    </a>
                    <span class="d-none d-md-flex align-items-center mr-16pt">
                        <span class="avatar avatar-sm mr-12pt">
                            <span class="avatar-title rounded navbar-avatar"><i class="material-icons">opacity</i></span>
                        </span>

                        <small class="flex d-flex flex-column">
                            <strong class="navbar-text-100">Experience IQ</strong>
                            <span class="navbar-text-50">2,300 points</span>
                        </small>
                    </span>



                    <div class="flex"></div>


                </div>
            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content navbar-fixed">
            <div class="bg-info pb-lg-64pt py-32pt">
                <div class="container page__container">
                    <div class="d-flex flex-wrap align-items-end justify-content-end mb-16pt">
                        <h1 class="text-white flex m-0">Quiz Topic </h1>
                    </div>

                    <p class="hero__lead measure-hero-lead text-white-50">
                        Quiz description . The time can be added or removed
                    </p>
                </div>
            </div>

            <div class="navbar navbar-expand-md navbar-list navbar-light bg-white border-bottom-2" style="white-space: nowrap;">
                <div class="container page__container">
                    <ul class="nav navbar-nav flex navbar-list__item">
                        <li class="nav-item">
                            <i class="material-icons text-50 mr-8pt">tune</i>
                            Quiz rules, regulations and instruction:
                        </li>
                    </ul>
                </div>
            </div>

            <div style="position: fixed; margin-top: 45vh; margin-left: 80vw; color: #fff; background-color: #000; z-index: 100000;">
                <span class="text-monospace" id="coutdown"></span>
            </div>

            <div class="container page__container">
                <form action="quizlet" id="quizlet" method="post">
                    <?php
                    $combo = range(0, 14);
                    $cat = json_decode($questions);
                    ?>
                    <ol class="list-group">
                        <?php foreach ($combo as $key => $random) : ?>
                            <li class="list-group-item my-16pt mb-lg-48pt">
                                <div class="page-section">
                                    <div class="page-separator">
                                        <p class="measure-lead-max text-90 text-black-70">
                                            <?= ((array) $cat[$random])[0] ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="a" name="<?= $key . "que" . $random ?>">
                                                    <?= ((array) $cat[$random])[1] ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="b" name="<?= $key . "que" . $random ?>">
                                                    <?= ((array) $cat[$random])[2] ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="c" name="<?= $key . "que" . $random ?>">
                                                    <?= ((array) $cat[$random])[3] ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input"
                                                    value="d" name="<?= $key . "que" . $random ?>">
                                                    <?= ((array) $cat[$random])[4] ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                            </li>
                        <?php endforeach; ?>
                    </ol>
                    <input type="submit" value="Submit" class="btn btn-block btn-primary mb-3">
                </form>
            </div>
        </div>
    </div>
    <!-- // END Header Layout Content -->

    <div class="js-fix-footer2 bg-white border-top-2">
        <div class="container page__container page-section d-flex flex-column">
            <p class="text-70 brand mb-2pt">
                <img class="brand-icon" src="assets/images/logo/black-70%402x.png" width="30" alt="Luma" />
                PHF Ogun
            </p>
            <p class="measure-lead-max text-50 small mr-8pt">
                PHF Ogun created this quiz platform to engage its member during this
                period.
            </p>
            <p class="text-50 small mt-n1 mb-0">
                Copyright 2020 &copy; All rights reserved.
            </p>
        </div>
    </div>
    </div>
    <!-- // END Header Layout -->


    <!-- drawer -->
    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>
                <a href="fixed-index.html" class="sidebar-brand">
                    <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                    <span class="avatar avatar-xl sidebar-brand-icon h-auto">
                        <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>
                    </span>

                    <span>Luma</span>
                </a>

                <div class="sidebar-heading">Student</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-index.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                            <span class="sidebar-menu-text">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-courses.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                            <span class="sidebar-menu-text">Browse Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-paths.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                            <span class="sidebar-menu-text">Browse Paths</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-dashboard.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                            <span class="sidebar-menu-text">Student Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-my-courses.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                            <span class="sidebar-menu-text">My Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-paths.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                            <span class="sidebar-menu-text">My Paths</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-path.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                            <span class="sidebar-menu-text">Path Details</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-course.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                            <span class="sidebar-menu-text">Course Preview</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-lesson.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                            <span class="sidebar-menu-text">Lesson Preview</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-take-course.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                            <span class="sidebar-menu-text">Take Course</span>
                            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-take-lesson.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                            <span class="sidebar-menu-text">Take Lesson</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button" href="fixed-student-take-quiz.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                            <span class="sidebar-menu-text">Take Quiz</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-quiz-results.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                            <span class="sidebar-menu-text">My Quizzes</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-quiz-result-details.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                            <span class="sidebar-menu-text">Quiz Result</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-path-assessment.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                            <span class="sidebar-menu-text">Skill Assessment</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-path-assessment-result.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                            <span class="sidebar-menu-text">Skill Result</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-heading">Instructor</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-dashboard.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                            <span class="sidebar-menu-text">Instructor Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-courses.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                            <span class="sidebar-menu-text">Manage Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-quizzes.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                            <span class="sidebar-menu-text">Manage Quizzes</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-earnings.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                            <span class="sidebar-menu-text">Earnings</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-statement.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                            <span class="sidebar-menu-text">Statement</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-edit-course.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                            <span class="sidebar-menu-text">Edit Course</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-edit-quiz.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                            <span class="sidebar-menu-text">Edit Quiz</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-heading">Applications</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                            Enterprise
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-erp-dashboard.html">
                                    <span class="sidebar-menu-text">ERP Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-crm-dashboard.html">
                                    <span class="sidebar-menu-text">CRM Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-hr-dashboard.html">
                                    <span class="sidebar-menu-text">HR Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-employees.html">
                                    <span class="sidebar-menu-text">Employees</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-staff.html">
                                    <span class="sidebar-menu-text">Staff</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-leaves.html">
                                    <span class="sidebar-menu-text">Leaves</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="fixed-departments.html">
                                    <span class="sidebar-menu-text">Departments</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussions.html">
                                    <span class="sidebar-menu-text">Discussions</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussion.html">
                                    <span class="sidebar-menu-text">Discussion Details</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussions-ask.html">
                                    <span class="sidebar-menu-text">Ask Question</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-heading">UI</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                            Components
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-buttons.html">
                                    <span class="sidebar-menu-text">Buttons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-avatars.html">
                                    <span class="sidebar-menu-text">Avatars</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-forms.html">
                                    <span class="sidebar-menu-text">Forms</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-loaders.html">
                                    <span class="sidebar-menu-text">Loaders</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-tables.html">
                                    <span class="sidebar-menu-text">Tables</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-cards.html">
                                    <span class="sidebar-menu-text">Cards</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-icons.html">
                                    <span class="sidebar-menu-text">Icons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-tabs.html">
                                    <span class="sidebar-menu-text">Tabs</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-alerts.html">
                                    <span class="sidebar-menu-text">Alerts</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-badges.html">
                                    <span class="sidebar-menu-text">Badges</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-progress.html">
                                    <span class="sidebar-menu-text">Progress</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-pagination.html">
                                    <span class="sidebar-menu-text">Pagination</span>
                                </a>
                            </li>

                        </ul>
            </div>
        </div>
    </div>
    <!-- // END drawer -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>
    <script src="assets/vendor/easytimer.js"></script>
    <script>
        var cd = 20;
        var timer = new Timer();
        timer.start({
            countdown: true,
            startValues: {
                seconds: cd
            }
        });
        var tmr = new Timer();
        tmr.start({
            countdown: true,
            startValues: {
                seconds: cd - 10
            }
        });

        $('#countdown').html(timer.getTimeValues().toString());

        timer.addEventListener('secondsUpdated', function(e) {
            $('#countdown').html(timer.getTimeValues().toString());
        });

        timer.addEventListener('targetAchieved', function(e) {
            $('#quizlet').submit();
            $('#countdown').html('Time up!!');
        });
        tmr.addEventListener('targetAchieved', function(e) {
            $('#countdown').addClass('text-danger');
        });
    </script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Fix Footer -->
    <script src="assets/vendor/fix-footer.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>
</body>

</html>