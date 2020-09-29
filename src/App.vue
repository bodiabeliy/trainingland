<template>
 <div class="wrapper">
  <div class="header">
    <div class="title">
      <div style="z-index: 300;">
        <div class="container">
          <transition name="fade">
            <div class="box" v-if="show">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/Xoo5WT5tW2I" class="embed-responsive-item" allowfullscreen></iframe>
              </div>
            </div>
          </transition>
        </div>
     </div>
     <div class="text ">
      <p class="There_is_no_other_platforms_for_you_as_like" >
        {{ platforms }}
      </p>
      <img v-on:click="show = !show" class="play-video" src="./assets/play-circle.png" alt="">
      <div @click="valideForm" class="btnTryNow btnHover">
       <h1 class="try_now">{{ btnTitle }}</h1>
      </div>
      <p class="no_need_to_add_cards_details">{{ cards }}</p>
     </div>
   </div>
  </div>
  <div class="trynow">
    <h1 class="NEW_FEATURES texting">{{ features }}</h1>
    <h1 class="Over_1000_designers_are_using text">{{ over1000 }}</h1>
    <form class="form" id="form" name="form">
      <input type="text" id="input" class="forms input user_name  col-md-3" placeholder="FULL NAME" style="text-align: left;">
      <input type="text" class="forms input user_name  col-md-2" placeholder="EMAIL" style="text-align: left;" >
      <input type="text" id="inputP" class="forms input user_name col-md-2" placeholder="PASSWORD" style="text-align: left;">
      <button @click="valideForm" class="submit hover col-md-3" >TRY NOW</button>
    </form>
    <p class="_30_days_free_trial_for_all_">{{ arrowtext }}</p>
    <img class="arrow" src="./assets/ARROW.png" alt="">
    <p class="anotation">{{ anotation }}</p>
  </div>
  <div class="footer">
   <div class="list">
      <ul>StartEx
        <li>Aenean lacinia bibendum nulla sed<br> consectetur. Aenean eu leo quam</li>
        <li>JSA & CAN: 1-000-123-4567</li>
        <li>Address: 34 Brokel Rd. NY</li>
      </ul>
      <ul>Support
      <li>Help Center</li>
      <li> Get Started</li>
      <li>Contact US</li>
      </ul>
      <ul>About US
        <li>About Us</li>
        <li>Terms of Use</li>
        <li>Privacy Policy</li>
      </ul>
      <ul>Get NewsLetter
        <input class="Rounded_Rectangle" type="text" placeholder="EMAIL" style="font-size: 16px;  color: rgba(0, 0, 0);">
        <div @click="valideForm" class="send hover user_email">
          <img class="plane" src="./assets/send.png" alt="">
        </div>
        <div class="social-icons">
          <i class="fas fa-basketball-ball basket color"></i>
          <i class="fab fa-facebook-f face color"></i>
          <i class="fab fa-google-plus-g google color"></i>
          <i class="fab fa-twitter twit color"></i>
        </div>
      </ul>
      <div class="poligon">
        <img src="./assets/poligon.png" alt="">
      </div>
   </div>
      <v-alert id="lessthen" style="z-index: 300;"
        prominent
        type="success">
        <v-row>
          <v-col class="grow">Form was submitted successfully!</v-col>
        </v-row>
      </v-alert>
      <v-alert type="error" id="error" style="z-index: 300;">
        field must be filling!
      </v-alert>
      <v-alert type="warning" id="warning" style="z-index: 300;">
        One of field must consist of 8 and more symbols!.
      </v-alert>
  </div>
 </div>
</template>
<script>
export default {
  data: () => ({
    platforms: 'There is no other platforms for you as like',
    btnTitle: 'TRY NOW',
    cards: '*No need to add cards detalis',
    features: 'NEW FEATURES',
    over1000: 'Over 1000 designers are using...',
    arrowtext: '30 days free trial for all',
    anotation: 'By Signing up you agree to our terms Services',
    show: false
  }),
  methods: {
    valideForm () {
      const input = document.getElementById('input')
      const inputP = document.getElementById('inputP')
      if (input.value || inputP.value) {
        const empty = document.getElementById('lessthen')
        empty.style.opacity = 1
        setTimeout(() => {
          empty.style.opacity = 0
        }, 2000)
        if (input.value < 8 || inputP.value < 8) {
          alert('Your name or password is very easy! Сontinue?')
          const warning = document.getElementById('warning')
          warning.style.opacity = 1
          setTimeout(() => {
            warning.style.opacity = 0
          }, 4000)
        }
      } else {
        const error = document.getElementById('error')
        error.style.opacity = 1
        setTimeout(() => {
          error.style.opacity = 0
        }, 3000)
      }
    }
  }
}
</script>
<style>
.wrapper
{
 width: 1400px;
 height: 1610px;
}
.header
{
  position: relative;
 width: 100%;
 height: 815px;
 background-image: url('./assets/mount.png');
 background-size: 100% 100%;

}

.title {
PADDING-top: 129px;
display: flex;
justify-content: center;
}
p {
 font-size: 60px;
 font-family: 'Exo', sans-serif;
 color: rgb(40, 40, 40);
 line-height: 1.25;
 text-align: center;
 position: absolute;
 left: 359.948px;
 top: 227.717px;
 width: 708px;
 height: 138px;
 z-index: 243;
}

.play-video {
  border-radius: 50%;
  position: absolute;
  left: 679px;
  top: 406px;
  width: 59px;
  height: 59px;
  z-index: 248;
}

.play-video:hover {
background: rgba(73, 71, 71, 0.384);
}

.btnTryNow
{
  border-radius: 3px;
  background-color: rgb(255, 109, 109);
  position: absolute;
  left:623px;
  top: 504px;
  width: 190px;
  height: 50px;
  z-index: 245;
}

.btnHover:hover
{
  background-color: rgb(187, 30, 56);
}
.try_now {
  font-size: 16px;
  font-family: "Exo";
  color: rgb(255, 255, 255);
  text-transform: uppercase;
  line-height: 3.3;
  text-align: center;
  z-index: 246;
}
.no_need_to_add_cards_details {
  font-size: 14px;
  font-family: "Exo";
  color: rgba(40, 40, 40, 0.6);
  line-height: 5.357;
  text-align: center;
  position: absolute;
  left: 44.5%;
  top:554px;
  width: 203px;
  height: 11px;
  z-index: 244;
}
::placeholder {color: white;}

.trynow {
 width: 100%;
 height: 469px;
 background-color: rgb(50, 57, 105);
 background-size: 100%;
}

.NEW_FEATURES {
  font-size: 16px;
  font-family: "Exo";
  color: rgb(255, 109, 109);
  line-height: 3.125;
  text-align: center;
  position: relative;
  left: 45.71%;
  top: 95px;
  width: 135.554px;
  height: 10.938px;
  z-index: 146;
}

.Over_1000_designers_are_using {
  position: center;
  font-size: 40px;
  font-family: "Exo";
  color: rgb(255, 255, 255);
  line-height: 1.25;
  text-align: center;
  position: relative;
  left: 28.56%;
  top: 135px;
  width: 595.929px;
  height: 36.978px;
  z-index: 145;
}

.Over_1000_designers_are_using p{
  text-align: center;
  position: fixed;
}

.form {
  position: relative;
  display: flex;
  justify-content: center;
  max-width: 100%;
}

.forms {
  height: 52px;
  width: 263px;
  position: relative;
  top: 225px;
  margin-right: 43px;
  border-width: 1px;
  border-color: rgb(255, 255, 255);
  border-style: solid;
  border-radius: 3px;
  background-color: rgba(255, 255, 255, 0.2);
  opacity: 0.502;

}
.submit  {
  height: 52px;
  width: 263px;
  position: relative;
  top: 225px;
  margin-right: 43px;
  border-radius: 3px;
  background-color: rgb(255, 109, 109);
  box-shadow: 0px 3px 3px 0px rgba(14, 15, 15, 0.25);
  z-index: 141;

  font-size: 20px;
  font-family: "Exo";
  color: rgb(255, 253, 250);
}

.submit:hover {
  background-color: rgb(187, 30, 56);
}

.arrow
{
  opacity: 0;
  position: relative;
  left: 72%;
  top: 107px;
}
._30_days_free_trial_for_all_ {
  font-size: 16px;
  font-family: "Exo";
  color: rgb(246, 245, 243);
  left: 56.5%;
  top: 1040px;
  z-index: 300;
}
.anotation {
position: relative;
top: 40.4%;
font-size: 16px;
font-family: "Exo";
color: rgba(246, 245, 243, 0.6);
line-height: 4.688;
z-index: 139;
}

.browser {
  height: 332px;
}
.list  {
  width: 975px;
  display: flex;
  position: relative;
  top: 95px;
  justify-content: space-around;
}
ul {
  font-size: 22px;
  font-family: "Lato";
  color: rgb(33, 33, 38);
  line-height: 1.25;
  font-family: "Lato";
  z-index: 114;
  list-style: none;
}

li {
  font-size: 14px;
  font-family: "Exo";
  color: rgba(40, 40, 40, 0.561);
  padding-top: 10px;
  line-height: 1.857;
  text-align: left;
  z-index: 92;
}

.Rounded_Rectangle {
  border-width: 1px;
  border-color: rgb(78, 78, 94);
  border-style: solid;
  border-radius: 3px;
  background-color: rgba(141, 141, 141, 0.2);
  opacity: 0.4;
  position: absolute;
  left: 780px;
  top: 40px;

  width: 261px;
  height: 47px;
  z-index: 104;
}
.send {
  width: 47px;
  height: 47px;
  background-color: rgb(255, 109, 109);
  box-shadow: 0px 3px 3px 0px rgba(14, 15, 15, 0.25);
  z-index: 106;
  position: relative;
  left: 207px;
  top: 11px;
  margin-left: 20px;
  margin-top: 2px;
}
.hover:hover {
  background-color: rgb(187, 30, 56);
}

.plane {
  position: relative;
  left: 15px;
  top: 6px;
  transform: rotate(-45deg);
}
.fade-enter-active
      {
       animation: fade-in .5s;
      }

      .fade-leave-active
      {
        animation: fade-in .5s reverse;
      }
      @keyframes fade-in
      {
        0%
        {
          transform: scale(0);
        }
        50%
        {
          transform: scale(1.5);
        }
        100%
        {
          transform: scale(1);
        }
      }
      .social-icons {
        width: 60px;
        margin-left: 90px;
        margin-top: 30px;
        position: absolute;
        display: flex;
        justify-content: center;
      }
      .color {
        color:  rgba(0, 0, 0, 0.4) !important;
        padding-left: 20px;
        padding-left: 24px;
      }
      .poligon {
        height: 0px;

        border-left: 60px solid rgb(255, 138, 138);
        border-radius:5px;
        position: absolute;
        left:42px;
        top: -10px;
        z-index: 288;
      }
  #empty, #lessthen, #error {
    background-color: green;
  top: 50%;
  left: 0;
  opacity: 0;
}
 #error {
  background-color: rgb(187, 30, 56);
  top: 50%;
  left: 0;
  opacity: 0;
}
#warning {
  background-color: orange;
  top: 50%;
  left: 0;
  opacity: 0;
}
.grow {
color: white;
font-size: 20px;
}
@media screen and (max-width: 576px) {
  .box {
    height: 260px;
    margin-left: 9%;
     width: 500px;
  }
  .header {
    width: 550px;
  }
  .form {
  display: flex;
  justify-content: center;
  flex-direction:column;
}
._30_days_free_trial_for_all_, .arrow {
  display: none
}
  .trynow {
    width: 550px;
  }
  .There_is_no_other_platforms_for_you_as_like {
    width: 550px;
    left: -3%;
    font-size: 50px;
  }
  .text{
    width: 100%;
  }
  .btnTryNow {
    left: 28%;
  }

  .play-video {
    margin-top: 3%;
    left: 42%;
  }
  .no_need_to_add_cards_details {
    font-size: 14px;
    top: 65%;
    left: 22%;

  }
  .NEW_FEATURES {
    width: 555px;
    font-size: 50px;
    line-height: 1;
    left: 0%;
  }
  .Over_1000_designers_are_using {
    left: 0%;
    font-size: 38px;
  }
  .list {
    margin-left: 10%;
     display: flex;
     justify-content: center;
     flex-direction:column;
  }
  .Rounded_Rectangle {
    left: 0%;
    top: 90%;
  }
  .arrow {
    opacity: 0;
  }
}

@media screen and (max-width:767px) {
  .form {
    display: flex;
    justify-content: center;
    flex-direction:column;
  }
  .box {
    height: 260px;
    margin-left: 9%;
     width: 500px;
  }
  .arrow {
    opacity: 0;
  }
  ._30_days_free_trial_for_all_, .arrow {
  display: none
}
}
@media screen and (max-width:1200px) {
  ._30_days_free_trial_for_all_, .arrow {
    opacity: 0;
  }
  .box {
    height: 260px;
    margin-left: 9%;
     width: 500px;
  }
}
@media screen and (min-width:1200px) {
  .arrow {
    opacity: 1;
  }
  .box {
    height: 260px;
    margin-left: 9%;
     width: 500px;
  }

  .hover:hover {
  background-color: rgb(187, 30, 56);
  }
}
</style>
