<?php

if (session_status() == 1) {
    $sessionpath = getcwd();
    $sessionpath .= '/sessions/';
    session_save_path($sessionpath);
    session_start();
}

if (!isset($_SESSION['user_info'])) {
    $_SESSION['user_info'] = 'guest';
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="stylesheets/main.css?647484" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Two+Tone" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Nexustation</title>
</head>
<body class="bg-body d-flex">

<nav class="navbar navbar-light bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link align-middle d-inline-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><span class="material-icons-two-tone me-2">add</span> Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link align-middle d-inline-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><span class="material-icons-two-tone me-2">remove</span> Del</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link align-middle d-inline-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><span class="material-icons-two-tone me-2">create</span> Log</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link align-middle d-inline-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><span class="material-icons-two-tone me-2">help</span> Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link align-middle d-inline-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><span class="material-icons-two-tone link-info me-2">settings</span> Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row p-5">
        <div class="col">
            <h1 class="display-1 text-light text-center">Nexustation</h1>
        </div>
    </div>
    <!--    <div class="form-floating mb-3">-->
    <!--        <input type="text" class="form-control" id="usercmd1" placeholder="go, add, del, log, help">-->
    <!--        <label for="floatingInput">command: go, add, del, log, help</label>-->
    <!--    </div>-->
    <!--    <div class="form-floating mb-3">-->
    <!--        <input type="text" class="form-control invisible" id="usercmd2" placeholder="parameter for command above">-->
    <!--        <label for="floatingInput">parameter for command above</label>-->
    <!--    </div>-->
    <!--    <div class="form-floating mb-3">-->
    <!--        <input type="text" class="form-control invisible" id="usercmd3" placeholder="second parameter">-->
    <!--        <label for="floatingInput">second parameter</label>-->
    <!--    </div>-->

    <label for="usercmd1" class="form-label">Command</label>
    <input class="form-control cmd-font" list="usercmd1-options" id="usercmd1" placeholder="go, add, del, log, help...">
    <datalist id="usercmd1-options">
        <option value="go"></option>
        <option value="add"></option>
        <option value="del"></option>
        <option value="log"></option>
        <option value="help"></option>
    </datalist>

    <label for="usercmd2" class="form-label">Command</label>
    <input class="form-control invisible cmd-font" list="usercmd2-options" id="usercmd2" placeholder="parameter">
    <datalist id="usercmd2-options">
    </datalist>

    <label for="usercmd3" class="form-label">Command</label>
    <input class="form-control invisible cmd-font" list="usercmd3-options" id="usercmd3" placeholder="second parameter">
    <datalist id="usercmd3-options">
    </datalist>

</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</body>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script>
    var basiccmds = ['go', 'add', 'del', 'help', 'log'];

    function validURL(str) {
        var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
            '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
            '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
            '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
            '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
            '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
        return !!pattern.test(str);
    };

    function getValidUrl(url) {
        let newUrl = window.decodeURIComponent(url);
        newUrl = newUrl.trim().replace(/\s/g, "");

        if (/^(:\/\/)/.test(newUrl)) {
            return `http${newUrl}`;
        }
        if (!/^(f|ht)tps?:\/\//i.test(newUrl)) {
            return `http://${newUrl}`;
        }

        return newUrl;
    };

    document.getElementById("usercmd1").focus();
    // document.getElementById("usercmd2").style.display = "none";
    // document.getElementById("usercmd3").style.display = "none";

    document.getElementById('usercmd1').onkeypress = function (e) {
        usercmd1 = document.getElementById("usercmd1").value;
        if (!e) e = window.event;
        var keyCode = e.keyCode;
        if (keyCode == 13) {
            if (basiccmds.indexOf(usercmd1) >= 0) {
                document.getElementById("usercmd1").value = usercmd1;
                document.getElementById("usercmd2").classList.remove("invisible");
                document.getElementById("usercmd2").classList.add("visible");
                document.getElementById("usercmd1").disabled = true;
                document.getElementById("usercmd2").focus();
            } else {
                if (validURL(usercmd1) == true) {
                    usercmd1 = getValidUrl(usercmd1);
                    document.getElementById("usercmd1").value = "";
                    window.open(usercmd1, "_blank");
                } else {
                    $.post('engine.php', {
                        'usercmd1': usercmd1
                    }, function (data) {
                        if (data != 0) {
                            alert(data);
                        } else {
                            alert('it did not get a result');
                        }
                    });
                }
            }
        } else {
            // alert(keyCode);
        }
    }

    document.getElementById('usercmd2').onkeypress = function (e) {
        usercmd2 = document.getElementById("usercmd2").value;
        if (!e) e = window.event;
        var keyCode = e.which;
        if (keyCode == 13) {
            usercmd1 = document.getElementById("usercmd1").value;
            $.post('engine.php', {
                'usercmd1': usercmd1,
                'usercmd2': usercmd2
            }, function (data) {
                if (data != 0) {
                    alert(data);
                } else {
                    alert('it did not get a result');
                }
            })
        }
    }

</script>
</body>
</html>