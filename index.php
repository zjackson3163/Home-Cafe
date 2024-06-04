    <?php include("view/head.php") ?>
        <title>Home Café || Home</title>
    </head>

    <body class = "main">
        <div>
            <header>
                <?php include("view/navbar.php")?>
            </header>
            
            <div>
                <img src = "images/Untitled design (1).png" alt = "Home Cafe Banner" class= banner> 
            </div>
            
            <p>Welcome to "Home Café" - where you can transform your home into a cozy café retreat. With the convenience of not having to go out, you can save money by making your favorite drinks and treats at home. Enjoy the comfort of personalized recipes, from classic lattes to trendy dalgona coffee, all while getting creative with your own café-style decor. Explore our links for decor ideas, helpful kitchen equipment, and delicious recipes!<!--, and join our community to share your creations.--> Brew, bake, and savor the experience - your perfect café is just a few steps away! </p>
            
            <section>
                <a href = "Drinks.php" class = "column"><img src = "images/Drinks.png" alt = "Picture of coffee pouring, click to go to drink page" ></a>
                <a href = "Pastries.php" class = "column"><img src = "images/Pastries.png" alt = "Assortment of pastries, click to go to pastries page" ></a>
                <a href = "Cakes.php" class = "column"><img src = "images/Cakes.png" alt = "Two cakes, click to go to cakes page" ></a>
                <a href = "Breads.php" class = "column"><img src = "images/Bread.png" alt = "Assortment of breads, click to go to breads page" ></a>
                <a href = "Breakfasts.php" class = "column"><img src = "images/Breakfasts.png" alt = "Pretty breakfast, click to go to breakfasts page" ></a>
                <a href = "Lunches.php" class = "column"><img src = "images/Lunch.png" alt = "Lunch on a table, click to go to lunches page" ></a>
            </section>

            <?php include("view/footer.php")?>

        </div>
    </body>
</html>