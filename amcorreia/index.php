<html><!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` --><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Agendando</title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Material Design -->
    <link href="css/bootstrap-material-design.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


    <link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="">


    <?php

        include 'include/nav.php';

    ?>






    <header id="header" style="height:100vh;background:url('img/home-bg.jpg');background-size:cover;position:relative;">

        <div class="header-text animated fadeIn" style="position:absolute;width:100%;top:40%">

            <div class="col-md-6 col-md-offset-3">

                <form class="form" id="formEmail" action="" method="POST">
                    <div class="form-group label-floating">
                      <label class="control-label" for="focusedInput1">Search Professionals..</label>
                      <input class="form-control" id="focusedInput1" type="text" style="color: #fff;">
                    </div>
                </form>
            </div>
        </div>
    </header>


    <div class="container-fluid" style="padding:0px;">


        <section class="section secwhite" style="padding:30px 60px">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="page-header" style="font-size:35px">About Us</h3>
                    <p class="perfpara" style="font-size: 18px;line-height: 36px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a lacus ornare, suscipit orci et, dictum urna. Donec aliquam ullamcorper lorem, non cursus eros faucibus at. In ipsum ligula, fermentum eu dignissim quis, sollicitudin at ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque eget nisl est. Pellentesque interdum quam ut diam fringilla scelerisque. Quisque sit amet gravida nisl. Praesent ut erat eu arcu aliquet sodales non scelerisque quam. Aliquam a erat nec ex sollicitudin venenatis. In elit risus, rutrum vitae lorem in, congue porta risus. Nullam rhoncus augue viverra auctor pharetra. Morbi mattis lectus vitae nisi luctus, ac euismod leo laoreet. Praesent ut volutpat elit. Nulla at sem est. Sed id sem id dui malesuada tincidunt.
                    </p>
                </div>
            </div>

        </section>


        <section class="section">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h3>Agenda for dentists</h3>
                        <p class="perfpara">Say goodbye to your paper agenda! With SIMPLE you can mark and confirm your queries via SMS, as well as control attendance schedules, appointments and return alerts.</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="http://placehold.it/350x120" alt="" class="img-responsive" style="display:block;margin:0px auto;">
                </div>
            </div>

        </section>




        <section class="section secwhite">
            <div class="row">
                <div class="col-md-6">
                    <img src="http://placehold.it/350x120" alt="" class="img-responsive" style="display:block;margin:0px auto;">
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h3>Financial with issue tickets</h3>
                        <p class="perfpara">Manage your cash flow, filter your journal entries, generate objective reports, closely monitor delinquent patients, and still issue direct bids through the system without any banking bureaucracy</p>
                      </div>
                    </div>
                </div>

            </div>

        </section>

        <section class="section ">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h3>Marketing of relationship</h3>
                        <p class="perfpara">With Simple, you create and send relationship campaigns via SMS, ensuring that the patient never forgets you. Send birthday messages, commemorative dates, return reminders, surgical post, and more.</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="http://placehold.it/350x120" alt="" class="img-responsive" style="display:block;margin:0px auto;">
                </div>
            </div>

        </section>



    </div>


    <footer>
        Hello
    </footer>





    <div class="modal" id="loginModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="modal-title" style="text-align:center">AGENDANDO</h4>
          </div>
          <div class="modal-body">
            <hr>
            <img src="img/fb-btn.png" alt="" style="display:block;margin:0px auto;">
            <div class="col-md-5">
                <hr>
            </div>
            <div class="col-md-2">
                <p style="text-align: center;font-size: 15px;margin-top: 10px;">OR</p>
            </div>
            <div class="col-md-5">
                <hr>
            </div>

            <form class="form" action="" method="post" style="padding:30px 100px;">
                <div class="form-group">
                  <label class="control-label" for="inputDefault">Email</label>
                  <input type="text" class="form-control" id="inputDefault">
                </div>
                <div class="form-group" style="margin-top:0px;">
                  <label class="control-label" for="inputDefault">Password</label>
                  <input type="password" class="form-control" id="inputDefault">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-lg btn-block btn-raised" name="button">Log In</button>
                </div>
            </form>

            <hr>

            <p style="text-align:center;font-size:18px;">Don't have an account? <a href="signup.php">Sign Up</a></p>

          </div>

        </div>
      </div>
    </div>



<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
(function () {

    var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function () {
        var index = $('.bs-component').index($(this).parent());
        $.get(window.location.href, function (data) {
            var html = $(data).find('.bs-component').eq(index).html();
            html = cleanSource(html);
            $("#source-modal pre").text(html);
            $("#source-modal").modal();
        })

    });

    $('.bs-component [data-toggle="popover"]').popover();
    $('.bs-component [data-toggle="tooltip"]').tooltip();

    $(".bs-component").hover(function () {
        $(this).append($button);
        $button.show();
    }, function () {
        $button.hide();
    });

    function cleanSource(html) {
        var lines = html.split(/\n/);

        lines.shift();
        lines.splice(-1, 1);

        var indentSize = lines[0].length - lines[0].trim().length,
        re = new RegExp(" {" + indentSize + "}");

        lines = lines.map(function (line) {
            if (line.match(re)) {
                line = line.substring(indentSize);
            }

            return line;
        });

        lines = lines.join("\n");

        return lines;
    }

    $(".icons-material .icon").each(function () {
        $(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
    });

})();

</script>
<script src="js/ripples.min.js"></script>
<script src="js/material.min.js"></script>
<script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
$(function () {
    $.material.init();
    $(".shor").noUiSlider({
        start: 40,
        connect: "lower",
        range: {
            min: 0,
            max: 100
        }
    });

    $(".svert").noUiSlider({
        orientation: "vertical",
        start: 40,
        connect: "lower",
        range: {
            min: 0,
            max: 100
        }
    });
});
</script>


<div id="snackbar-container"></div>
</body>
</html>
