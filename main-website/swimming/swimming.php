<?php include "/xampp/htdocs/PHPinVSCode/Workout/header.php"?>

    <section class="show-case-gym">
        <header>
            <h1> Cardiovascular Exercises </h1>
            <h3> Burn fat with high fitness </h3>
        </header>
    </section>

    <section class="cardiovascular_exercises">

        <div class="cardiovascular-left-container ">

            <div class="cardiovascular-flex animated-image-Swimming">
                <div class="image-left">
                    <img src="swimming-p/swimming-p1.jpg" alt="">
                </div>
            </div>

            <div class="cardiovascular-flex  animated-topic-Swimming">
                <div class="cardiovascular-topic-left">
                    <h2> Swimming </h2>
                    <p> 
                        considered as swimming is a great way to keep fit, stay healthy.
                        Swimming is a healthy activity that you can continue for a lifetime.
                        It is a low-impact activity that has many physical and mental health benefits.
                    </p>
                    <br>
                    <p>
                        Swimming is a great workout because you need to move your whole body
                        against the resistance of the water. 
                    </p>
                    <ul>
                        <li>keeps your heart rate up but takes some of the impact stress off your body.</li>
                        <li>builds endurance, muscle strength and cardiovascular fitness.</li>
                        <li>helps you maintain a healthy weight, healthy heart and lungs.</li>
                        <li>tones muscles and builds strength.</li>
                        <li>provides an all-over body workout, as nearly all of your muscles are used during swimming.</li>
                    </ul>
                </div>
            </div>
            
        </div>

        <div class="cardiovascular-right-container">
            
            <div class="cardiovascular-flex animated-topic-Running">
                <div class="cardiovascular-topic-right">
                    <h2> Running  </h2>
                    <p> 
                        running is actually a great way to increase your overall level of health.
                        Research shows that running can raise your levels of good cholesterol while also
                        helping you increase lung function and use. In addition, running can also
                        boost your immune system and lower your risk of developing blood clots.
                        Running is one of the best forms of exercise for losing or maintaining a consistent weight.
                    </p>
                    <br>
                    <p>
                        You will find that it is a leading way to burn off extra calories and that
                        it is the second most effective exercise in terms of calories burned per minute.
                    </p>
                </div>
            </div>

            <div class="cardiovascular-flex animated-image-Running">
                <div class="image-right">
                    <img src="swimming-p/Running.jpg" alt="">
                </div>
            </div>
            
        </div>

        <div class="cardiovascular-left-container">

            <div class="cardiovascular-flex animated-image-Jump-rope">
                <div class="image-left ">
                    <img src="swimming-p/Jump-rope.jpg" alt="">
                </div>
            </div>

            <div class="cardiovascular-flex animated-topic-Jump-rope">
                <div class="cardiovascular-topic-left ">
                    <h2> Jump rope </h2>
                    <p> 
                        Since most of your major muscle groups are working when you jump rope,
                        the exercise is considered thermogenic — it creates a lot of heat in the body.
                        Your body needs to burn more fuel to produce this energy, so it burns lots of calories. 
                    </p>
                    <br>
                    <p>
                        Since jumping rope gets your heart pumping, it's great for your cardiovascular
                        system and heart health. For example, jump roping can increase your V02 Max,
                        the measure of the maximum amount of oxygen a person can utilize during exercise.
                        The higher someone's VO2 max, the more cardiovascular endurance they have. 
                    </p>
                </div>
            </div>
            
        </div>

        <div class="cardiovascular-right-container ">
            
            <div class="cardiovascular-flex animated-topic-Cycling">
                <div class="cardiovascular-topic-right">
                    <h2> Cycling </h2>
                    <p> 
                        Cycling is a healthy, low-impact exercise that can be enjoyed by people of all ages,
                        from young children to older adults. It is also fun, cheap and good for the environment.
                    </p>
                    <br>
                    <p>
                        Cycling is mainly an aerobic activity, which means that your heart, blood vessels and lungs
                        all get a workout. You will breathe deeper, perspire and experience increased body
                        temperature, which will improve your overall fitness level.
                    </p>
                    <br>
                    <h3>The health benefits of regular cycling include:</h3>
                    <br>
                    <ul>
                        <li>increased cardiovascular fitness</li>
                        <li>increased muscle strength and flexibilit</li>
                        <li>improved joint mobility</li>
                        <li>improved posture and coordination</li>
                        <li>strengthened bones</li>
                        <li>strengthened bones</li>
                    </ul>
                </div>
            </div>

            <div class="cardiovascular-flex animated-image-Cycling ">
                <div class="image-right cy-img">
                    <img src="swimming-p/Cycling.jpg" alt="">
                </div>
            </div>
            
        </div>

    </section>

</body>
        <script>
            
           function scroll(){
               var FadeInleft_Swimming = document.querySelector('.animated-image-Swimming');
               var FadeInRight_Swimming = document.querySelector('.animated-topic-Swimming');

               var FadeIn_Swimming = FadeInleft_Swimming.getBoundingClientRect().top
               var FadeIn_Swimming = FadeInRight_Swimming.getBoundingClientRect().top

               
               var FadeInleft_Running = document.querySelector('.animated-image-Running');
               var FadeInRight_Running = document.querySelector('.animated-topic-Running');

               var FadeIn_Running = FadeInleft_Running.getBoundingClientRect().top
               var FadeIn_Running = FadeInRight_Running.getBoundingClientRect().top

               var FadeInleft_Jump_rope = document.querySelector('.animated-image-Jump-rope');
               var FadeInRight_Jump_rope = document.querySelector('.animated-topic-Jump-rope');

               var FadeIn_Jump_rope = FadeInleft_Jump_rope.getBoundingClientRect().top
               var FadeIn_Jump_rope= FadeInRight_Jump_rope.getBoundingClientRect().top

               var FadeInleft_Cycling = document.querySelector('.animated-image-Cycling');
               var FadeInRight_Cycling = document.querySelector('.animated-topic-Cycling');

               var FadeIn_Cycling = FadeInleft_Cycling.getBoundingClientRect().top
               var FadeIn_Cycling = FadeInRight_Cycling.getBoundingClientRect().top

               var screenPosition = window.innerHeight;

               var screenPosition_Cycling = window.innerHeight / 1.1;

               if( FadeIn_Swimming < screenPosition){

                    FadeInleft_Swimming.classList.add('FadeInlefts');
                    FadeInRight_Swimming.classList.add('FadeInRights');
               }
               if( FadeIn_Running < screenPosition){

                    FadeInleft_Running.classList.add('FadeInlefts');
                    FadeInRight_Running.classList.add('FadeInRights');
               }
               if( FadeIn_Jump_rope < screenPosition){

                    FadeInleft_Jump_rope.classList.add('FadeInlefts');
                    FadeInRight_Jump_rope.classList.add('FadeInRights');
               }
               if( FadeIn_Cycling < screenPosition_Cycling){

                    FadeInleft_Cycling.classList.add('FadeInlefts');
                    FadeInRight_Cycling.classList.add('FadeInRights');
                }
           }
            
           window.addEventListener('scroll',scroll);

        </script>

<?php include "/xampp/htdocs/PHPinVSCode/Workout/footer.php"?>