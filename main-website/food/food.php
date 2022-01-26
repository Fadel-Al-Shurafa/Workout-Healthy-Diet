<?php include "/xampp/htdocs/PHPinVSCode/Workout/header.php"?>

    <section class="show-case-gym">
        <header>
            <h1> Welcome to our healthy world </h1>
            <h3> Eat healthy Stay healthy </h3>
        </header>
    </section>

    <section class="calc-section-container">

        <div class="flex-calc-section">

            <form class="form-calc" autocomplete="off" >
                <div class="label-align">
                    <label> Age </label>
                    <input type="text" name="Age" id="Age" maxlength="3"  title="Enter Number" required > Years
                </div>
                <div class="label-align">
                    <input type="radio" name="gender" id="gender_Female" value="Female" checked required >
                    <label > Female </label>
                    <input type="radio" name="gender" id="gender_Male" value="Male" required >
                    <label > Male </label>
                </div>
                <div class="label-align">
                    <label> Weight </label>
                    <input type="text" name="Weight" id="Weight" maxlength="3"  title="Enter Number" required >
                    <input type="radio" checked>
                    <label > Kilos </label>
                </div>
                <div class="label-align">
                    <label> Height </label>
                    <input type="text" name="Height" id="Height" maxlength="3" title="Enter Number" required >
                    <input type="radio" checked>
                    <label > CM </label>
                </div>
                <div class="label-align">
                    <label > Exercise level </label>
                    <select  id="Selected">

                        <option selected="true" value="1.2"> 3 Workouts a week  </option>
                        <option value="1.35"> 4 Workouts a week  </option>
                        <option value="1.5"> 5 Workouts a week  </option>
                        <option value="1.65"> 6 or daily Workouts a week  </option>

                    </select>
                </div>
                <div class="calculate-btn">
                    <button type="button" class="brown-btn" onclick="Calculate()"> Calculate </button>
                </div>
            </form>

        </div>

        <div class="flex-calc-section flex-item-container">

            <div class="flex-item-calc">  
                <form class="form-calc-reuslt flex-item-calc-with">
                    <label > <em><b>Increasing weight: </b></em><span id="reuslt_IN"> </span></label>
                    <label > <em><b>Maintenance weight: </b></em><span id="reuslt_M"> </span></label>
                    <label > <em><b>Fat loss: </b></em><span id="reuslt_FL"> </span></label>
                    <label > <em><b>Extreme Fat loss: </b></em><span id="reuslt_EXFL"> </span></label>
                </form>
            </div>

                <div class="brown-line-calc">  </div>
                <div class="label-align Body-Weight">
                    <label > Body Weight </label>
                    <select  id="Selected-PCF">
                        <option value="Increasing-PCF"> Increasing Body Weight  </option>
                        <option selected="true" value="Maintenace-PCF"> Maintenace Body Weight  </option>
                        <option value="Loss-PCF"> Loss Body Weight  </option>
                        <option value="ExLoss-PCF"> Extreme Loss Body Weight  </option>
                        
                    </select>
                </div>
            <div class="flex-item-calc flex-item-calc-with" >    
                <form class="form-calc-reuslt">
                    <label > <em><b>Protein: </b></em><span id="reuslt_P"> </span></label>
                    <label > <em><b>Carbohydrates: </b></em><span id="reuslt_C"> </span></label>
                    <label > <em><b>Fat: </b></em><span id="reuslt_Fat"> </span></label>
                </form>
                <div class="calculate-btn">
                    <button type="button" class="brown-btn" onclick="Calculate()"> Calculate </button>
                </div>
            </div>
            
        </div>


    </section>

    <section class="grid-food-section">
        <div class="make-your-won-diet">

            <h2> The Best 9 Food High of Protein </h2>

            <div class="grid-food-container">
            
                <div class="grid-food-item">

                    <div class="image">
                        <img src="food-p/Chicken.jpg" alt="">
                        <div class="text-over-image">
                            <p> 165 Kilocalories </p>
                        </div>
                    </div>

                    <div class="about-thefood">
                        <h3> 100g of Chicken </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 27g  </li>
                            <li> Carbohydrates: 0g </li>
                            <li> Fat: 3.6g  </li>
                        </ul>
                    </div>
                </div>

                <div class="grid-food-item">

                    <div class="image">
                        <img src="food-p/Tuna.jpg" alt="">
                        <div class="text-over-image">
                            <p> 116 Kilocalories </p>
                        </div>
                    </div>
                    
                    <div class="about-thefood">
                        <h3> 100g of Tuna </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 25g </li>
                            <li> Carbohydrates: 0g </li>
                            <li> Fat: 5.3g </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">

                    <div class="image">
                        <img src="food-p/beef.jpg" alt="">
                        <div class="text-over-image">
                            <p> 288 Kilocalories </p>
                        </div>
                    </div>
                    
                    <div class="about-thefood">
                        <h3> 100g of Beef </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 26g </li>
                            <li> Carbohydrates: 0g </li>
                            <li> Fat: 7.7 - 15g  </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">

                    <div class="image">
                        <img src="food-p/salmon.jpg" alt="">
                        <div class="text-over-image">
                            <p> 146 Kilocalories </p>
                        </div>
                    </div>
                    
                    <div class="about-thefood">
                        <h3> 100g of Salmon </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 21.6g </li>
                            <li> Carbohydrates: 0g </li>
                            <li> Fat: 6g </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">

                    <div class="image">
                        <img src="food-p/eggs.jpg" alt="">
                        <div class="text-over-image">
                            <p> 131 Kilocalories </p>
                        </div>
                    </div>
                    
                    <div class="about-thefood">
                        <h3> 100g of Eggs </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 12.6g </li>
                            <li> Carbohydrates: 0g </li>
                            <li> Fat: 9g </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">

                    <div class="image">
                        <img src="food-p/Tofu.jpg" alt="">
                        <div class="text-over-image">
                            <p> 83 Kilocalories </p>
                        </div>
                    </div>
                    
                    <div class="about-thefood">
                        <h3> 100g of Tofu </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 8g </li>
                            <li> Carbohydrates: 1.2g </li>
                            <li> Fat: 5.3g </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">

                    <div class="image">
                        <img src="food-p/Parmesan.jpg" alt="">
                        <div class="text-over-image">
                            <p> 420 Kilocalories </p>
                        </div>
                    </div>
                    
                    <div class="about-thefood">
                        <h3> 100g of Parmesan </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 26g </li>
                            <li> Carbohydrates: 14g </li>
                            <li> Fat: 28g </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">

                    <div class="image">
                        <img src="food-p/Lentils.jpg" alt="">
                        <div class="text-over-image">
                            <p> 116 Kilocalories </p>
                        </div>
                    </div>
                    
                    <div class="about-thefood">
                        <h3> 100g of Lentils </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 9g </li>
                            <li> Carbohydrates: 20g </li>
                            <li> Fat: 0.4 </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/SquashSeeds.jpg" alt="">
                        <div class="text-over-image">
                           <p> 446 Kilocalories </p> 
                        </div>
                    </div>
                    
                    <div class="about-thefood">
                        <h3> 100g of Squash Seeds </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 19g </li>
                            <li> Carbohydrates: 54g </li>
                            <li> Fat 22g</li>
                        </ul>
                    </div>
                </div>    
            </div>

        </div>

        <div class="make-your-won-diet">

            <h2> The Best 9 Food High Carbohydrates </h2>

            <div class="grid-food-container">
            
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/SweetPotatoes.jpg" alt="">
                        <div class="text-over-image">
                            <p> 87 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Sweet Potatoes </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 1.2g </li>
                            <li> Carbohydrates: 21.5g </li>
                            <li> Fat: 0.3g </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Rice.jpg" alt="">
                        <div class="text-over-image">
                            <p> 130 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Brown/white Rice (cooked) </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 4g </li>
                            <li> Carbohydrates: 25.2g </li>
                            <li> Fat:  0.6g </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Pasta.jpg" alt="">
                        <div class="text-over-image">
                            <p> 131 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Brown/white Pasta </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 5.15g </li>
                            <li> Carbohydrates: 25g </li>
                            <li> Fat: 1g </li>
                        </ul>
                    </div>
                </div>  
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/NavyBeans.jpg" alt="">
                        <div class="text-over-image">
                            <p> 128 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Navy Beans </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 8g </li>
                            <li> Carbohydrates: 23g </li>
                            <li> Fat: 13g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Lentils.jpg" alt="">
                        <div class="text-over-image">
                            <p> 116 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Lentils </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 9g </li>
                            <li> Carbohydrates: 20g </li>
                            <li> Fat: 0.4g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Bananas.jpg" alt="">
                        <div class="text-over-image">
                            <p> 90 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Bananas </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 1.1g </li>
                            <li> Carbohydrates: 22.8g </li>
                            <li> Fat: 0.3g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Oatmeal.jpg" alt="">
                        <div class="text-over-image">
                            <p> 360 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Oatmeal </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 14g </li>
                            <li> Carbohydrates: 67.8g </li>
                            <li> Fat: 7g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Raisins.jpg" alt="">
                        <div class="text-over-image">
                            <p> 280 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Raisins </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 3g </li>
                            <li> Carbohydrates: 78g </li>
                            <li> Fat: 0.8g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Bread.jpg" alt="">
                        <div class="text-over-image">
                            <p> 67 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 1 slice of Bread (23 - 28g) </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 2g </li>
                            <li> Carbohydrates: 13g </li>
                            <li> Fat: 1g </li>
                        </ul>
                    </div>
                </div>     
            </div>

        </div>      

        <div class="make-your-won-diet">
            <h2> The Best 9 Food High Healthy Fat </h2>

            <div class="grid-food-container">
            
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Avocados.jpg" alt="">
                        <div class="text-over-image">
                            <p> 158 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Avocados </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 2g </li>
                            <li> Carbohydrates: 2g </li>
                            <li> Fat: 19.5g </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Tofu.jpg" alt="">
                        <div class="text-over-image">
                            <p> 83 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Tofu </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 8g </li>
                            <li> Carbohydrates: 1.2g </li>
                            <li> Fat: 5.3g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Fish.jpg" alt="">
                        <div class="text-over-image">
                            <p> 205 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Fish </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 22g </li>
                            <li> Carbohydrates: 0g </li>
                            <li> Fat: 12g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/PeanutButter.jpg" alt="">
                        <div class="text-over-image">
                            <p> 193 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> one spoon Peanut Butter </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 8g </li>
                            <li> Carbohydrates: 7g </li>
                            <li> Fat: 16g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/BoiledSoybeans.jpg" alt="">
                        <div class="text-over-image">
                            <p> 172 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Boiled Soybeans </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 16g </li>
                            <li> Carbohydrates: 10g </li>
                            <li> Fat: 9g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/FlaxseedOil.jpg" alt="">
                        <div class="text-over-image">
                            <p> 120 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> one spoon of Flaxseed Oil </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 0g </li>
                            <li> Carbohydrates: 0g </li>
                            <li> Fat: 14g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/DarkChocolate.jpg" alt="">
                        <div class="text-over-image">
                            <p> 584 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Dark Chocolate (85/ Cocoa) </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 12.2g </li>
                            <li> Carbohydrates:  14g </li>
                            <li> Fat: 46g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/CheddarCheese.jpg" alt="">
                        <div class="text-over-image">
                            <p> 405 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Cheddar Cheese </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 18g </li>
                            <li> Carbohydrates: 2.4g </li>
                            <li> Fat: 33g </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Eggs.jpg" alt="">
                        <div class="text-over-image">
                            <p> 131 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> Eggs </h3>
                        <ul class="ul-square-style">
                            <li> Protien: 12.6g </li>
                            <li> Carbohydrates: 0g </li>
                            <li> Fat: 9g </li>
                        </ul>
                    </div>
                </div>    
            </div>

        </div>

        <div class="make-your-won-diet">
            <h2> The Best Food High Vitamin A </h2>

            <div class="grid-food-container">
            
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Collards.jpg" alt="">
                        <div class="text-over-image">
                            <p> 31 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Collards </h3>
                        <ul class="ul-square-style">
                            <li> A: 722(mcg)</li>
                            <li> K: 722(mcg)</li>
                            <li> C: 35000(mcg) </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/kale.jpg" alt="">
                        <div class="text-over-image">
                            <p> 48 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of kale </h3>
                        <ul class="ul-square-style">
                            <li> A: 890(mcg) </li>
                            <li> K: 705(mcg)</li>
                            <li> C: 33000(mcg) </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Carrot.jpg" alt="">
                        <div class="text-over-image">
                            <p> 41 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Carrot </h3>
                        <ul class="ul-square-style">
                            <li> A: 872(mcg) </li>
                            <li> K: 13.2(mcg)</li>
                            <li> C: 2000(mcg) </li>
                        </ul>
                    </div>
                </div> 
            </div>

            <div class="make-your-won-diet">
            <h2> The Best Food High Vitamin C </h2>

            <div class="grid-food-container">
            
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Broccoli.jpg" alt="">
                        <div class="text-over-image">
                            <p> 35 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Broccoli </h3>
                        <ul class="ul-square-style">
                            <li> A: 77(mcg) </li>
                            <li> K: 126(mcg)</li>
                            <li> C: 68000(mcg) </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/peppers.jpg" alt="">
                        <div class="text-over-image">
                            <p> 39 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of peppers </h3>
                        <ul class="ul-square-style">
                            <li> A: 157(mcg) </li>
                            <li> K: 116(mcg)</li>
                            <li> C: 143000(mcg) </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/SweetPotatoes.jpg" alt="">
                        <div class="text-over-image">
                            <p> 87 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Sweet Potatoes </h3>
                        <ul class="ul-square-style">
                            <li> A: 1403(mcg) </li>
                            <li> K: 308(mcg)</li>
                            <li> C: 22400(mcg) </li>
                        </ul>
                    </div>
                </div> 
            </div>

            <div class="make-your-won-diet">
            <h2> The Best Food High Vitamin E </h2>

            <div class="grid-food-container">
            
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/SunflowerSeeds.jpg" alt="">
                        <div class="text-over-image">
                            <p> 584 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Sunflower Seeds </h3>
                        <ul class="ul-square-style">
                            <li> E: 35000(mcg) </li>
                            <li> K: 1800(mcg)</li>
                            <li> C: 14000(mcg) </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Almonds.jpg" alt="">
                        <div class="text-over-image">
                            <p> 580 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Almonds </h3>
                        <ul class="ul-square-style">
                            <li> E: 26000(mcg) </li>
                            <li> K: 1200(mcg)</li>
                            <li> Mg: 248000(mcg) </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Spinach.jpg" alt="">
                        <div class="text-over-image">
                            <p> 23 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Spinach </h3>
                        <ul class="ul-square-style">
                            <li> E: 2800(mcg) </li>
                            <li> K: 528(mcg)</li>
                            <li> C: 28000(mcg) </li>
                        </ul>
                    </div>
                </div> 
            </div>

            <div class="make-your-won-diet">
            <h2> The Best Food High Vitamin B </h2>

            <div class="grid-food-container">
            
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Fish.jpg" alt="">
                        <div class="text-over-image">
                            <p> 205 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Fish </h3>
                        <ul class="ul-square-style">
                            <li> B1, B2, B3, B5, B6, B12 </li>
                            <li> K: 531(mcg)</li>
                            <li> C: 28000(mcg) </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Mushrooms.jpg" alt="">
                        <div class="text-over-image">
                            <p> 22 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Mushrooms </h3>
                        <ul class="ul-square-style">
                            <li> B, B6, B12 </li>
                            <li> Mg: 340000(mcg)</li>
                            <li> C: 3500(mcg) </li>
                        </ul>
                    </div>
                </div> 
                <div class="grid-food-item">
                    <div class="image">
                        <img src="food-p/Avocados.jpg" alt="">
                        <div class="text-over-image">
                            <p> 158 Kilocalories </p> 
                        </div>
                    </div>
                    <div class="about-thefood">
                        <h3> 100g of Avocados </h3>
                        <ul class="ul-square-style">
                            <li> B1, B6 </li>
                            <li> E: 26000(mcg)</li>
                            <li> C: 18500(mcg) </li>
                        </ul>
                    </div>
                </div> 
            </div>

        </div>

        

        

    </section>
    

    </body>

    <script>
            
            
            function Calculate(){

                

                if(document.getElementById("gender_Female").checked) {

                    var Weight = parseInt(document.getElementById("Weight").value);
                    
                    var BMR = Weight * 1 * 24;
                    

                    if(document.getElementById("Selected").value == "1.2"){

                        var Activity_level_3 = 1.2;
                        /* Calories */
                        var Calories = (Activity_level_3 * BMR) - 250 ;
                        var Calories_INBW = Calories + 500;
                        var Calories_FLoss = Calories - 500;
                        var Calories_EXFloss = Calories - 880;
                        document.getElementById("reuslt_IN").innerHTML = parseInt(Calories_INBW) + " calories";
                        document.getElementById("reuslt_M").innerHTML = parseInt(Calories) + " calories";
                        document.getElementById("reuslt_FL").innerHTML = parseInt(Calories_FLoss) + " calories";
                        document.getElementById("reuslt_EXFL").innerHTML = parseInt(Calories_EXFloss) + " calories";
                        /* Protein */
                        var Protein = Weight * Activity_level_3 * 1.6;
                        document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                        /* Fat */
                        Calories_fat = 0.25 * Calories;
                        Fat = Calories_fat / 9;
                        document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                        /* Carbohydrates */
                        var Fat_P_calories = (Protein * 4) + (Fat * 9);
                        var Carbs_calories = Calories - Fat_P_calories;
                        var Carbs = Carbs_calories / 4;
                        document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";            

                        if(document.getElementById("Selected-PCF").value == "Increasing-PCF"){

                            var Activity_level_3 = 1.2;
                            /* Calories */
                            var Calories = (Activity_level_3 * BMR) - 250 ;
                            var Calories_INBW = Calories + 500;
                            /* Protein */
                            var Protein = (Weight * Activity_level_3 * 1.6) + 20;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_INBW;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            var Carbs_calories = Calories_INBW - Fat_P_calories;
                            var Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G"; 

                        }


                        if(document.getElementById("Selected-PCF").value == "Maintenace-PCF"){

                            var Activity_level_3 = 1.2;
                            /* Calories */
                            var Calories = (Activity_level_3 * BMR) - 250 ;

                            /* Protein */
                            var Protein = (Weight * Activity_level_3 * 1.6) - 5;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories =  Calories - Fat_P_calories;
                            Carbs = Carbs_calories / 4 ;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "Loss-PCF"){

                            var Activity_level_3 = 1.2;
                            /* Calories */
                            var Calories = (Activity_level_3 * BMR) - 250 ;
                            var Calories_FLoss = Calories - 500;


                            /* Protein */
                            var Protein = (Weight * Activity_level_3 * 1.6) - 12;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_FLoss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_FLoss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "ExLoss-PCF"){
                            var Activity_level_3 = 1.2;
                            /* Calories */
                            var Calories = (Activity_level_3 * BMR) - 250;
                            var Calories_EXFloss = Calories - 880;
                            /* Protein */
                            var Protein = (Weight * Activity_level_3 * 1.6) - 14;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_EXFloss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_EXFloss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";


                        }
                    }
                    if(document.getElementById("Selected").value == "1.35"){

                        var Activity_level_4 = 1.35;
                        /* Calories */
                        var Calories = (Activity_level_4 * BMR) - 250 ;
                        var Calories_INBW = Calories + 500;
                        var Calories_FLoss = Calories - 500;
                        var Calories_EXFloss = Calories - 880;
                        document.getElementById("reuslt_IN").innerHTML = parseInt(Calories_INBW) + " calories";
                        document.getElementById("reuslt_M").innerHTML = parseInt(Calories) + " calories";
                        document.getElementById("reuslt_FL").innerHTML = parseInt(Calories_FLoss) + " calories";
                        document.getElementById("reuslt_EXFL").innerHTML = parseInt(Calories_EXFloss) + " calories";
                        /* Protein */
                        var Protein = Weight * Activity_level_4 * 1.6;
                        document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                        /* Fat */
                        Calories_fat = 0.25 * Calories;
                        Fat = Calories_fat / 9;
                        document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                        /* Carbohydrates */
                        var Fat_P_calories = (Protein * 4) + (Fat * 9);
                        Carbs_calories =  Calories - Fat_P_calories;
                        Carbs = Carbs_calories / 4 ;
                        document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        if(document.getElementById("Selected-PCF").value == "Increasing-PCF"){

                            var Activity_level_4 = 1.35;
                            /* Calories */
                            var Calories = (Activity_level_4 * BMR) - 250 ;
                            var Calories_INBW = Calories + 500;
                            /* Protein */
                            var Protein = (Weight * Activity_level_4 * 1.6) + 20;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_INBW;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            var Carbs_calories = Calories_INBW - Fat_P_calories;
                            var Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G"; 

                        }


                        if(document.getElementById("Selected-PCF").value == "Maintenace-PCF"){

                            var Activity_level_4 = 1.35;
                            /* Calories */
                            var Calories = (Activity_level_4 * BMR) - 250 ;

                            /* Protein */
                            var Protein = (Weight * Activity_level_4 * 1.6) - 5;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories =  Calories - Fat_P_calories;
                            Carbs = Carbs_calories / 4 ;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "Loss-PCF"){

                            var Activity_level_4 = 1.35;
                            /* Calories */
                            var Calories = (Activity_level_4 * BMR) - 250 ;
                            var Calories_FLoss = Calories - 500;


                            /* Protein */
                            var Protein = (Weight * Activity_level_4 * 1.6) - 12;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_FLoss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_FLoss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "ExLoss-PCF"){
                            var Activity_level_4 = 1.35;
                            /* Calories */
                            var Calories = (Activity_level_4 * BMR) - 250;
                            var Calories_EXFloss = Calories - 880;
                            /* Protein */
                            var Protein = (Weight * Activity_level_4 * 1.6) - 14;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_EXFloss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_EXFloss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";


                        }
                    }
                    if(document.getElementById("Selected").value == "1.5"){

                        var Activity_level_5 = 1.5;
                        /* Calories */
                        var Calories = (Activity_level_5 * BMR) - 250 ;
                        var Calories_INBW = Calories + 500;
                        var Calories_FLoss = Calories - 500;
                        var Calories_EXFloss = Calories - 880;
                        document.getElementById("reuslt_IN").innerHTML = parseInt(Calories_INBW) + " calories";
                        document.getElementById("reuslt_M").innerHTML = parseInt(Calories) + " calories";
                        document.getElementById("reuslt_FL").innerHTML = parseInt(Calories_FLoss) + " calories";
                        document.getElementById("reuslt_EXFL").innerHTML = parseInt(Calories_EXFloss) + " calories";
                        /* Protein */
                        var Protein = Weight * Activity_level_5 * 1.6;
                        document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                        /* Fat */
                        Calories_fat = 0.25 * Calories;
                        Fat = Calories_fat / 9;
                        document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                        /* Carbohydrates */
                        var Fat_P_calories = (Protein * 4) + (Fat * 9);
                        Carbs_calories = Calories - Fat_P_calories;
                        Carbs = Carbs_calories / 4;
                        document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        
                                                /* Level 5 Workouts a week  */

                        if(document.getElementById("Selected-PCF").value == "Increasing-PCF"){

                            var Activity_level_5 = 1.5;
                            /* Calories */
                            var Calories = (Activity_level_5 * BMR) - 250 ;
                            var Calories_INBW = Calories + 500;
                            /* Protein */
                            var Protein = (Weight * Activity_level_5 * 1.6) + 20;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_INBW;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            var Carbs_calories = Calories_INBW - Fat_P_calories;
                            var Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G"; 

                        }


                        if(document.getElementById("Selected-PCF").value == "Maintenace-PCF"){

                            var Activity_level_5 = 1.5;
                            /* Calories */
                            var Calories = (Activity_level_5 * BMR) - 250 ;

                            /* Protein */
                            var Protein = (Weight * Activity_level_5 * 1.6) - 5;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories =  Calories - Fat_P_calories;
                            Carbs = Carbs_calories / 4 ;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "Loss-PCF"){

                            var Activity_level_5 = 1.5;
                            /* Calories */
                            var Calories = (Activity_level_5 * BMR) - 250 ;
                            var Calories_FLoss = Calories - 500;


                            /* Protein */
                            var Protein = (Weight * Activity_level_5 * 1.6) - 12;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_FLoss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_FLoss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "ExLoss-PCF"){
                            var Activity_level_5 = 1.5;
                            /* Calories */
                            var Calories = (Activity_level_5 * BMR) - 250;
                            var Calories_EXFloss = Calories - 880;
                            /* Protein */
                            var Protein = (Weight * Activity_level_5 * 1.6) - 14;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_EXFloss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_EXFloss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";


                        }

                    }
                    if(document.getElementById("Selected").value == "1.65"){

                        var Activity_level_6 = 1.65;
                        /* Calories */
                        var Calories = (Activity_level_6 * BMR) - 250 ;
                        var Calories_INBW = Calories + 500;
                        var Calories_FLoss = Calories - 500;
                        var Calories_EXFloss = Calories - 880;
                        document.getElementById("reuslt_IN").innerHTML = parseInt(Calories_INBW) + " calories";
                        document.getElementById("reuslt_M").innerHTML = parseInt(Calories) + " calories";
                        document.getElementById("reuslt_FL").innerHTML = parseInt(Calories_FLoss) + " calories";
                        document.getElementById("reuslt_EXFL").innerHTML = parseInt(Calories_EXFloss) + " calories";
                        /* Protein */
                        var Protein = Weight * Activity_level_6 * 1.6;
                        document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                        /* Fat */
                        Calories_fat = 0.25 * Calories;
                        Fat = Calories_fat / 9;
                        document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                        /* Carbohydrates */
                        var Fat_P_calories = (Protein * 4) + (Fat * 9);
                        Carbs_calories = Calories - Fat_P_calories;
                        Carbs = Carbs_calories / 4;
                        document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        
                                                /* Level 6 Workouts a week  */

                        if(document.getElementById("Selected-PCF").value == "Increasing-PCF"){

                            var Activity_level_6 = 1.65;
                            /* Calories */
                            var Calories = (Activity_level_6 * BMR) - 250 ;
                            var Calories_INBW = Calories + 500;
                            /* Protein */
                            var Protein = (Weight * Activity_level_6 * 1.60) + 20 ;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_INBW;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            var Carbs_calories = Calories_INBW - Fat_P_calories;
                            var Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G"; 

                        }


                        if(document.getElementById("Selected-PCF").value == "Maintenace-PCF"){

                            var Activity_level_6 = 1.65;
                            /* Calories */
                            var Calories = (Activity_level_6 * BMR) - 250 ;

                            /* Protein */
                            var Protein = (Weight * Activity_level_6 * 1.6) - 5;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories =  Calories - Fat_P_calories;
                            Carbs = Carbs_calories / 4 ;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "Loss-PCF"){

                            var Activity_level_6 = 1.65;
                            /* Calories */
                            var Calories = (Activity_level_6 * BMR) - 250 ;
                            var Calories_FLoss = Calories - 500;


                            /* Protein */
                            var Protein = (Weight * Activity_level_6 * 1.6) - 12;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_FLoss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_FLoss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                            if(document.getElementById("Selected-PCF").value == "ExLoss-PCF"){
                            var Activity_level_6 = 1.65;
                            /* Calories */
                            var Calories = (Activity_level_6 * BMR) - 250;
                            var Calories_EXFloss = Calories - 880;
                            /* Protein */
                            var Protein = (Weight * Activity_level_6 * 1.6) - 14;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_EXFloss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_EXFloss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";


                        }
                    }


                }

                if(document.getElementById("gender_Male").checked) {

                    var Weight = parseInt(document.getElementById("Weight").value);

                    var BMR = Weight * 1 * 24;

                    if(document.getElementById("Selected").value == "1.2"){

                        var Activity_level_3 = 1.2;
                        /* Calories */
                        var Calories = Activity_level_3 * BMR;
                        var Calories_INBW = Calories + 500;
                        var Calories_FLoss = Calories - 500;
                        var Calories_EXFloss = Calories - 880;
                        document.getElementById("reuslt_IN").innerHTML = parseInt(Calories_INBW) + " calories";
                        document.getElementById("reuslt_M").innerHTML = parseInt(Calories) + " calories";
                        document.getElementById("reuslt_FL").innerHTML = parseInt(Calories_FLoss) + " calories";
                        document.getElementById("reuslt_EXFL").innerHTML = parseInt(Calories_EXFloss) + " calories";
                        /* Protein */
                        var Protein = Weight * Activity_level_3 * 1.6;
                        document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                        /* Fat */
                        Calories_fat = 0.25 * Calories;
                        Fat = Calories_fat / 9;
                        document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                        /* Carbohydrates */
                        var Fat_P_calories = (Protein * 4) + (Fat * 9);
                        Carbs_calories = Calories - Fat_P_calories;
                        Carbs = Carbs_calories / 4;
                        document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        if(document.getElementById("Selected-PCF").value == "Increasing-PCF"){

                            var Activity_level_3 = 1.2;
                            /* Calories */
                            var Calories = (Activity_level_3 * BMR);
                            var Calories_INBW = Calories + 500;
                            /* Protein */
                            var Protein = (Weight * Activity_level_3 * 1.6) + 20;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_INBW;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            var Carbs_calories = Calories_INBW - Fat_P_calories;
                            var Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G"; 

                        }


                        if(document.getElementById("Selected-PCF").value == "Maintenace-PCF"){

                            var Activity_level_3 = 1.2;
                            /* Calories */
                            var Calories = (Activity_level_3 * BMR);

                            /* Protein */
                            var Protein = (Weight * Activity_level_3 * 1.6) - 5;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories =  Calories - Fat_P_calories;
                            Carbs = Carbs_calories / 4 ;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "Loss-PCF"){

                            var Activity_level_3 = 1.2;
                            /* Calories */
                            var Calories = (Activity_level_3 * BMR);
                            var Calories_FLoss = Calories - 500;


                            /* Protein */
                            var Protein = (Weight * Activity_level_3 * 1.6) - 12;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_FLoss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_FLoss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "ExLoss-PCF"){
                            var Activity_level_3 = 1.2;
                            /* Calories */
                            var Calories = (Activity_level_3 * BMR);
                            var Calories_EXFloss = Calories - 880;
                            /* Protein */
                            var Protein = (Weight * Activity_level_3 * 1.6) - 14;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_EXFloss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_EXFloss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";


                        }
                    }

                    if(document.getElementById("Selected").value == "1.35"){

                        var Activity_level_4 = 1.35;
                        /* Calories */
                        var Calories = Activity_level_4 * BMR;
                        var Calories_INBW = Calories + 500;
                        var Calories_FLoss = Calories - 500;
                        var Calories_EXFloss = Calories - 880;
                        document.getElementById("reuslt_IN").innerHTML = parseInt(Calories_INBW) + " calories";
                        document.getElementById("reuslt_M").innerHTML = parseInt(Calories) + " calories";
                        document.getElementById("reuslt_FL").innerHTML = parseInt(Calories_FLoss) + " calories";
                        document.getElementById("reuslt_EXFL").innerHTML = parseInt(Calories_EXFloss) + " calories";
                        /* Protein */
                        var Protein = Weight * Activity_level_4 * 1.6;
                        document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                        /* Fat */
                        Calories_fat = 0.25 * Calories;
                        Fat = Calories_fat / 9;
                        document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                        /* Carbohydrates */
                        var Fat_P_calories = (Protein * 4) + (Fat * 9);
                        Carbs_calories = Calories - Fat_P_calories;
                        Carbs = Carbs_calories / 4;
                        document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        if(document.getElementById("Selected-PCF").value == "Increasing-PCF"){

                            var Activity_level_4 = 1.35;
                            /* Calories */
                            var Calories = (Activity_level_4 * BMR);
                            var Calories_INBW = Calories + 500;
                            /* Protein */
                            var Protein = (Weight * Activity_level_4 * 1.6) + 20;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_INBW;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            var Carbs_calories = Calories_INBW - Fat_P_calories;
                            var Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G"; 

                        }


                        if(document.getElementById("Selected-PCF").value == "Maintenace-PCF"){

                            var Activity_level_4 = 1.35;
                            /* Calories */
                            var Calories = (Activity_level_4 * BMR);

                            /* Protein */
                            var Protein = (Weight * Activity_level_4 * 1.6) - 5;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories =  Calories - Fat_P_calories;
                            Carbs = Carbs_calories / 4 ;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "Loss-PCF"){

                            var Activity_level_4 = 1.35;
                            /* Calories */
                            var Calories = (Activity_level_4 * BMR);
                            var Calories_FLoss = Calories - 500;


                            /* Protein */
                            var Protein = (Weight * Activity_level_4 * 1.6) - 12;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_FLoss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_FLoss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "ExLoss-PCF"){
                            var Activity_level_4 = 1.35;
                            /* Calories */
                            var Calories = (Activity_level_4 * BMR);
                            var Calories_EXFloss = Calories - 880;
                            /* Protein */
                            var Protein = (Weight * Activity_level_4 * 1.6) - 14;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_EXFloss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_EXFloss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";


                        }
                    }

                    if(document.getElementById("Selected").value == "1.5"){

                        var Activity_level_5 = 1.5;
                        /* Calories */
                        var Calories = Activity_level_5 * BMR;
                        var Calories_INBW = Calories + 500;
                        var Calories_FLoss = Calories - 500;
                        var Calories_EXFloss = Calories - 880;
                        document.getElementById("reuslt_IN").innerHTML = parseInt(Calories_INBW) + " calories";
                        document.getElementById("reuslt_M").innerHTML = parseInt(Calories) + " calories";
                        document.getElementById("reuslt_FL").innerHTML = parseInt(Calories_FLoss) + " calories";
                        document.getElementById("reuslt_EXFL").innerHTML = parseInt(Calories_EXFloss) + " calories";
                        /* Protein */
                        var Protein = Weight * Activity_level_5 * 1.6;
                        document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                        /* Fat */
                        Calories_fat = 0.25 * Calories;
                        Fat = Calories_fat / 9;
                        document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                        /* Carbohydrates */
                        var Fat_P_calories = (Protein * 4) + (Fat * 9);
                        Carbs_calories = Calories - Fat_P_calories;
                        Carbs = Carbs_calories / 4;
                        document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        if(document.getElementById("Selected-PCF").value == "Increasing-PCF"){

                            var Activity_level_5 = 1.5;
                            /* Calories */
                            var Calories = (Activity_level_5 * BMR);
                            var Calories_INBW = Calories + 500;
                            /* Protein */
                            var Protein = (Weight * Activity_level_5 * 1.6) + 20;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_INBW;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            var Carbs_calories = Calories_INBW - Fat_P_calories;
                            var Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G"; 

                        }


                        if(document.getElementById("Selected-PCF").value == "Maintenace-PCF"){

                            var Activity_level_5 = 1.5;
                            /* Calories */
                            var Calories = (Activity_level_5 * BMR);

                            /* Protein */
                            var Protein = (Weight * Activity_level_5 * 1.6) - 5;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories =  Calories - Fat_P_calories;
                            Carbs = Carbs_calories / 4 ;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "Loss-PCF"){

                            var Activity_level_5 = 1.5;
                            /* Calories */
                            var Calories = (Activity_level_5 * BMR);
                            var Calories_FLoss = Calories - 500;


                            /* Protein */
                            var Protein = (Weight * Activity_level_5 * 1.6) - 12;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_FLoss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_FLoss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "ExLoss-PCF"){
                            var Activity_level_5 = 1.5;
                            /* Calories */
                            var Calories = (Activity_level_5 * BMR);
                            var Calories_EXFloss = Calories - 880;
                            /* Protein */
                            var Protein = (Weight * Activity_level_5 * 1.6) - 14;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_EXFloss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_EXFloss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";


                        }
                    }

                    if(document.getElementById("Selected").value == "1.65"){

                        var Activity_level_6 = 1.65;
                        /* Calories */
                        var Calories = Activity_level_6 * BMR;
                        var Calories_INBW = Calories + 500;
                        var Calories_FLoss = Calories - 500;
                        var Calories_EXFloss = Calories - 880;
                        document.getElementById("reuslt_IN").innerHTML = parseInt(Calories_INBW) + " calories";
                        document.getElementById("reuslt_M").innerHTML = parseInt(Calories) + " calories";
                        document.getElementById("reuslt_FL").innerHTML = parseInt(Calories_FLoss) + " calories";
                        document.getElementById("reuslt_EXFL").innerHTML = parseInt(Calories_EXFloss) + " calories";
                        /* Protein */
                        var Protein = Weight * Activity_level_6 * 1.6;
                        document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                        /* Fat */
                        Calories_fat = 0.25 * Calories;
                        Fat = Calories_fat / 9;
                        document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                        /* Carbohydrates */
                        var Fat_P_calories = (Protein * 4) + (Fat * 9);
                        Carbs_calories = Calories - Fat_P_calories;
                        Carbs = Carbs_calories / 4;
                        document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        if(document.getElementById("Selected-PCF").value == "Increasing-PCF"){

                            var Activity_level_6 = 1.65;
                            /* Calories */
                            var Calories = (Activity_level_6 * BMR);
                            var Calories_INBW = Calories + 500;
                            /* Protein */
                            var Protein = (Weight * Activity_level_6 * 1.60) + 20 ;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_INBW;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            var Carbs_calories = Calories_INBW - Fat_P_calories;
                            var Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G"; 

                        }


                        if(document.getElementById("Selected-PCF").value == "Maintenace-PCF"){

                            var Activity_level_6 = 1.65;
                            /* Calories */
                            var Calories = (Activity_level_6 * BMR);

                            /* Protein */
                            var Protein = (Weight * Activity_level_6 * 1.6) - 5;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories =  Calories - Fat_P_calories;
                            Carbs = Carbs_calories / 4 ;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "Loss-PCF"){

                            var Activity_level_6 = 1.65;
                            /* Calories */
                            var Calories = (Activity_level_6 * BMR);
                            var Calories_FLoss = Calories - 500;


                            /* Protein */
                            var Protein = (Weight * Activity_level_6 * 1.6) - 12;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_FLoss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_FLoss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";

                        }
                        if(document.getElementById("Selected-PCF").value == "ExLoss-PCF"){
                            var Activity_level_6 = 1.65;
                            /* Calories */
                            var Calories = (Activity_level_6 * BMR);
                            var Calories_EXFloss = Calories - 880;
                            /* Protein */
                            var Protein = (Weight * Activity_level_6 * 1.6) - 14;
                            document.getElementById("reuslt_P").innerHTML = parseInt(Protein) + "G";
                            /* Fat */
                            Calories_fat = 0.25 * Calories_EXFloss;
                            Fat = Calories_fat / 9;
                            document.getElementById("reuslt_Fat").innerHTML = parseInt(Fat) + "G";
                            /* Carbohydrates */
                            var Fat_P_calories = (Protein * 4) + (Fat * 9);
                            Carbs_calories = Calories_EXFloss - Fat_P_calories;
                            Carbs = Carbs_calories / 4;
                            document.getElementById("reuslt_C").innerHTML = parseInt(Carbs) + "G";


                        }
                    }  
                }

                            
            }
                
        </script>
        
    

<?php include "/xampp/htdocs/PHPinVSCode/Workout/footer.php"?>
