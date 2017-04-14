    <script>

        $(document).ready(function() {

            var docHeight = $(window).height();
            var footerHeight = $('#footer').height();
            var footerTop = $('#footer').position().top + footerHeight;

            if (footerTop < docHeight) {
                $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
            }
        });
    </script>


    <footer id="footer" class="footer">
        <div class="navbar navbar-bottom">
            <div class="text-center center-block">
                <hr>
                <a href=""><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                <a href=""><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                <a href=""><i id="social-gh" class="fa fa-github fa-3x social"></i></a>
                <br>
                <small><strong>StartEdge</strong> © Copyright 2017</small>
            </div>
        </div>
    </footer>

    </body>
</html>