<!DOCTYPE html>
<body>
  <head>
    <meta charset="utf-8">
    <title>Бобёр чертовски хорошо звучит</title>
    <style>
    /* [Master Stylesheet v-1.0.0] */
    /* :: :: 1.0 Import Fonts */
    @import url(../css/bootstrap.min.css);
    @import url(../css/owl.carousel.css);
    @import url(../css/animate.css);
    @import url(../css/magnific-popup.css);
    @import url(../css/jquery-ui.min.css);
    @import url(../css/nice-select.css);
    @import url(../css/font-awesome.min.css);
    @font-face {
      font-family: 'helveticaneuebold';
      src: url("../fonts/helvetica_neu_bold-webfont.woff2") format("woff2"), url("../fonts/helvetica_neu_bold-webfont.woff") format("woff");
      font-weight: normal;
      font-style: normal; }
    @font-face {
      font-family: 'helveticaneuemedium';
      src: url("../fonts/helveticaneue_medium-webfont.woff2") format("woff2"), url("../fonts/helveticaneue_medium-webfont.woff") format("woff");
      font-weight: normal;
      font-style: normal; }
    /* :: 2.0 Import All CSS */
    /* :: 3.0 Base CSS */
    * {
      margin: 0;
      padding: 0; }

    body {
      font-family: "helveticaneuemedium";
      font-size: 16px; }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: #242424;
      line-height: 1.3;
      font-weight: 400; }

    p {
      color: #6d6d6d;
      font-size: 16px;
      line-height: 1.9;
      font-weight: 400; }

    a {
      -webkit-transition: all 500ms ease 0s;
      transition: all 500ms ease 0s;
      text-decoration: none;
      outline: 0 solid transparent;
      color: #131212;
      font-weight: 400;
      font-size: 12px; }
      a:hover, a:focus {
        -webkit-transition: all 500ms ease 0s;
        transition: all 500ms ease 0s;
        text-decoration: none;
        outline: 0 solid transparent;
        color: #131212;
        font-weight: 400;
        font-size: 12px; }

    ul,
    ol {
      margin: 0; }
      ul li,
      ol li {
        list-style: none; }

    img {
      height: auto;
      max-width: 205px; }

    /* Spacing */
    .mt-15 {
      margin-top: 15px !important; }

    .mt-30 {
      margin-top: 30px !important; }

    .mt-50 {
      margin-top: 50px !important; }

    .mt-70 {
      margin-top: 70px !important; }

    .mt-100 {
      margin-top: 100px !important; }

    .mb-15 {
      margin-bottom: 15px !important; }

    .mb-30 {
      margin-bottom: 30px !important; }

    .mb-50 {
      margin-bottom: 50px !important; }

    .mb-70 {
      margin-bottom: 70px !important; }

    .mb-100 {
      margin-bottom: 100px !important; }

    .ml-15 {
      margin-left: 15px !important; }

    .ml-30 {
      margin-left: 30px !important; }

    .ml-50 {
      margin-left: 50px !important; }

    .mr-15 {
      margin-right: 15px !important; }

    .mr-30 {
      margin-right: 30px !important; }

    .mr-50 {
      margin-right: 50px !important; }

    /* Height */
    .height-400 {
      height: 400px !important; }

    .height-500 {
      height: 500px !important; }

    .height-600 {
      height: 600px !important; }

    .height-700 {
      height: 700px !important; }

    .height-800 {
      height: 800px !important; }

    /* Section Padding */
    .section-padding-100 {
      padding-top: 100px;
      padding-bottom: 100px; }

    .section-padding-100-0 {
      padding-top: 100px;
      padding-bottom: 0; }

    .section-padding-0-100 {
      padding-top: 0;
      padding-bottom: 100px; }

    /* Section Heading */
    .section-heading {
      margin-bottom: 50px;
      position: relative;
      z-index: 1; }
      .section-heading h2 {
        font-size: 30px;
        margin-bottom: 0;
        text-transform: capitalize;
        font-weight: 600; }
      .section-heading.text-left {
        text-align: left !important; }

    /* Miscellaneous */
    .bg-img {
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat; }

    .bg-white {
      background-color: #ffffff !important; }

    .bg-dark {
      background-color: #000000 !important; }

    .bg-transparent {
      background-color: transparent !important; }

    .font-bold {
      font-weight: 700; }

    .font-light {
      font-weight: 300; }

    .bg-overlay,
    .bg-overlay-white {
      position: relative;
      z-index: 2;
      background-position: center center;
      background-size: cover; }
      .bg-overlay:hover,
      .bg-overlay-white:hover {
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: ""; }

    .bg-overlay:hover {
      background-color: rgba(0, 0, 0, 0.5); }

    .bg-overlay-white:hover {
      background-color: rgba(255, 255, 255, 0.9); }

    .mfp-image-holder .mfp-close,
    .mfp-iframe-holder .mfp-close {
      color: #FFF;
      right: 0;
      padding-right: 0;
      width: 30px;
      height: 30px;
      background-color: #fbb710;
      line-height: 30px;
      text-align: center;
      position: absolute;
      top: 40px;
      right: -30px; }
      @media only screen and (max-width: 767px) {
        .mfp-image-holder .mfp-close,
        .mfp-iframe-holder .mfp-close {
          right: 0; } }

    .navbar-toggler {
      background-color: #fbb710;
      border-radius: 0;
      margin-bottom: 15px; }
      .navbar-toggler i {
        font-size: 12px;
        color: #fff; }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .navbar {
        display: block; } }
    @media only screen and (max-width: 767px) {
      .navbar {
        display: block; } }

    .mobile-nav {
      position: fixed;
      width: 100%;
      height: 70px;
      background-color: #fff;
      z-index: 3000;
      top: 0;
      left: 0;
      right: 0;
      padding: 0.5em 2em;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -ms-grid-row-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.15);
      display: none; }
      @media only screen and (max-width: 767px) {
        .mobile-nav {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex; } }
      .mobile-nav .amado-navbar-brand {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 70px;
        flex: 0 0 70px;
        max-width: 70px; }
        .mobile-nav .amado-navbar-brand a {
          display: block;
          max-width: 70px; }
      .mobile-nav .amado-navbar-toggler {
        cursor: pointer; }
        .mobile-nav .amado-navbar-toggler span {
          width: 28px;
          height: 3px;
          background-color: #fbb710;
          display: block;
          margin-bottom: 5px;
          border-radius: 2px; }
          .mobile-nav .amado-navbar-toggler span:last-child {
            margin-bottom: 0; }

    /* ScrollUp */
    #scrollUp {
      background-color: #fbb710;
      border-radius: 0;
      bottom: 60px;
      box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.3);
      color: #ffffff;
      font-size: 24px;
      height: 40px;
      line-height: 40px;
      right: 60px;
      text-align: center;
      width: 40px;
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms; }
      #scrollUp:hover {
        background-color: #131212; }
      @media only screen and (max-width: 767px) {
        #scrollUp {
          bottom: 30px;
          right: 30px; } }

    /* Essence Button */
    .amado-btn {
      display: inline-block;
      min-width: 160px;
      height: 55px;
      color: #ffffff;
      border: none;
      border-radius: 0;
      padding: 0 7px;
      font-size: 18px;
      line-height: 56px;
      background-color: #fbb710;
      font-weight: 400; }
      .amado-btn.active, .amado-btn:hover, .amado-btn:focus {
        font-size: 18px;
        color: #ffffff;
        background-color: #131212; }

    /* :: 4.0 Search Wrapper Area CSS */
    .search-wrapper {
      position: fixed;
      z-index: 1;
      width: 100%;
      height: 260px;
      z-index: 5000;
      top: -350px;
      left: 0;
      background-color: #f5f7fa;
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms; }
      .search-wrapper .search-content form {
        position: relative;
        z-index: 1;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.075); }
        .search-wrapper .search-content form input {
          width: 100%;
          height: 60px;
          border: none;
          padding-left: 50px;
          font-size: 14px;
          color: #6b6b6b; }
        .search-wrapper .search-content form button {
          position: absolute;
          top: 0;
          left: 0;
          border: none;
          width: 50px;
          height: 60px;
          z-index: 10;
          cursor: pointer;
          background-color: transparent;
          text-align: center; }
      .search-wrapper .search-close {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        width: 40px;
        height: 40px;
        position: absolute;
        top: 0;
        right: 0;
        background-color: red;
        text-align: center;
        color: #fff;
        line-height: 40px;
        font-size: 12px;
        cursor: pointer;
        background-color: #fbb710; }
        .search-wrapper .search-close:hover {
          background-color: #131212; }

    /* :: 5.0 Welcome Area CSS */
    .main-content-wrapper {
      position: relative;
      z-index: 1;
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap; }
      @media only screen and (max-width: 767px) {
        .main-content-wrapper {
          margin-top: 70px;
          z-index: 100; } }
      .main-content-wrapper .header-area {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        position: relative;
        z-index: 1;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 320px;
        flex: 0 0 320px;
        width: 320px;
        max-width: 320px;
        background-color: #fff;
        padding: 60px 75px; }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .main-content-wrapper .header-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 280px;
            flex: 0 0 280px;
            width: 280px;
            max-width: 280px;
            padding: 50px; } }
        @media only screen and (max-width: 767px) {
          .main-content-wrapper .header-area {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 320px;
            flex: 0 0 320px;
            width: 320px;
            max-width: 320px;
            position: fixed;
            z-index: 4000;
            top: 0;
            left: -350px;
            height: 100%;
            overflow-x: hidden;
            overflow-y: scroll;
            display: block; } }
        .main-content-wrapper .header-area.bp-xs-on {
          left: 0; }
        .main-content-wrapper .header-area .nav-close {
          -webkit-transition-duration: 500ms;
          transition-duration: 500ms;
          width: 40px;
          height: 40px;
          position: absolute;
          top: 0;
          right: 15px;
          background-color: red;
          text-align: center;
          color: #fff;
          line-height: 40px;
          font-size: 12px;
          cursor: pointer;
          background-color: #fbb710;
          display: none; }
          @media only screen and (max-width: 767px) {
            .main-content-wrapper .header-area .nav-close {
              display: block; } }
          .main-content-wrapper .header-area .nav-close:hover {
            background-color: #131212; }
        .main-content-wrapper .header-area .logo {
          margin-bottom: 100px;
          display: block; }
        .main-content-wrapper .header-area .amado-nav li a {
          font-size: 14px;
          text-transform: uppercase;
          position: relative;
          z-index: 1;
          padding: 20px 0;
          display: block;
          line-height: 0.9;
          color: #131212;
          font-weight: normal; }
          .main-content-wrapper .header-area .amado-nav li a::after {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            width: 30px;
            height: 3px;
            position: absolute;
            top: 50%;
            margin-top: -1.5px;
            left: -150px;
            background-color: #fbb710;
            z-index: 10;
            content: ''; }
          .main-content-wrapper .header-area .amado-nav li a:hover, .main-content-wrapper .header-area .amado-nav li a:focus {
            color: #fbb710; }
        .main-content-wrapper .header-area .amado-nav li:hover a::after, .main-content-wrapper .header-area .amado-nav li:focus a::after {
          left: -75px; }
          @media only screen and (min-width: 768px) and (max-width: 991px) {
            .main-content-wrapper .header-area .amado-nav li:hover a::after, .main-content-wrapper .header-area .amado-nav li:focus a::after {
              left: -50px; } }
        .main-content-wrapper .header-area .amado-nav li.active a::after {
          left: -75px; }
          @media only screen and (min-width: 768px) and (max-width: 991px) {
            .main-content-wrapper .header-area .amado-nav li.active a::after {
              left: -50px; } }
        .main-content-wrapper .header-area .amado-btn-group .amado-btn {
          width: 160px;
          display: block; }
        .main-content-wrapper .header-area .cart-fav-search a {
          display: block;
          text-transform: uppercase;
          font-size: 16px;
          padding: 15px 0;
          color: #131212;
          line-height: 1; }
          .main-content-wrapper .header-area .cart-fav-search a .search-nav {
            padding-bottom: 0; }
          .main-content-wrapper .header-area .cart-fav-search a span {
            color: #9e9e9e; }
          .main-content-wrapper .header-area .cart-fav-search a img {
            margin-right: 10px; }
          .main-content-wrapper .header-area .cart-fav-search a:hover, .main-content-wrapper .header-area .cart-fav-search a:focus {
            color: #fbb710; }
        .main-content-wrapper .header-area .social-info a {
          color: #b5b5b5;
          display: inline-block; }
          .main-content-wrapper .header-area .social-info a i {
            font-size: 18px; }
          .main-content-wrapper .header-area .social-info a:hover, .main-content-wrapper .header-area .social-info a:focus {
            color: #fbb710; }
        @media only screen and (max-width: 767px) {
          .main-content-wrapper .header-area .social-info {
            margin-bottom: 75px; } }
      .main-content-wrapper .products-catagories-area {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 320px);
        flex: 0 0 calc(100% - 320px);
        width: calc(100% - 320px);
        max-width: calc(100% - 320px); }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .main-content-wrapper .products-catagories-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 280px);
            flex: 0 0 calc(100% - 280px);
            width: calc(100% - 280px);
            max-width: calc(100% - 280px); } }
        @media only screen and (max-width: 767px) {
          .main-content-wrapper .products-catagories-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%; } }
      .main-content-wrapper .shop_sidebar_area {
        position: relative;
        z-index: 1;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 230px;
        flex: 0 0 230px;
        width: 230px;
        max-width: 230px;
        background-color: #f5f7fa;
        padding: 100px 40px; }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .main-content-wrapper .shop_sidebar_area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 180px;
            flex: 0 0 180px;
            width: 180px;
            max-width: 180px;
            padding: 100px 15px; } }
        @media only screen and (max-width: 767px) {
          .main-content-wrapper .shop_sidebar_area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; } }
      .main-content-wrapper .amado_product_area {
        position: relative;
        z-index: 1;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(95% - 550px);
        flex: 0 0 calc(95% - 550px);
        width: calc(95% - 550px);
        max-width: calc(95% - 550px); }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .main-content-wrapper .amado_product_area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 550px);
            flex: 0 0 calc(100% - 550px);
            width: calc(100% - 550px);
            max-width: calc(100% - 550px); } }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .main-content-wrapper .amado_product_area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 460px);
            flex: 0 0 calc(100% - 460px);
            width: calc(100% - 460px);
            max-width: calc(100% - 460px); } }
        @media only screen and (max-width: 767px) {
          .main-content-wrapper .amado_product_area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            padding-top: 50px; } }
      .main-content-wrapper .cart-table-area {
        position: relative;
        z-index: 1;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(95% - 320px);
        flex: 0 0 calc(95% - 320px);
        width: calc(95% - 320px);
        max-width: calc(95% - 320px); }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .main-content-wrapper .cart-table-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 320px);
            flex: 0 0 calc(100% - 320px);
            width: calc(100% - 320px);
            max-width: calc(100% - 320px); } }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .main-content-wrapper .cart-table-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 280px);
            flex: 0 0 calc(100% - 280px);
            width: calc(100% - 280px);
            max-width: calc(100% - 280px); } }
        @media only screen and (max-width: 767px) {
          .main-content-wrapper .cart-table-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
            padding-top: 0; } }
        .main-content-wrapper .cart-table-area .cart-title h2 {
          font-size: 30px;
          margin-bottom: 30px;
          color: #242424; }
        .main-content-wrapper .cart-table-area table thead {
          width: 100%;
          display: block; }
          .main-content-wrapper .cart-table-area table thead tr {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            height: 40px;
            background-color: #f5f7fa; }
            .main-content-wrapper .cart-table-area table thead tr th {
              border-top: none;
              border-bottom: none;
              -webkit-box-flex: 0;
              -ms-flex: 0 0 25%;
              flex: 0 0 25%;
              width: 25%;
              max-width: 25%;
              font-size: 12px;
              color: #242424;
              text-transform: capitalize;
              font-weight: 400; }
        .main-content-wrapper .cart-table-area table tbody {
          width: 100%;
          display: block; }
          .main-content-wrapper .cart-table-area table tbody tr {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            width: 100%; }
            .main-content-wrapper .cart-table-area table tbody tr td {
              border: none;
              -webkit-box-flex: 0;
              -ms-flex: 0 0 25%;
              flex: 0 0 25%;
              width: 25%;
              max-width: 25%; }
              .main-content-wrapper .cart-table-area table tbody tr td h5 {
                font-size: 16px;
                color: #252525; }
                @media only screen and (min-width: 992px) and (max-width: 1199px) {
                  .main-content-wrapper .cart-table-area table tbody tr td h5 {
                    font-size: 14px; } }
                @media only screen and (min-width: 768px) and (max-width: 991px) {
                  .main-content-wrapper .cart-table-area table tbody tr td h5 {
                    font-size: 14px; } }
                @media only screen and (max-width: 767px) {
                  .main-content-wrapper .cart-table-area table tbody tr td h5 {
                    font-size: 12px; } }
              .main-content-wrapper .cart-table-area table tbody tr td .qty-btn p {
                margin-bottom: 0;
                line-height: 40px;
                height: 40px;
                padding: 0 15px;
                background-color: #f5f7fa;
                color: #242424;
                font-size: 14px; }
                @media only screen and (min-width: 768px) and (max-width: 991px) {
                  .main-content-wrapper .cart-table-area table tbody tr td .qty-btn p {
                    padding: 0 10px; } }
              .main-content-wrapper .cart-table-area table tbody tr td .qty-btn .quantity {
                position: relative;
                z-index: 1; }
                .main-content-wrapper .cart-table-area table tbody tr td .qty-btn .quantity input {
                  text-align: center;
                  background-color: #f5f7fa;
                  height: 40px;
                  width: 60px;
                  border: none;
                  -moz-appearance: textfield;
                  -webkit-appearance: textfield;
                  appearance: textfield;
                  color: #242424;
                  font-size: 14px; }
                  @media only screen and (min-width: 768px) and (max-width: 991px) {
                    .main-content-wrapper .cart-table-area table tbody tr td .qty-btn .quantity input {
                      width: 45px; } }
                .main-content-wrapper .cart-table-area table tbody tr td .qty-btn .quantity .qty-plus {
                  position: absolute;
                  right: 0;
                  top: 0;
                  line-height: 40px;
                  width: 20px;
                  text-align: center;
                  height: 40px;
                  cursor: pointer;
                  color: #242424;
                  font-size: 10px; }
                .main-content-wrapper .cart-table-area table tbody tr td .qty-btn .quantity .qty-minus {
                  position: absolute;
                  top: 0;
                  right: 40px;
                  line-height: 40px;
                  width: 20px;
                  height: 40px;
                  text-align: center;
                  cursor: pointer;
                  color: #242424;
                  font-size: 10px; }
                  @media only screen and (min-width: 768px) and (max-width: 991px) {
                    .main-content-wrapper .cart-table-area table tbody tr td .qty-btn .quantity .qty-minus {
                      right: 30px; } }
        .main-content-wrapper .cart-table-area .cart-summary {
          background-color: #f5f7fa;
          margin-top: 118px;
          position: relative;
          z-index: 1;
          padding: 30px 20px; }
          .main-content-wrapper .cart-table-area .cart-summary h5 {
            font-size: 18px;
            margin-bottom: 0; }
          .main-content-wrapper .cart-table-area .cart-summary .summary-table {
            margin-top: 30px; }
            .main-content-wrapper .cart-table-area .cart-summary .summary-table li {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-pack: justify;
              -ms-flex-pack: justify;
              justify-content: space-between;
              margin-bottom: 30px;
              text-transform: capitalize; }
              .main-content-wrapper .cart-table-area .cart-summary .summary-table li span {
                color: #6b6b6b;
                font-size: 14px; }
          .main-content-wrapper .cart-table-area .cart-summary .payment-method label {
            font-size: 14px;
            color: #6b6b6b;
            font-weight: 400;
            margin-bottom: 15px; }
      .main-content-wrapper .single-product-area {
        position: relative;
        z-index: 1;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(95% - 320px);
        flex: 0 0 calc(95% - 320px);
        width: calc(95% - 320px);
        max-width: calc(95% - 320px); }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .main-content-wrapper .single-product-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 320px);
            flex: 0 0 calc(100% - 320px);
            width: calc(100% - 320px);
            max-width: calc(100% - 320px); } }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .main-content-wrapper .single-product-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 280px);
            flex: 0 0 calc(100% - 280px);
            width: calc(100% - 280px);
            max-width: calc(100% - 280px); } }
        @media only screen and (max-width: 767px) {
          .main-content-wrapper .single-product-area {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
            padding-top: 0; } }
        .main-content-wrapper .single-product-area .breadcrumb {
          background-color: transparent; }
          .main-content-wrapper .single-product-area .breadcrumb .breadcrumb-item {
            font-size: 14px;
            text-transform: uppercase; }
            .main-content-wrapper .single-product-area .breadcrumb .breadcrumb-item a {
              color: #242424;
              font-size: 14px;
              text-transform: uppercase; }
              .main-content-wrapper .single-product-area .breadcrumb .breadcrumb-item a:hover {
                color: #fbb710; }
          .main-content-wrapper .single-product-area .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
            content: ">"; }
        .main-content-wrapper .single-product-area .single_product_thumb {
          position: relative;
          z-index: 1;
          margin-bottom: 170px; }
          .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators {
            margin: 0 7.5px;
            bottom: -165px; }
            @media only screen and (min-width: 992px) and (max-width: 1199px) {
              .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators {
                bottom: -105px; } }
            @media only screen and (min-width: 768px) and (max-width: 991px) {
              .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators {
                bottom: -105px; } }
            @media only screen and (max-width: 767px) {
              .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators {
                bottom: -95px; } }
            .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators li {
              -webkit-box-flex: 0;
              -ms-flex: 0 0 25%;
              flex: 0 0 25%;
              width: 25%;
              min-width: 25%;
              height: 140px;
              background-position: center center;
              background-size: cover;
              border: 2px solid transparent;
              cursor: pointer; }
              @media only screen and (min-width: 992px) and (max-width: 1199px) {
                .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators li {
                  height: 80px; } }
              @media only screen and (min-width: 768px) and (max-width: 991px) {
                .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators li {
                  height: 80px; } }
              @media only screen and (max-width: 767px) {
                .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators li {
                  height: 70px; } }
              .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators li.active {
                border: 2px solid #fbb710; }
          .main-content-wrapper .single-product-area .single_product_thumb .carousel-item a {
            cursor: zoom-in; }
        .main-content-wrapper .single-product-area .single_product_desc {
          position: relative;
          z-index: 1; }
          .main-content-wrapper .single-product-area .single_product_desc .product-meta-data .line {
            width: 80px;
            height: 3px;
            background-color: #fbb710;
            margin-bottom: 15px;
            display: block; }
          .main-content-wrapper .single-product-area .single_product_desc .product-meta-data .product-price {
            font-size: 24px;
            font-weight: 400;
            color: #fbb710;
            line-height: 1;
            margin-bottom: 10px; }
          .main-content-wrapper .single-product-area .single_product_desc .product-meta-data a {
            display: block; }
            .main-content-wrapper .single-product-area .single_product_desc .product-meta-data a h6 {
              font-size: 30px;
              margin-bottom: 5px; }
              @media only screen and (min-width: 992px) and (max-width: 1199px) {
                .main-content-wrapper .single-product-area .single_product_desc .product-meta-data a h6 {
                  font-size: 20px; } }
          .main-content-wrapper .single-product-area .single_product_desc .product-meta-data .ratings-review .ratings i {
            font-size: 10px;
            color: #fbb710; }
          .main-content-wrapper .single-product-area .single_product_desc .product-meta-data .ratings-review .review a {
            display: inline-block;
            color: #6b6b6b;
            font-size: 14px; }
          .main-content-wrapper .single-product-area .single_product_desc .product-meta-data .avaibility {
            margin-bottom: 0;
            font-size: 12px;
            color: #6b6b6b;
            line-height: 1; }
            .main-content-wrapper .single-product-area .single_product_desc .product-meta-data .avaibility i {
              color: #20d34a;
              font-size: 12px; }
          .main-content-wrapper .single-product-area .single_product_desc .short_overview p {
            line-height: 2.1;
            color: #6b6b6b; }
          .main-content-wrapper .single-product-area .single_product_desc .cart p {
            margin-bottom: 0;
            line-height: 40px;
            height: 40px;
            padding: 0 15px;
            background-color: #f5f7fa; }
          .main-content-wrapper .single-product-area .single_product_desc .cart .quantity {
            position: relative;
            z-index: 1; }
            .main-content-wrapper .single-product-area .single_product_desc .cart .quantity input {
              text-align: center;
              background-color: #f5f7fa;
              height: 40px;
              width: 100px;
              border: none;
              -moz-appearance: textfield;
              -webkit-appearance: textfield;
              appearance: textfield;
              color: #959595; }
            .main-content-wrapper .single-product-area .single_product_desc .cart .quantity .qty-plus {
              position: absolute;
              right: 0;
              top: 0;
              line-height: 30px;
              width: 30px;
              text-align: center;
              height: 20px;
              cursor: pointer;
              color: #959595; }
            .main-content-wrapper .single-product-area .single_product_desc .cart .quantity .qty-minus {
              position: absolute;
              top: 21px;
              right: 0;
              line-height: 1;
              width: 30px;
              height: 25px;
              text-align: center;
              cursor: pointer;
              color: #959595; }
          .main-content-wrapper .single-product-area .single_product_desc .cart .amado-btn {
            width: 310px;
            height: 80px;
            line-height: 80px; }
            @media only screen and (min-width: 992px) and (max-width: 1199px) {
              .main-content-wrapper .single-product-area .single_product_desc .cart .amado-btn {
                width: 250px; } }
            @media only screen and (max-width: 767px) {
              .main-content-wrapper .single-product-area .single_product_desc .cart .amado-btn {
                width: 280px; } }

    .search-wrapper-on .search-wrapper {
      top: 0; }
    .search-wrapper-on .main-content-wrapper {
      margin-top: 260px; }

    .single-products-catagory {
      position: relative;
      z-index: 1;
      width: 33.33333%;
      top: 0; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-products-catagory {
          width: 50%; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-products-catagory {
          width: 100%; } }
      @media only screen and (max-width: 767px) {
        .single-products-catagory {
          width: 100%; } }
      @media only screen and (min-width: 576px) and (max-width: 767px) {
        .single-products-catagory {
          width: 50%; } }
      .single-products-catagory a {
        display: block;
        width: 100%;
        height: 100%;
        position: relative;
        z-index: 10; }
        .single-products-catagory a::after {
          -webkit-transition-duration: 250ms;
          transition-duration: 250ms;
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          content: '';
          background-color: rgba(60, 60, 60, 0.7);
          z-index: 1;
          opacity: 0;
          visibility: visible; }
        .single-products-catagory a img {
          width: 100%; }
      .single-products-catagory .hover-content {
        position: absolute;
        top: 40px;
        left: 40px;
        z-index: 10; }
        @media only screen and (max-width: 767px) {
          .single-products-catagory .hover-content {
            top: 30px;
            left: 30px; } }
        .single-products-catagory .hover-content .line {
          width: 80px;
          height: 3px;
          background-color: #fbb710;
          display: block;
          margin-bottom: 15px; }
        .single-products-catagory .hover-content p {
          font-size: 16px;
          color: #6d6d6d;
          line-height: 1;
          margin-bottom: 5px;
          -webkit-transition-duration: 250ms;
          transition-duration: 250ms; }
        .single-products-catagory .hover-content h4 {
          margin-bottom: 0;
          -webkit-transition-duration: 250ms;
          transition-duration: 250ms; }
      .single-products-catagory:hover a::after, .single-products-catagory:focus a::after {
        opacity: 1;
        visibility: visible; }
      .single-products-catagory:hover .hover-content p,
      .single-products-catagory:hover .hover-content h4, .single-products-catagory:focus .hover-content p,
      .single-products-catagory:focus .hover-content h4 {
        color: #fff; }

    /* :: 6.0 Newsletter Area CSS */
    .newsletter-area {
      position: relative;
      z-index: 1;
      background-color: #3c3c3c; }
      .newsletter-area .newsletter-text {
        position: relative;
        z-index: 1; }
        .newsletter-area .newsletter-text h2 {
          font-size: 36px;
          margin-bottom: 10px;
          color: #fff; }
          @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .newsletter-area .newsletter-text h2 {
              font-size: 30px; } }
          @media only screen and (max-width: 767px) {
            .newsletter-area .newsletter-text h2 {
              font-size: 30px; } }
          .newsletter-area .newsletter-text h2 span {
            color: #fbb710; }
        .newsletter-area .newsletter-text p {
          color: #b3b1b1;
          margin-bottom: 0; }
      .newsletter-area .newsletter-form form {
        position: relative;
        z-index: 1; }
        .newsletter-area .newsletter-form form input[type="email"] {
          width: 100%;
          height: 50px;
          background-color: #fff;
          color: #afafaf;
          font-size: 14px;
          font-style: italic;
          border: none;
          padding: 0 30px; }
        .newsletter-area .newsletter-form form input[type="submit"] {
          -webkit-transition-duration: 500ms;
          transition-duration: 500ms;
          height: 50px;
          background-color: #fbb710;
          color: #fff;
          font-size: 14px;
          padding: 0 30px;
          cursor: pointer;
          position: absolute;
          top: 0;
          right: 0;
          z-index: 10;
          border: none; }
          .newsletter-area .newsletter-form form input[type="submit"]:hover, .newsletter-area .newsletter-form form input[type="submit"]:focus {
            background-color: #fbb710;
            color: #fff; }

    /* :: 7.0 Popular Products Area CSS */
    .single-product-wrapper {
      position: relative;
      z-index: 1;
      margin-bottom: 50px;
      overflow: hidden;
      background-color: #ffffff; }
      .single-product-wrapper .product-img {
        position: relative;
        z-index: 1;
        overflow: hidden; }
        .single-product-wrapper .product-img img {
          width: 100%;
          -webkit-transition-duration: 500ms;
          transition-duration: 500ms; }
        .single-product-wrapper .product-img .hover-img {
          -webkit-transition-duration: 500ms;
          transition-duration: 500ms;
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          z-index: 10;
          opacity: 0;
          visibility: hidden; }
      .single-product-wrapper .product-description {
        position: relative;
        z-index: 1;
        margin-top: 25px; }
        .single-product-wrapper .product-description .product-meta-data .line {
          width: 80px;
          height: 3px;
          background-color: #fbb710;
          margin-bottom: 15px;
          display: block; }
        .single-product-wrapper .product-description .product-meta-data .product-price {
          line-height: 1;
          color: #fbb710;
          font-size: 24px;
          margin-bottom: 10px; }
        .single-product-wrapper .product-description .product-meta-data a {
          display: block; }
          .single-product-wrapper .product-description .product-meta-data a h6 {
            margin-bottom: 0; }
        .single-product-wrapper .product-description .ratings-cart .ratings i {
          font-size: 10px;
          color: #fbb710; }
        .single-product-wrapper .product-description .ratings-cart .cart {
          display: block; }
      .single-product-wrapper:hover .product-img .hover-img {
        opacity: 1;
        visibility: visible; }
      .single-product-wrapper:hover .product-img .product-favourite a {
        opacity: 1;
        visibility: visible; }

    .pagination {
      position: relative;
      z-index: 1; }
      .pagination .page-item .page-link {
        width: 40px;
        height: 40px;
        border: none;
        font-size: 16px;
        font-weight: 400;
        line-height: 40px;
        padding: 0;
        text-align: center;
        color: #242424; }
        .pagination .page-item .page-link:hover, .pagination .page-item .page-link:focus {
          color: #fff;
          box-shadow: none;
          background-color: #fbb710; }
      .pagination .page-item.active .page-link {
        color: #fff;
        box-shadow: none;
        background-color: #fbb710; }
      .pagination .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }
      .pagination .page-item:last-child .page-link {
        margin-left: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }

    /* :: 8.0 Footer Area CSS */
    .footer_area {
      position: relative;
      z-index: 1;
      background-color: #252525;
      padding: 80px 0; }
      .footer_area .single_widget_area .copywrite {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.4);
        margin-top: 10px; }
        .footer_area .single_widget_area .copywrite a {
          font-size: 12px;
          color: rgba(255, 255, 255, 0.4); }
          .footer_area .single_widget_area .copywrite a:hover {
            color: #fff; }
      .footer_area .single_widget_area .footer_menu {
        position: relative;
        z-index: 1;
        margin-left: auto; }
        .footer_area .single_widget_area .footer_menu .navbar {
          padding: 0; }
        .footer_area .single_widget_area .footer_menu .navbar-nav .nav-item .nav-link {
          padding: 10px 30px;
          color: #fff;
          text-transform: uppercase;
          font-size: 14px; }
          @media only screen and (min-width: 768px) and (max-width: 991px) {
            .footer_area .single_widget_area .footer_menu .navbar-nav .nav-item .nav-link {
              padding: 10px 0; } }
          @media only screen and (max-width: 767px) {
            .footer_area .single_widget_area .footer_menu .navbar-nav .nav-item .nav-link {
              padding: 10px 0; } }
          .footer_area .single_widget_area .footer_menu .navbar-nav .nav-item .nav-link:hover, .footer_area .single_widget_area .footer_menu .navbar-nav .nav-item .nav-link:focus {
            color: #fbb710; }
        .footer_area .single_widget_area .footer_menu .navbar-nav .nav-item.active .nav-link {
          color: #fbb710; }
        .footer_area .single_widget_area .footer_menu .navbar-nav .nav-item:last-child .nav-link {
          padding-right: 0; }

    /* :: 9.0 Product Sidebar Area CSS */
    .widget {
      position: relative;
      z-index: 1; }
      .widget .widget-title {
        font-size: 16px;
        text-transform: capitalize;
        color: #242424; }
      .widget .catagories-menu li a {
        text-transform: capitalize;
        font-size: 16px;
        padding: 15px 0 15px 20px;
        display: block;
        font-weight: 400;
        color: #959595; }
        .widget .catagories-menu li a:hover, .widget .catagories-menu li a:focus {
          color: #fbb710; }
      .widget .catagories-menu li.active a {
        color: #fbb710; }
      .widget.price .slider-range-price {
        background-color: #c7d2d8 !important;
        height: 2px;
        border: none; }
      .widget.price .ui-slider-handle {
        background-color: #fff;
        top: -7px;
        width: 18px;
        height: 18px;
        margin: 0;
        border: 2px solid #fbb710;
        border-radius: 50%; }
      .widget.price .ui-slider-range.ui-corner-all.ui-widget-header {
        background-color: #fbb710; }
      .widget.price .ui-slider-horizontal {
        height: 2px;
        background-color: #fbb710; }
      .widget.price .range-price {
        font-size: 16px;
        font-weight: 400;
        margin-top: 20px;
        text-transform: uppercase;
        color: #959595; }
      .widget.color .widget-desc ul {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap; }
        .widget.color .widget-desc ul li {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 25%;
          flex: 0 0 25%;
          width: 25%;
          margin-bottom: 15px; }
          .widget.color .widget-desc ul li a {
            width: 30px;
            height: 30px;
            display: block;
            border-radius: 50%;
            background-color: #ffffff;
            position: relative;
            z-index: 1;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.15); }
            .widget.color .widget-desc ul li a.color1 {
              background-color: #ffffff; }
            .widget.color .widget-desc ul li a.color2 {
              background-color: #969696; }
            .widget.color .widget-desc ul li a.color3 {
              background-color: #030303; }
            .widget.color .widget-desc ul li a.color4 {
              background-color: #0315ff; }
            .widget.color .widget-desc ul li a.color5 {
              background-color: #dc0647; }
            .widget.color .widget-desc ul li a.color6 {
              background-color: #fff56a; }
            .widget.color .widget-desc ul li a.color7 {
              background-color: #f26e51; }
            .widget.color .widget-desc ul li a.color8 {
              background-color: #9a8777; }
      .widget.brands .form-check {
        margin-bottom: 25px; }
        .widget.brands .form-check label {
          -webkit-transition-duration: 500ms;
          transition-duration: 500ms;
          font-size: 16px;
          color: #959595;
          font-weight: 400;
          cursor: pointer; }
          .widget.brands .form-check label:hover {
            color: #fbb710; }
        .widget.brands .form-check:last-child {
          margin-bottom: 0; }

    .product-topbar {
      position: relative;
      z-index: 100;
      margin-bottom: 40px; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .product-topbar .total-products {
          margin-bottom: 30px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .product-topbar .total-products {
          margin-bottom: 30px; } }
      @media only screen and (max-width: 767px) {
        .product-topbar .total-products {
          margin-bottom: 30px; } }
      .product-topbar .total-products p {
        margin-bottom: 15px;
        font-size: 14px;
        color: #242424;
        text-transform: uppercase; }
      .product-topbar .total-products .view a {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 40px;
        flex: 0 0 40px;
        width: 40px;
        height: 40px;
        background-color: #131212;
        color: #fff;
        font-size: 16px;
        text-align: center;
        line-height: 44px; }
        .product-topbar .total-products .view a:first-child {
          background-color: #fbb710; }
      .product-topbar .product-sorting p {
        margin-bottom: 0;
        font-size: 14px;
        height: 40px;
        background-color: #f5f7fa;
        line-height: 40px;
        color: #959595;
        padding-left: 15px; }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .product-topbar .product-sorting p {
            font-size: 12px; } }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .product-topbar .product-sorting p {
            font-size: 12px; } }
        @media only screen and (max-width: 767px) {
          .product-topbar .product-sorting p {
            font-size: 12px; } }
      .product-topbar .product-sorting form select {
        background-color: #f5f7fa;
        border: none;
        height: 40px;
        min-width: 80px; }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .product-topbar .product-sorting form select {
            min-width: 60px; } }
        .product-topbar .product-sorting form select option {
          font-size: 12px;
          font-weight: 400;
          color: #242424;
          text-transform: uppercase;
          background-color: #f5f7fa; }
      .product-topbar .nice-select {
        border: none;
        font-size: 14px;
        font-weight: 400;
        height: 40px;
        padding-left: 0;
        line-height: 40px;
        margin: 0;
        background-color: #f5f7fa;
        border-radius: 0;
        text-align: center !important;
        min-width: 100px; }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .product-topbar .nice-select {
            min-width: 60px;
            font-size: 12px; } }
        @media only screen and (max-width: 767px) {
          .product-topbar .nice-select {
            min-width: 60px;
            font-size: 12px; } }
        .product-topbar .nice-select .list {
          background-color: #f6f6f6;
          border-radius: 0;
          border: none; }
          .product-topbar .nice-select .list .option.selected {
            color: #fbb710; }

    /* :: 10.0 Checkout Area CSS */
    .checkout_details_area form .form-control {
      height: 60px;
      border: none;
      border-radius: 0;
      background-color: #f5f7fa;
      padding: 30px;
      color: #6b6b6b;
      font-size: 14px; }
    .checkout_details_area form textarea.form-control {
      height: 210px; }
    .checkout_details_area form .custom-control label {
      font-size: 14px;
      color: #6b6b6b; }
    .checkout_details_area form .nice-select {
      border-radius: 0;
      height: 60px;
      line-height: 60px;
      background-color: #f5f7fa;
      border: none;
      color: #6b6b6b;
      font-size: 14px; }
      .checkout_details_area form .nice-select .list {
        width: 100%;
        border-radius: 0;
        background-color: #f5f7fa; }

    /* ##### The End ##### */

    /*# sourceMappingURL=core-style.css.map */
    </style>
  </head>
  <body>
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="https://sun9-26.userapi.com/c857636/v857636045/1bd08a/Qjio1hnGLlw.jpg" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="product-details.html">Product</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">% Discount %</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="https://sun9-40.userapi.com/c857636/v857636045/1bd091/QRA00czx00Q.jpg" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="https://sun9-52.userapi.com/c857636/v857636045/1bd098/acBBh267cy0.jpg" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="https://sun9-26.userapi.com/c857636/v857636045/1bd08a/Qjio1hnGLlw.jpg" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">

                        <div class="hover-content">
                            <p>From $180</p>
                            <h4>Modern Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/c/o/cover1_55_92.jpg" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $18</p>
                            <h4>Plant Pot</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">

                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/_/a/_a54817d481539d36ba4c9f48907f39bff0c41a60b7876926a0_pimgpsh_fullsize_distr.jpg" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $320</p>
                            <h4>Small Table</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">

                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/1/0/1018520_0.jpg" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Metallic Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">

                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/migrated/article/14883/8_tn3.jpg" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Modern Rocking Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">

                        <img src="https://simg2.marwin.kz/media/catalog/product/cache/69236b3c6fe5a36c2425d919ec770b32/migrated/article/22477/58_tn3.jpg" alt="">

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Home Deco</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.html">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-details.html">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>


</body>
