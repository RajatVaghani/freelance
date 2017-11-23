<html><!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` --><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Agendando - Sign Up</title>

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









    <div class="container-fluid" style="padding:0px;">





        <section class="section">
            <div class="row" style="padding:10px 50px;">

                <div class="col-md-12">
                    <div class="well" style="padding-bottom:210px;">


                        <form class="form" action="" method="post">
                            <div class="form-group">
                              <label for="inputEmail" class="col-md-2 control-label">Email</label>
                              <div class="col-md-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputPassword" class="col-md-2 control-label">Password</label>
                              <div class="col-md-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputFile" class="col-md-2 control-label">Picture</label>

                              <div class="col-md-10">
                                <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                <input type="file" id="inputFile" multiple="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="textArea" class="col-md-2 control-label">Address</label>

                              <div class="col-md-10">
                                <textarea class="form-control" rows="3" id="textArea"></textarea>
                                <span class="help-block">Please enter your address above.</span>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-2 control-label">Gender</label>

                              <div class="col-md-10">
                                <div class="radio radio-primary">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Male
                                  </label>
                                </div>
                                <div class="radio radio-primary">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Female
                                  </label>
                                </div>
                              </div>
                              <button type="submit" name="button" class="btn btn-raised btn-success" style="float:right;">REGISTER</button>
                            </div>

                        </form>


                    </div>
                </div>

            </div>

        </section>





    </div>








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
