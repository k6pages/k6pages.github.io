<?php include 'header.php'; ?>
<?php include 'sider.php'; ?> 
<body>
 

<!-- Slider Carousel - START -->
    <div id="carousel1" class="carousel slide" data-ride="carousel" style="width:700px;height:466px;padding-top: 10px;">
        <div class="carousel-inner"style="width:700px">
            <div class="item active">
                <img alt="Bootstrap template" src="images/01.jpg" style="width:700px">
                <div class="carousel-caption" >
                </div>
            </div>
            <div class="item">
                <img alt="Bootstrap template" src="images/03.jpg" style="width:700px">
                <div class="carousel-caption">
                    <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img alt="Bootstrap template" src="images/02.jpg" style="width:700px">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
        <ul class="nav nav-pills nav-justified" style="width:700px;height:39%;line-height: 1.301857;">
            <li data-target="#carousel1" data-slide-to="0" class="active">
                <a href="#" style="height: 178px;"><h2 style="font-size: 26px;margin-bottom: 3px;">Fundraising <br> Drive</h2>
                <small style="font-family: mission_gothiclight;font-size: 16px;">Help with the campaign to <br>raise costs for refurbishment<br> by visiting our crowd-funding...</small></a>
            </li>
            <li data-target="#carousel1" data-slide-to="1">
                <a href="#" style="height: 178px;"><h2 style="font-size: 26px;margin-bottom: 3px;">Opening Exhibition</h2>
                <small style="font-family: mission_gothiclight;font-size: 16px;">We’ve started putting together the very first exhibition and it’s looking....</small></a>
            </li>
            <li data-target="#carousel1" data-slide-to="2">
                <a href="#" style="height: 178px;"><h2 style="font-size: 26px;margin-bottom: 3px;">Get<br> Involved</h2>
                <small style="font-family: mission_gothiclight;font-size: 16px;">Are you interested in volunteering at the gallery? Click here ....</small></a>
            </li>
        </ul>
    </div>
    


<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

<style>
body {
    padding-top: 0px;
}
#carousel1 .nav a small {
     
}
#carousel1 .nav {
    background: #eee;
}
.nav-justified > li > a {
    border-radius: 0px;
}
.nav-pills > li[data-slide-to="0"].active a {
    background-color: #878889;
}
.nav-pills > li[data-slide-to="1"].active a {
    background-color: #878889;
}
.nav-pills > li[data-slide-to="2"].active a {
    background-color: #878889;
}
</style>

<script type="text/javascript">
    jQuery(function ($) {
        $('#carousel1').carousel({
            interval: 2000
        });

        var clickEvent = false;

        $('#carousel1').on('click', '.nav a', function () {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function (e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
</script>
<!-- Slider Carousel - END -->



</body>
<?php include 'footer.php'; ?>