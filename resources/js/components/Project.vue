<template>
<h1 id="page-title"> PROJECTS
    <div class="row row-cols-1 row-cols-sm-2 body-content">
        <div class="col mb-4">
            <div class="card">
                <img src="images/rps.png" class="card-img-center" alt="RPS" style="width:10px height:10px">
                <div class="card-body">
                    <h5 class="card-title">RPS Game</h5>
                    <p class="card-text"> Rock Paper Scissors is a hand game usually played between two people, in which each player simultaneously forms one of three shapes with an outstretched hand, but here you will play against the computer. </p>
                    <button type="button" class="btn btn-outline-info"><a href="https://github.com/harleygazelmelgo/RPSGame" class="card-link">Github</a></button>
                    <button type="button" class="btn btn-outline-info"><a href="http://rpsgame.tk/" class="card-link">Launch site</a></button>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="images/tweeter.png" class="card-img-center" alt="tweet">
                <div class="card-body">
                    <h5 class="card-title"> Tweeter </h5>
                    <p class="card-text"> This is a clone version of the famous social media application, Twitter.  </p>
                    <button type="button" class="btn btn-outline-info"><a href="https://github.com/harleygazelmelgo/TweeterTwo" class="card-link">Github</a></button>
                    <button type="button" class="btn btn-outline-info"><a href="http://tweetur.ml/" class="card-link">Launch site</a></button>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="images/hoops.png" class="card-img-center" alt="hoops">
                <div class="card-body">
                    <h5 class="card-title"> Minimum Viable Product: Hoops Academy Inc. </h5>
                    <p class="card-text"> A website for shoes enthusiast that are looking for limited editions Jordan Shoes and Basketball Shoes.  </p>
                    <button type="button" class="btn btn-outline-info"><a href="https://github.com/harleygazelmelgo/MVP" class="card-link">Github</a></button>
                    <button type="button" class="btn btn-outline-info"><a href="http://hoopsacademy.ml/" class="card-link">Launch site</a></button>
                </div>
            </div>
        </div>
    </div>
</h1>
</template>

<script>
export default {

};
</script>

<style scoped>

.body-content {
    min-height: 80vh;

}

#page-title {
    color: black;
    font-family: "Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 45px;
    padding: 20px;
    text-align: left;

}

.card {
    max-width: 100%;
    width: 100%;
    height: auto;
    padding: 10px;
    margin: 10px 5px 10px 5px;
}
img {

    width: 280px;
    height: 300px;
    border-radius: 10px;
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
}

.card-body {
    color: black;
    font-family: "Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 12px;

}


</style>
