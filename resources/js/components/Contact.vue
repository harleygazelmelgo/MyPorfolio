<template>
    <div class="block body-content" id="contact-page">
        <h2 id="contact-header">Get in touch</h2>
		<p class="form-msg">Thanks for dropping by to check my portfolio, if you have any questions/inquiries or would like to contact me, see below my information.</p>

        <form id="contact" name="contact" method="post" action="mail.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="name" id="namelabel"><span class="err"><i class="fa fa-info-circle"></i> Please enter your name</span></label>
                        <input id="name" name="name" type="text" class="form-control-lg" placeholder="Your Name *">
						<span class="anim"></span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label for="email" id="emailabel"><span class="err"><i class="fa fa-info-circle"></i> Please enter a valid e-mail address</span></label>
						<input id="email" name="email" type="email" class="form-control-lg" placeholder="Your Email *">
						<span class="anim"></span>
					</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message" id="msglabel"><span class="err"><i class="fa fa-info-circle"></i> Share your words with us</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Drop Some Words *" rows="5"></textarea>
                        <span class="anim"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <section id="subber">
                    <button type="submit" name="submitlink" id="submitlink" class="btn btn-md btn-primary">Send</button>
                </section>
            </div>
        </form>
        <br>
        <br>

        <div class="contact-container">
            <ul class="contact">
                <li>
                    <img src="images/mail.png" />
                    <h5>Email</h5>
                    <span>harleygfmelgo.com</span>
                </li>
                <br>
                <li>
                    <h5>Social Media</h5>
                    <ul class="icons">
                        <li><a class="view-github" href="https://github.com/harleygazelmelgo" > <img src="images/git.png" /></a></li>
                        <br>
                        <li><a class="view-linkedin" href="https://www.linkedin.com/in/hgmelgo31/"> <img src="images/linkedin.png" /></a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>

</template>




<script>
export default {

}
</script>

<style scoped>

.body-content {
    min-height: 80vh;

}



#contact-page {
    margin-top: 30px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 10px;
}

img {
    width: 50px;
    height: 50px;
}


.row {
    padding-left: 10px;
    padding-right: 10px;
}

</style>
