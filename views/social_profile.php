{% extends 'layout.php' %}


{% block content %}

<?php 

require_once '/vendor/autoload.php';
$faker = Faker\Factory::create();

?>

        <main class= main>
            <div>
            <h1>{{data.company_name}} </h1>
            <h2>{{data.company_catch_phrase}}</h2>
            </div>

            <div>
                <h3>At {{data.company_name}}, we create {{data.company_product}} made of {{data.company_materials}}  </h3>
                <h3>Find out more on  {{data.company_url}}</h3>
            </div>

            <div class=card>
                <img src=" {{data.company_img}}">
                <h3>{{data.company_product}}</h3>
                <p> Material: {{data.company_materials}} </p>
                <p> Color: {{data.company_color}} </p>
                <h3>{{data.company_price}}$only!</h3>
                <button>Take my money</button>
            </div>


        </main>
        <aside>
            <img id=User_img src="{{data.user_img}}">

            <h3>{{ data.user_name}}</h3>
            <h3>{{data.user_job}}</h3>
            <h3>Contact info</h3>

            <p> {{data.user_mail}}</p>
            <p>{{data.user_phone}}</p>

            <p> {{data.user_adress}}</p>
            <p> {{data.user_postcode}}  {{data.user_city}} </p>


        </aside>

{% endblock %}
  