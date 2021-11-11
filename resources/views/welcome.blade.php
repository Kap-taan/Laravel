@extends('layouts.layout')

@section('content')


<div class="main">
  <h2>Your one stop for all the</h2>
  <h1 class="special"> Note Making Needs!</h1>
  <p class="p">We are team of talented Students</p>
  <form id="client">
    <input type="hidden" value={{ $user }} name="count">
    <input type="hidden" value={{ $topics }} name="countT">
  </form>
</div>
<div class="features">
  <div class="feature">
    <img src="/img/easy-to-use.png">
    <h2>Ease of Access</h2>
    <p>You can able to access the Notes from multiple devices</p>
  </div>
  <div class="feature">
    <img src="./img/friends.png">
    <h2>User Friendly</h2>
    <p>The Interface is super easy to understand and use</p>
  </div>
  <div class="feature">
    <img src="./img/share.png">
    <h2>Sharing of Notes</h2>
    <p>You can Share your notes with your Friend when he is in need</p>
  </div>
</div>

<div class="chart">
  <canvas id="myChart"></canvas>
</div>

<!-- About Us -->

<div class="about">
  <h2 class="about_heading">Purpose</h2>
  <p class="about_info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, repellendus!</p>
  <div class="about_main">
    <div class="about_first">
      <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt asperiores natus beatae officiis omnis exercitationem provident nobis quos? Modi, eveniet!</h4>
      <ul>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem ipsum dolor sit amet.</li>
      </ul>
    </div>
    <div class="about_second">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus perspiciatis vel laborum porro dolorem vero ullam quam fugiat odit et.</p>
      <h3>Personalize Theme</h3>
      <div class="color-selector">
        <div class="color1"></div>
        <div class="color2"></div>
        <div class="color3"></div>
        <div class="color4"></div>
      </div>
      <p class="themeS">*Theme settings will be saved for your next visit</p>
    </div>
  </div>
</div>

<div class="nums">
    <div class="num_first">
        <h1 class="num_clients"></h1>
        <h4>Happy Clients</h4>
    </div>
    <!-- <div class="num_second">
        <h1 class="num_chapters"></h1>
        <h4>Chapters</h4>
    </div> -->
    <div class="num_third">
        <h1 class="num_topics"></h1>
        <h4>Topics</h4>
    </div>
</div>

<div class="reviews">
    <h2 class="review_heading">Reviews</h2>
    <div class="review">
        <img src="" class="reviewImg" />
        <h3 class="name"></h3>
        <h5 class="profession"></h5>
        <p class="revieew"></p>
        <button class="btn">></button>
    </div>
</div>

    

    <!-- Prices -->

<div class="prices">
    <h2 class="pricing_heading">Pricing</h2>
    <p class="pricing_info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque explicabo voluptatem commodi quia dolor aspernatur. Asperiores quod rem consequuntur eaque.</p>
    <div class="price">
        <div class="pricing">
          <h4 class="price_heading">Individual</h4>
          <h3 class="price_price"><span class="price_special"><sup>$</sup>0</span><sub>/year</sub></h3>
          <div class="pricing_details">
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <button class="subscribe"><a href="/register">Subscribe Now</a></button>
        </div>
        <div class="pricing">
            <h4 class="price_heading">Institute</h4>
            <h3 class="price_price"><span class="price_special"><sup>$</sup>0</span><sub>/year</sub></h3>
            <div class="pricing_details">
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <button class="subscribe"><a href="/register">Subscribe Now</a></button>
        </div>
    </div>
</div>

  <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-storage.js"></script>

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyDvQYwyB7sdvx3bwL4lxzUxtTozjO_Evcw",
      authDomain: "noteslaravel.firebaseapp.com",
      projectId: "noteslaravel",
      storageBucket: "noteslaravel.appspot.com",
      messagingSenderId: "852485384089",
      appId: "1:852485384089:web:de28dde97da5f18657d508"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    let  db = firebase.firestore();
    console.log(db);
  </script>

<script src="{{asset('./scripts/review.js')}}"></script>
<script src="{{asset('./scripts/color.js')}}"></script>
<script src="{{asset('./scripts/num.js')}}"></script>
<script src="{{asset('./scripts/data.js')}}"></script>


@endsection