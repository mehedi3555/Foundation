    </div>
        <script src=" {{ asset('BackEnd/plugins/jQuery/jquery-3.2.1.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/bootstrap/js/bootstrap.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/materialize/js/materialize.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/metismenu-master/dist/metisMenu.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/slimScroll/jquery.slimscroll.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/simplebar/dist/simplebar.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/dist/js/custom.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/sparkline/sparkline.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/counterup/jquery.counterup.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/chartJs/Chart.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('BackEnd/plugins/monthly/monthly.js') }} " type="text/javascript"></script>
        @stack('script')
    </body>
</html>