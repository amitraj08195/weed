<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 08-11-2018
 * Time: 14:55
 */
get_header();?>

<style>

    .woocommerce-MyAccount-navigation ul{width: 100% !important;
        float: left !important;}
    .woocommerce-MyAccount-navigation  ul li{    display: inline-block; transition: ease-in-out .4s;
        list-style-type: none;
        background-color: #015410;
        padding: 8px;
        margin: 20px 0;
        border: dashed 1px #0af334;}
    .woocommerce-MyAccount-navigation  ul li:hover{ background-color: transparent;    box-shadow: 0 5px 9px #005a10;}
    .woocommerce-MyAccount-navigation  ul li a{    color: #ffffff;
        font-weight: 100;font-size: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 0 2px 1px #000000;
        padding: 10px;}
    .woocommerce-MyAccount-content{ position: relative;
        width: 100%;
        float: left;}
    .woocommerce-error, .woocommerce-info, .woocommerce-message {
        position: relative;
        background-color: #007d166b;
        color: #ffffff;
        border-top: 3px solid #09a21d;
    }
    .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
        font-weight: 100; transition: ease-in-out .4s;
        letter-spacing: 1px;
        font-size: 13px;
        border-radius: 0;
        left: auto;
        color: #fff;
        background-color: #06a222;
    }
     h3 { margin-bottom: 0 !important;
        color: white;
        width: 100% !important;
        text-transform: uppercase;
        font-size: 17px;
        letter-spacing: 3px;
        font-style: italic;
    }
     #order_review_heading{ display: none !important;}
    @media screen and (min-width: 980px){
        .woocommerce .col2-set, .woocommerce-page .col2-set {
            width: 77% !important;
            background-color: #eeeeee21;
            float: none !important;
            position: relative !important;
            display: block;
            margin: 4% auto !important;
        }}
    /*.woocommerce .col2-set .col-1, .woocommerce-page .col2-set .col-1 {*/
        /*float: left;*/
        /*width: 48%;*/
        /*background-color: #404040;*/
        /*padding: 10px;*/
    /*}*/
    .woocommerce form .form-row {
        padding: 12px !important;
        margin: 0;
    }
    .woocommerce-Address  address {
        display: block;
        margin: 11px 0;
        font-size: 13px;
        color: #dad9d9;
        letter-spacing: 0.5px;
    }
    .woocommerce-MyAccount-content{    margin-top: 4% !important;}
    .woocommerce-MyAccount-content  p {
        margin-bottom: 0;
        color: #fff;
    }
    .ddwc-display-options {
        margin-bottom: 12px;
        padding: 13px;
        background: linear-gradient(to right, #01541000 0%,#037d19 52%,#01541000 100%);
        color: #fff;
    }
    table.ddwc-dashboard thead {
        background: #037b18;
        font-weight: 100;
        color: #fff;
        font-size: 15px;
        font-style: italic;
    }
    .ddwc-dashboard  a {
        text-decoration: none;
        color: #05f531;
    }
    .woocommerce button.button {
        margin: 20px 0 !important;
    }
    .woocommerce form.checkout_coupon, .woocommerce form.login, .woocommerce form.register {
        border: 1px solid #037d19;
        padding: 20px;    width: 52%;
        margin: 2em auto;
        text-align: left;
        border-radius: 0;
        background-color: #037d182b;
    }
    .ddwc-dashboard  a:hover{ color: #fff;}
    table.ddwc-dashboard {
        border: 1px solid #ddd;
        margin: 0 auto;
    }
    .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover {
        background-color: #029e16;
        background-image: none;
        color: #ffffff;
        border-color: #fff;
        box-shadow: 0 4px 7px black;
    }
    .woocommerce .col2-set .col-1, .woocommerce-page .col2-set .col-1 {
        float: left;
        width: 48%;
        background-color: #404040;
    }
    .woocommerce-info::before {
        color: #ffffff;
    }
    .woocommerce table.cart td.actions .input-text{
        width: 100%;
    }

    .woocommerce button.button{
        margin: 20px;
    }
    .woocommerce table.shop_table{
        border: 1px solid rgb(157, 255, 21);
    }
    #order_review {
                      width: 77% !important;
                      position: relative;
                      top: 26%; margin: 4% auto;
                      background-color: #2f2f2f;box-shadow: 0 -1px 15px 1px #000000a3;
                      float: none;
                      right: 0;
                  }

    .woocommerce-checkout{    background-color: #b7b2b257;
        padding: 10px 0;}
    @media( max-width: 992px){#order_review {
        width: 100% !important;
        position: relative !important;
    }}

    .woocommerce-EditAccountForm{width: 96%;
        float: none;
        margin: 0 auto;
        background-color: #01541087;
        padding: 10px;}

    .woocommerce form .form-row label {
        line-height: 2; width: 100%; text-align: left;
        float: left;
        font-size: 14px;
        font-weight: 100;
        letter-spacing: 2px;
    }

    .woocommerce-form-row{ margin-bottom: 1% !important;}
    .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
        padding: .6180469716em;
        background-color: #f2f2f20d !important;
        color: #fefeff8c !important;
        outline: 0;
        -webkit-appearance: none;
        border-radius: 0;
        box-sizing: border-box;
        font-weight: 400;
        border: solid 1px #ffffff !important;
    }
    .woocommerce form p{ margin-bottom: 0 !important;}
    #about-us .product1 {
        width: 100%;
        float: left;
        position: relative;
        padding: 10px 0;
        margin-top: 15%;
    }

    .woocommerce-cart-form thead{
        border: 1px solid rgb(157, 255, 21)!important;

    }
    .woocommerce-checkout #payment{
        background: #f3f3f312;
    }

    .woocommerce-checkout #payment div.payment_box{
        background-color: #dfdcde21;
    }

    .woocommerce form .form-row {
        width: 100% !important;
    }
    .woocommerce-checkout #payment div.payment_box input.input-text, .woocommerce-checkout #payment div.payment_box textarea {
        width: 100% !important;
        padding: 8px;
    }
    .woocommerce #payment .form-row select, .woocommerce-page #payment .form-row select {
        width: 100%;
        height: 30px;
    }
    .woocommerce .col2-set .col-1, .woocommerce-page .col2-set .col-1,.woocommerce .col2-set .col-2, .woocommerce-page .col2-set .col-2 {
        float: left;
        width: 100%;
    }
    /*.custom-checkout h3 {*/
        /*background-color: #165f1c;  !****CHANGE TO COLOR YOU WANT TO USE FOR TITLE BACKGROUND ****!*/
        /*width: 45%;*/
        /*text-align: center;*/
        /*padding: 10px;*/
        /*border-radius: 5px;*/
        /*margin-top: 50px;*/
        /*color: #FFF;*/
        /*float: right;*/
    /*}*/
    /*.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {*/
        /*padding: .6180469716em;*/
        /*background-color: #f2f2f2;*/
        /*color: #43454b;*/
        /*outline: 0;*/
        /*-webkit-appearance: none;*/
        /*border-radius: 2px;*/
        /*box-sizing: border-box;*/
        /*font-weight: 400;*/
        /*border:solid 2px #e4e4e4;*/
    /*}*/

    #wc_checkout_add_ons {
        width: 45%;
        float: right;
        text-align: center;
    }

    @media screen and (min-width: 980px) {
        .woocommerce-shipping-fields h3, .woocommerce-billing-fields h3 {width:100%;}
        .woocommerce .col2-set, .woocommerce-page .col2-set {
            width: 45%;
            float: left;
        }
        .woocommerce-checkout-review-order{
            width: 45%;
            float: right;
        }
    }
    @media screen and (max-width: 979px) {
        .custom-checkout h3 {
            width: 100%;
        }
    }

    #billing_city{
        color: black;
        border-radius: 5px;
        padding: 8px;
    }


    /*---------------------------------*/
    .woocommerce img, .woocommerce-page img {
        height: auto;
        width: 25%;
    }

    .woocommerce a.remove {
        line-height: 1;
        border-radius: 100%;
        color: white!important;
        text-decoration: none;
        font-weight: 700;
        border: solid 1px #06a222;
    }
    .woocommerce table.cart td.actions .input-text {
        width: 100%;
        border: solid 1px #fff;
        padding: 3px 10px;
    }
    .product1  thead>tr{    background-color: #037d19;
        color: #fff;}
    .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
        background-color: #06a222;
        color: #fff;
        -webkit-font-smoothing: antialiased;
    }
    .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
        background-color: #0c090c;
        color: #fff;
    }
    .woocommerce table.shop_table th {
        font-weight: 100;
        padding: 9px 12px;
        line-height: 16px;
        letter-spacing: 2px;
        text-shadow: 0 2px 2px black;
    }
    .woocommerce table.shop_table td {
        color: #fff;
    }
    .woocommerce .col2-set .col-1, .woocommerce-page .col2-set .col-1 {
        background-color: #404040;
        box-shadow: 0 -1px 15px 1px #000000a3;
    }
    .woocommerce table.shop_table{ border-radius: 0;}
    .woocommerce table.shop_table {
        border: none;
    }

    .woocommerce-checkout p.woocommerce-invalid-required-field span.error {
        color: #e2401c;
        display: block !important;
        font-weight: bold;
    }


    .woocommerce-error{

        display: none;
    }
</style>
<!--<style>-->
<!--    #about-us .product1 {-->
<!--           width: 100%;-->
<!--          float: left;-->
<!--           position: relative;-->
<!--           padding: 10px 0;-->
<!--         margin-top: 15%;-->
<!--    }-->
<!---->
<!--    .woocommerce-cart-form thead{-->
<!--      border: 1px solid rgb(157, 255, 21)!important;-->
<!---->
<!--      }-->
<!---->
<!--      .woocommerce table.cart td.actions .input-text{-->
<!--                  width: 100%;-->
<!--                }-->
<!---->
<!--    .woocommerce button.button{-->
<!--                 margin: 20px;-->
<!--               }-->
<!--       .woocommerce table.shop_table{-->
<!--                 border: 1px solid rgb(157, 255, 21);-->
<!--             }-->
<!--      .woocommerce-cart-form thead{-->
<!--                 border: 1px solid rgb(157, 255, 21)!important;-->
<!---->
<!--             }-->
<!---->
<!--</style>-->
<section id="about-us">
    <div class="container">
        <div class="product1">
<?php echo do_shortcode($post->post_content);?>
    </div>
    </div>
</section>


<?php get_footer('one');?>
