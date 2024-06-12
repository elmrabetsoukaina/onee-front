<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php' ; ?>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div> <!--*******************
        Preloader end
    ********************-->
    <?php include 'script.php' ; ?>
    <script>
        
         postData('./api/test/test')
        .then(rep =>{
            !rep.is_auth ?
            window.location.href  = "login"
            : window.location.href  = "home"
        })
    </script>
    
</body>
</html>