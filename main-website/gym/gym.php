<?php include "/xampp/htdocs/PHPinVSCode/Workout/header.php"?>

        <section class="human-muscles-section">
            <header>
                <h1> Bulding Muscles Exercises </h1>
                <h3 class="h3"> Choses muscle  </h3>
            </header>



            <div class="muscles-container">
                <div class="muscles-flex">
                    <img src="gym-p/human-muscle.jpg" id="images-less-603" usemap="#human-muscles">
                    <img src="gym-p/human-muscle.jpg" id="images" usemap="#human-muscles">
                    <div class="map-hide">
                        <map class="human-muscles-map" name="human-muscles">
                            <!-- Front human muscles -->
                            <area target="_self" alt="Chest"             onmouseover="chestImage()"            onmouseout="humanmusclesImage()" href="#Chest" coords="116,88,103,100,98,120,108,141,127,143,142,133,140,104,131,92"         shape="poly">
                            <area target="_self" alt="Chest"             onmouseover="chestImage()"            onmouseout="humanmusclesImage()" href="#Chest" coords="153,94,146,108,145,128,153,140,175,142,183,131,185,114,180,99,167,92" shape="poly">
                            <area target="_self" alt="Shoulder"           onmouseover="DeltoidImage()"          onmouseout="humanmusclesImage()" href="#Shoulder" coords="96,81,82,87,70,109,72,131,97,109,104,98,112,90"                           shape="poly">
                            <area target="_self" alt="Shoulder"           onmouseover="DeltoidImage()"          onmouseout="humanmusclesImage()" href="#Shoulder" coords="186,87,174,92,181,99,187,113,204,124,216,130,214,110,200,91"              shape="poly">
                            <area target="_self" alt="Rectus Abdominis"  onmouseover="RectusAbdominisImage()"  onmouseout="humanmusclesImage()" href="#Abdominis" coords="122,144,166,144,166,198,156,243,130,244,119,198"                          shape="poly">
                            <area target="_self" alt="External Oblique"  onmouseover="ExternalObliqueImage()"  onmouseout="humanmusclesImage()" href="#ExternalOblique" coords="168,149,165,236,184,221,183,158"                                          shape="poly">
                            <area target="_self" alt="External Oblique"  onmouseover="ExternalObliqueImage()"  onmouseout="humanmusclesImage()" href="#ExternalOblique" coords="118,147,119,233,101,216,104,159"                                          shape="poly">
                            <area target="_self" alt="Rectus Femoris"    onmouseover="RectusFemorisImage()"    onmouseout="humanmusclesImage()" href="#Quads" coords="109,228,128,268,134,289,127,316,121,346,110,341,106,324,96,337,89,300,91,260,96,238" shape="poly">
                            <area target="_self" alt="Rectus Femoris"    onmouseover="RectusFemorisImage()"    onmouseout="humanmusclesImage()" href="#Quads" coords="177,236,152,278,152,305,161,336,173,342,177,322,187,321,188,334,195,319,195,287,191,258" shape="poly">
                            <area target="_self" alt="Biceps Brachii"    onmouseover="BicepsBrachiiImage()"    onmouseout="humanmusclesImage()" href="" coords="93,114,70,133,65,154,63,161,72,165,81,151,87,140"                         shape="poly">
                            <area target="_self" alt="Biceps Brachii"    onmouseover="BicepsBrachiiImage()"    onmouseout="humanmusclesImage()" href="" coords="191,120,202,152,214,162,228,160,220,139,208,125"                          shape="poly">
                            <area target="_self" alt="arm"               onmouseover="ArmImage()"              onmouseout="humanmusclesImage()" href="#Arms" coords="57,162,43,182,40,194,36,212,26,231,43,240,61,205,73,188,75,173,62,177" shape="poly">
                            <area target="_self" alt="arm"               onmouseover="ArmImage()"              onmouseout="humanmusclesImage()" href="#Arms" coords="215,174,218,187,230,204,253,235,267,227,250,188,244,174,233,163,230,176" shape="poly">
                            <!-- Back human muscles -->
                            <area target="_self" alt="Trapezius"             onmouseover="TrapeziusImage()"       onmouseout="humanmusclesImage()"  href="#Trapezius" coords="470,53,444,54,441,67,430,78,413,92,422,93,431,101,434,120,446,145,457,167,465,143,475,127,478,105,482,97,495,87,483,79,471,70" shape="poly">
                            <area target="_self" alt="Latissimus Dorsi"      onmouseover="LatissimusDorsiImage()" onmouseout="humanmusclesImage()"  href="#Back" coords="434,130,409,130,411,152,420,185,430,199,443,173,453,159"   shape="poly">
                            <area target="_self" alt="Latissimus Dorsi"      onmouseover="LatissimusDorsiImage()" onmouseout="humanmusclesImage()"  href="#Back" coords="475,130,462,154,483,207,494,187,497,161,500,144,500,130"   shape="poly">
                            <area target="_self" alt="Triceps Brachii"       onmouseover="TricepsBrachiiImage()"  onmouseout="humanmusclesImage()"  href="#Triceps" coords="404,121,396,126,382,130,376,145,372,155,368,161,370,172,378,149,385,150,385,159,381,168,378,179,386,173,393,160,401,152,406,139,406,129" shape="poly">
                            <area target="_self" alt="Triceps Brachii"       onmouseover="TricepsBrachiiImage()"  onmouseout="humanmusclesImage()"  href="#Triceps" coords="507,113,516,121,526,125,532,141,537,154,540,162,536,169,528,142,522,145,523,154,527,168,524,175,517,158,512,150,505,134,504,124" shape="poly">
                            <area target="_self" alt="Gluteus"               onmouseover="GluteusImage()"         onmouseout="humanmusclesImage()"  href="#Gluteus" coords="423,212,418,225,416,245,417,265,423,275,435,279,445,278,451,270,457,257,462,279,481,282,490,274,496,261,497,243,494,228,491,217,482,214,469,219,460,229,456,240,449,224,440,215" shape="poly">
                            <area target="_self" alt="Hamstring"       onmouseover="SemitendinosusImage()"  onmouseout="humanmusclesImage()"   href="#Hamstring" coords="431,284,418,282,410,317,413,338,426,352,430,363,438,336,447,301,453,281,447,278" shape="poly">
                            <area target="_self" alt="Hamstring"       onmouseover="SemitendinosusImage()"  onmouseout="humanmusclesImage()"   href="#Hamstring" coords="462,278,464,301,468,316,477,352,484,370,500,344,505,322,493,286" shape="poly">
                            <area target="_self" alt="Gastrocnemius"         onmouseover="GastrocnemiusImage()"   onmouseout="humanmusclesImage()"  href="#calves" coords="416,353,407,362,404,376,401,395,406,422,420,411,431,422,434,405,431,385,431,372,424,359,418,365" shape="poly">
                            <area target="_self" alt="Gastrocnemius"         onmouseover="GastrocnemiusImage()"   onmouseout="humanmusclesImage()"  href="#calves" coords="490,356,481,370,480,386,477,405,481,426,492,409,501,417,507,418,510,405,509,388,506,368,499,353,495,363" shape="poly">
                        </map>
                    </div>
                </div>

                <div class="mscles-f">
                    <h3> Human Muscles </h3>
                    <br>
                    <p>
                        Muscle hypertrophy occurs when the fibers of the muscles sustain damage or injury.
                        The body repairs damaged fibers by fusing them, which increases
                        the mass and size of the muscles. Certain hormones, including testosterone,
                        human growth hormone, and insulin growth factor, also play a role in muscle growth
                        and repair.
                    </p>
                </div>
            </div>
        </section>

        <div class=" Muscles-Exercise ">
            <h1> Bulding Muscles Exercises </h1>
        </div>

        <section class="Workout-section">

            <div class="workout-parts">

                <!-- chest workout -->
                
                <div class="workout-group">
                    <h2> #1 chest </h2>
                    <div id="Chest" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/mid-Push-up-m.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/uperchest-Incline-Fly.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/uperchest-Push-Up.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/uperchestBench-Press.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/lowerchest-Chest-Dip.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/lowerchest-Decline-Fly.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- Shoulder workout -->

                <div class="workout-group">
                    <h2> #2 Shoulder </h2>
                    <div id="Shoulder" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/midShoulder-Press.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/front-shoulders-Dumbbell-.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/sideshoulders-Lateral-Raise.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Front-Raise_Shoulders.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/RearShoulders-Fly_.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- External Oblique -->

                <div class="workout-group">
                    <h2> #3 External Oblique </h2>
                    <div id="External-Oblique" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/Oblique-Side-Bridge-II_wais.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/oblique-Alternate-waist.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Oblique.l.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- Rectus Abdominis -->

                <div class="workout-group">
                    <h2> #4 Rectus Abdominis </h2>

                    <div id="Abdominis" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/abdominis-Sit-up-Waist.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/abdominis-air-bike-waist.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/abdomins-Jackknife-Sit-Up_wa.gif" alt="">
                        </div>
                    </div>
                    
                </div>

                <div class="brown-line">  </div>
                <!-- Arms -->

                <div class="workout-group">
                    <h2> #5 Arms </h2>
                    <div id="Arms" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/Brachioradialisam-Neutral-Wrist.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Brachioradialisam-One-Arm-Wrist-Curl_F.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Brachioradialisarm-Wrist.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- Trapezius -->

                <div id="Trapezius" class="workout-group">
                    <h2> #6 Trapezius </h2>
                    <div id="Trapezius-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/Trapezius---.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- back -->

                <div class="workout-group">
                    <h2> #7 Back  </h2>
                    <div class="workout-container">
                        <div id="Back" class="workout-flex">
                            <img src="workout-gifs/back-Alternating-Renegade.gif" alt="">
                        </div>
                        <div id="Back" class="workout-flex">
                            <img src="workout-gifs/back-Ball-O.gif" alt="">
                        </div>
                        <div id="Back" class="workout-flex">
                            <img src="workout-gifs/back-Bent-Over-Row.gif" alt="">
                        </div>
                        <div id="Back" class="workout-flex">
                            <img src="workout-gifs/back-Bent-over.gif" alt="">
                        </div>
                        <div id="Back" class="workout-flex">
                            <img src="workout-gifs/back-Chin.gif" alt="">
                        </div>
                        <div id="Back" class="workout-flex">
                            <img src="workout-gifs/back-Close-Grip-.gif" alt="">
                        </div>
                        <div id="Back" class="workout-flex">
                            <img src="workout-gifs/back-Deadlift_Waist.gif" alt="">
                        </div>
                        <div id="Back" class="workout-flex">
                            <img src="workout-gifs/back-Palm-Rotati.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- Triceps Brachii -->

                <div class="workout-group">
                    <h2> #8 Triceps Brachii </h2>
                    <div class="workout-container">
                        <div id="Triceps" class="workout-flex">
                            <img src="workout-gifs/triceps-Kickback_Upper.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Triceps--Seated-T.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Triceps-Decline-Triceps.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- Gluteus -->

                <div class="workout-group">
                    <h2> #9 Gluteus </h2>
                    <div id="Gluteus" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/Gluteus-Deadlift.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Gluteus-Plyo-Squat.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Gluteus-Sumo-Squat.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- Quads -->

                <div class="workout-group">
                    <h2> #10 Quads </h2>
                    <div id="Quads" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/front-Leg-Spli.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/front-leg-st.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/front-leg-Walking-Lunge.gif" alt="">
                        </div>
                    </div>
                </div>

                <div class="brown-line">  </div>
                <!-- Hamstring -->

                <div class="workout-group">
                    <h2> #11 Hamstring </h2>
                    <div id="Hamstring" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/hamstring-Raise_Thighs-F.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/hamstringLying-Femoral.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/hamstringWalking-on-Stepmill_.gif" alt="">
                        </div>
                    </div>
                </div>
            
                <div class="brown-line">  </div>
                <!-- Gastrocnemius -->

                <div class="workout-group">
                    <h2> #12 Calves </h2>
                    <div id="calves" class="workout-container">
                        <div class="workout-flex">
                            <img src="workout-gifs/calves-Calf-Raise.gif" alt="">
                        </div>
                        <div class="workout-flex">
                            <img src="workout-gifs/Calves-Stretch-With-Ha.gif" alt="">
                        </div>
                    </div>
                </div>



            </div>


        </section>

    </body>
    <script>

        /*  front human muscles  */
        function chestImage(){document.getElementById("images").src="./gym-p/chests.jpg"; }
        function DeltoidImage(){document.getElementById("images").src="./gym-p/Shoulder.jpg";}
        function BicepsBrachiiImage(){document.getElementById("images").src="./gym-p/BicepsBrachii.jpg";}
        function ExternalObliqueImage(){document.getElementById("images").src="./gym-p/ExternalOblique.jpg";}
        function RectusAbdominisImage(){document.getElementById("images").src="./gym-p/RectusAbdominis.jpg";}


        function RectusFemorisImage(){document.getElementById("images").src="./gym-p/RectusFemoris.jpg";}


        function ArmImage(){document.getElementById("images").src="./gym-p/forarm.jpg";}
        /*  back human muscles  */ 
        function TrapeziusImage(){document.getElementById("images").src="./gym-p/Trapeziuss.jpg";}
        function LatissimusDorsiImage(){document.getElementById("images").src="./gym-p/Back.jpg";}
        function TricepsBrachiiImage(){document.getElementById("images").src="./gym-p/TricepsBrachii.jpg";}
        function GluteusImage(){document.getElementById("images").src="./gym-p/Gluteuss.jpg";}
       

        function SemitendinosusImage(){document.getElementById("images").src="./gym-p/Hamstring.jpg";}
        
        
        function GastrocnemiusImage(){document.getElementById("images").src="./gym-p/calves.jpg";}
        /*  main Image of human muscles  */ 
        function humanmusclesImage(){document.getElementById("images").src ="./gym-p/human-muscle.jpg";}
        /*  main Image of human muscles less than 603px  */ 
        function humanmusclesImage(){document.getElementById("images").src ="./gym-p/human-muscle.jpg";}

    </script> 

<?php include "/xampp/htdocs/PHPinVSCode/Workout/footer.php"?>