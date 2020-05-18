<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 center">
                <div class="profile-pic">
                    <img src="images/harl.jpg" alt="Harley Melgo, Web Designer from Philippines">
                </div>
                <div class="social-circle">
                    <a href="https://www.linkedin.com/in/hgmelgo31/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.twitter.com/akosiharly/" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 center">
                <div class="profile-text">
                    <h2 class="job-title"> Junior Web Developer </h2>
                    <p> Hello! I am Harley Melgo, a Junior Web Developer.
                        Designing has been my passion since the days I started using computers. The passion of learning new things has been my way to study web developing.
                        The gain knowledge motivates me to push my limits in creating fair designed, intuitive and functional websites.  </p>
                </div>
            </div>


        </div>

    </div>
</template>


<script>
export default {
    name: 'AboutMe',
}
</script>


<style scoped>

* {
    box-sizing: border-box;
}

.container {
    display: block;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 40px;
}


.row {
    display: block;
    margin-right: -15px;
    margin-left: -15px;
}

.center {
    text-align: center;

}

.col-md-4, .col-sm-4, .col-md-8, .col-sm-8 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;

}

.profile .profile-pic {

    height: 220px;
    width: 220px;
    max-width: 220px;

}

.profile-pic {
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 10px;
    overflow: hidden;
    transform: translateZ(0);
}

.profile-pic img:hover {
    filter: grayscale(0%)
}

.profile-pic img {
    max-width: 50%;
    transform-style: all 0.5s ease;
}

img {
    vertical-align: middle;
    border: 0;
}

.social-circle {
    display: block;
    margin-bottom: 30px;
}

.social-circle a {
    border: 2px solid #999999;
    color: #999999;
    display: inline-block;
    font-size: 24px;
    height: 52px;
    line-height: 48px;
    margin: 0 5px 5px;
    width: 52px;
}

.profile-text .job-title {
    color: red;
    font-size: 28px;
    font-weight: 300 !important;
}

.profile-text p {
    line-height: 26px;
    margin: 0 0 10px;
}

</style>
