
<style>
    @font-face {
        font-family: 'IRSans';
        font-style: normal;
        font-weight: normal;
        src: url('/fonts/iransanc/IRANSansWeb.eot');
        src: url('/fonts/iransanc/IRANSansWeb.eot?#iefix') format('embedded-opentype'),  /* IE6-8 */
        url('/fonts/iransanc/IRANSansWeb.woff2') format('woff2'),  /* FF39+,Chrome36+, Opera24+*/
        url('/fonts/iransanc/IRANSansWeb.woff') format('woff'),  /* FF3.6+, IE9, Chrome6+, Saf5.1+*/
        url('/fonts/iransanc/IRANSansWeb.ttf') format('truetype');
    }
    @font-face {
        font-family: 'Nastaliq';
        font-style: normal;
        font-weight: normal;
        src: url('/fonts/nastalig/dw-IranNastaliq.eot');
        src: url('/fonts/nastalig/dw-IranNastaliq.eot?#iefix') format('embedded-opentype'),  /* IE6-8 */
        url('/fonts/nastalig/dw-IranNastaliq.woff2') format('woff2'),  /* FF39+,Chrome36+, Opera24+*/
        url('/fonts/nastalig/dw-IranNastaliq.woff') format('woff'),  /* FF3.6+, IE9, Chrome6+, Saf5.1+*/
        url('/fonts/nastalig/dw-IranNastaliq.ttf') format('truetype');
    }
    @font-face {
        font-family: 'shekateNastaliq';
        font-style: normal;
        font-weight: normal;
        src: url('/fonts/nastalig/Shekasteh V2.001.eot');
        src: url('/fonts/nastalig/Shekasteh V2.001.eot?#iefix') format('embedded-opentype'),  /* IE6-8 */
        url('/fonts/nastalig/Shekasteh V2.001.woff2') format('woff2'),  /* FF39+,Chrome36+, Opera24+*/
        url('/fonts/nastalig/Shekasteh V2.001.woff') format('woff'),  /* FF3.6+, IE9, Chrome6+, Saf5.1+*/
        url('/fonts/nastalig/Shekasteh V2.001.ttf') format('truetype');
    }
    @font-face{
        font-family:'vazir';
        src:url('/fonts/vazir/dw-Vazir.eot?#') format('eot'),
        url('/fonts/vazir/dw-Vazir.woff') format('woff'),
        url('/fonts/vazir/dw-Vazir.woff2') format('woff2'),
        url('/fonts/vazir/dw-Vazir.ttf') format('truetype')
    }
    body {
        direction: rtl;
       /* background: #310404;*/
        font-family: IRsans;
      }

      .container {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 0;
        background-image: url("https://visitmashhad.com/wp-content/uploads/2022/05/3.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        /*  background: -webkit-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.7));
        background: -moz-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.7));
        background: -ms-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.7));
        background: radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.7));  */
      }
      .content {

        position: absolute;
        width: 100%;
        height: 100%;
        left: 0px;
        top: 0px;
        z-index: 1000;
      }
      .container h2 {
        position: absolute;
        top: 50%;
        line-height: 100px;
        height: 100px;
        margin-top: -50px;
        font-size: 100px;
        width: 100%;
        text-align: center;
        color: transparent;
        animation: blurFadeInOut 3s ease-in backwards;
      }
      {{--  .container h2.frame-1 {
        animation-delay: 0s;
      }
      .container h2.frame-2 {
        animation-delay: 2.5s;
      }
      .container h2.frame-3 {
        animation-delay: 5s;
      }
      .container h2.frame-4 {
        font-size: 200px;
        animation-delay: 7.5s;
      }  --}}
      .container h2.frame-5 {
        animation: none;
        color: transparent;
        text-shadow: 0px 0px 1px #fff;
        font-family: shekateNastaliq;
      }
      .container h2.frame-5 span {
        animation: blurFadeIn 3s ease-in 0s backwards;
        color: transparent;
        text-shadow: 0px 0px 1px #fff;
      }
      .container h2.frame-5 span:nth-child(2) {
        animation-delay: 1s;
      }
      .container h2.frame-5 span:nth-child(3) {
        animation-delay: 2s;
      }

      @keyframes blurFadeInOut{
        0%{
          opacity: 0;
          text-shadow: 0px 0px 40px #fff;
          transform: scale(0.9);
        }
        20%,75%{
          opacity: 1;
          text-shadow: 0px 0px 1px #fff;
          transform: scale(1);
        }
        100%{
          opacity: 0;
          text-shadow: 0px 0px 50px #fff;
          transform: scale(0);
        }
      }
      @keyframes blurFadeIn{
        0%{
          opacity: 0;
          text-shadow: 0px 0px 40px #fff;
          transform: scale(1.3);
        }
        50%{
          opacity: 0.5;
          text-shadow: 0px 0px 10px #fff;
          transform: scale(1.1);
        }
        100%{
          opacity: 1;
          text-shadow: 0px 0px 1px #fff;
          transform: scale(1);
        }
      }
      @keyframes fadeInBack{
        0%{
          opacity: 0;
          transform: scale(0);
        }
        50%{
          opacity: 0.4;
          transform: scale(2);
        }
        100%{
          opacity: 0.2;
          transform: scale(5);
        }
      }
</style>

<html>
    <head>
        <meta http-equiv="refresh" content="5;url=/main" />
    </head>
    <body>
<div class="container">
    <div class="content">
      {{--  <h2 class="frame-1">This is CSS3</h2>
      <h2 class="frame-2">No Javascript, No Flash</h2>
      <h2 class="frame-3">You can stop using pointless amounts of script</h2>
      <h2 class="frame-4">Now!</h2>  --}}
      <h2 class="frame-5">
        <span>السلام علیک</span>
        <span>یا</span>
        <span style="color:red;">ابا عبدالله...</span>
      </h2>
    </div>
</body>
</html>



