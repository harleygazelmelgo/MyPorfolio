<template>
<body>
    <div class="container body-content">
        <div class="row">
            <div class="col-md-4 col-sm-4 center">
                <div class="profile-pic">
                    <img src="images/harl.jpg" alt="Harley Melgo, Web Designer from Philippines">
                </div>
                <div class="social-circle">
                    <a class="view-linkedin" href="https://www.linkedin.com/in/hgmelgo31/"> <img src="images/linkedin.png" id="socialImg" /></a>
                    <a class="view-github" href="https://github.com/harleygazelmelgo" > <img src="images/git.png " id="socialImg"/></a>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 center">
                <div class="profile-text">
                    <h2 class="job-title"> Junior Web Developer </h2>
                    <p> Hello! I am Harley Melgo, a Junior Web Developer.
                        Designing has been my passion since the days I started using computers. The passion of learning new things has been my way to study web developing.
                        The gain knowledge motivates me to push my limits in creating fair designed, intuitive and functional websites.  </p>
                </div>
                <div class="skills-text">
                    <h4 class="job-skills"> My Skills </h4>
                    <p> Proficiency in HTML, CSS3, JavaScript, PHP, Laravel, Vue.js and Github. </p>
                </div>
            </div>
            <div class="btn-wrap">
                <a href="file/resume.pdf" class="btn btn-sm btn-primary"> Download CV </a>
            </div>
        </div>
    </div>
</body>
</template>


<script>
export default {
    name: 'AboutMe',
}
</script>


<style scoped>

body {
    background-color: #8FC0A9;
}

* {
    box-sizing: border-box;

}

.body-content {
    min-height: 80vh;

}
.container {

    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;

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
    margin-top: 25px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 10px;
    overflow: hidden;
    transform: translateZ(0);
    background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
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

#socialImg {
    width: 30px;
    height: 30px;
}


.social-circle {

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

.job-skills {
    color: red;
    font-size: 28px;
    font-weight: 300 !important;
}

.profile-text p {
    line-height: 26px;
    margin: 0 0 10px;
}

.btn-sm {
    padding: 15px 30px;

}

.btn-primary {
    background-color: crimson;
    border-color: crimson;
    color: #ffffff;
}

.btn {
    text-transform: uppercase;
    margin-left: 120px;
    margin-top: 30px;
    margin-bottom: 15px;

}

</style>
