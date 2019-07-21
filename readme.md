<h1 align="center">Stripe Payment gateway </h1>
<ol>
<li><p>clone this project <strong>git clone https://github.com/JubaerHossain/Stripe-Payment-gateway.git</strong></p></li>
<li><p>then command on your terminal|: <strong>composer update</strong></p></li>
<li><p>and <strong> .env file create from .env.example</strong></p></li>
<li><p> then command on your terminal :<strong>php artisan generate:key</strong></p></li>
<li><p>then create stripe account on this :<strong>  https://stripe.com </strong></p>
<li><p>go to <strong>.env file</strong> then push this two lines <strong>STRIPE_KEY=pk_test_stripe_key          
    STRIPE_SECRET=sk_test_stripe_secret</strong></p></li>
   
   <li><p>go to stripe account an u can see option <strong>Devrlopers</strong> click here then u can see option <strong> API Keys</strong> click here and then u can see taht page <strong>Publishable key</strong> and <strong>Secret key</strong></p></li>
   <li><p>now u hav to copy  two keys and paste on the <strong>.env</strong> file </p></li>
<li><p>then command on your terminal :<strong>php artisan migrate</strong></p></li>
<li><p>now your payment gateway ready to use !</p></li>
<li><p>feel free use it</p></li>
<p>thanks</p>
</ol>

