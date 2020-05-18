<template>
    <div class="block" id="contact-page">
        <h2 id="contact-header">Get in touch</h2>
		<p class="form-msg">Thank you for taking the time to look at my portfolio, if you have any questions or would like to contact me, my information can be found below.</p>

        <form id="contact" name="contact" method="post" action="/contact" enctype="multipart/form-data">
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
                    <button type="submit" name="submitlink" id="submitlink" class="btn btn-lg btn-block btn-flat btn-primary">Send <i class="fa fa-paper-plane"></i></button>
                </section>
            </div>
        </form>
        <br>
        <br>

        <div>
            <ul class="contact">
                <li>
                    <span class="icon major fa-envelope"></span>
                    <h3>Email</h3>
                    <span>harleygfmelgo.com</span>
                </li>
                <li>
                    <h3>Social Media</h3>
                    <ul class="icons">
                        <li><a href="https://github.com/harleygazelmelgo" class="fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="https://www.linkedin.com/in/hgmelgo31/" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>

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

#contact-page {
    margin-top: 30px;
    margin-left: 10px;
    margin-right: 10;
    margin-bottom: 10px;
}



</style>
