<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$g_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <?php
    if(isset($js_array)){ 
        foreach ($js_array AS $var) { 
            echo '<script src="'.$var.'?v='.date('YmdHis').'"></script>'.PHP_EOL;
        }
    }
    
    ?>
    <!-- <script src="js/member.js"></script> -->
</head>


<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom px-4">
            <div>
                <a href="/" class="mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <!-- <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg> -->
                    <span class="fs-2">KAI Certification</span>

                </a>
            </div>
            <div>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">심사원등록</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">심사원현황</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">고객등록</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">고객현황</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">심사종합현황</a></li>
                </ul>
            </div>
            <div>
                <ul class="d-flex list-unstyled">
                    <li class="px-2">박성훈 위워님 반갑습니다</li>
                    <li class="px-2"><a href="#">로그아웃</a></li>
                </ul>
            </div>
        </header>