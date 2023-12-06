<footer>
  <div class="container">
    <div class="logo">
      <a href=""><img src="images/logo-grabfood-white.svg" alt=""></a>
      <div class="time" style="padding-left:50%;">
      </div>
    </div>
    <div class="link">
      <div class="col">
        <a href="">Về của hàng của chúng tôi</a>
        <a href="https://www.thegioididong.com/">Blogs</a>
      </div>
      <div class="col">
        <a href="">Sữa chữa</a>
        <a href="">Thu  củ đổi mới</a>
      </div>
      <div class="col">
        <a href="">Trung tâm hỗ trợ</a>
        <a href="">Câu hỏi thường gặp</a>
      </div>
      <div class="icon">
        <a href=""><i class="fab fa-facebook-square"></i></a>
        <a href=""><i class="fab fa-instagram-square"></i></a>
        <a href=""><i class="fab fa-twitter-square"></i></a>
      </div>
    </div>
    <div class="bottom">
      <a href=""><img src="images/icon/logo-playstore.svg" alt=""></a>
      <a href=""><img src="images/icon/logo-appstore.svg" alt=""></a>
      

    </div>
  </div>
</footer>
<style>
  footer {
    background-color: #00B14C;
    width: 100%;
    margin: 0px auto;
    margin-top: 1rem;
  }

  footer .container {
    width: 90%;
    margin: 0px auto;
    display: flex;
    flex-flow: column;
  }

  footer .container .logo {
    padding: 20px 0;
    border-bottom: 1px solid white;
    display: flex;
    flex-wrap: wrap-reverse;
  }
  footer .container .logo .time{
    color: white;
    font-family: "Bebas Neue", cursive;
  }

  footer .container .link {
    display: grid;
    grid-template-columns: auto auto auto auto;
    padding: 30px 0;
    border-bottom: 1px solid white;
  }

  footer .container .link .col a:hover {
    cursor: pointer;
    color: rgb(224, 247, 222);
  }

  footer .container .link .col a {
    color: white;
    font-weight: bold;
    text-decoration: none;
    padding: 10px 0;
    font-family: "Encode Sans SC", sans-serif;
  }

  footer .container .link .icon a {
    padding: 10px 10px;
    color: white;
    font-weight: bold;
    text-decoration: none;
  }

  footer .container .link .icon a i {
    font-size: 40px;
  }

  footer .container .link .col {
    display: flex;
    flex-flow: column;
  }

  footer .container .link .icon {
    display: flex;
  }

  footer .container .bottom {
    padding: 20px 0;
  }
</style>