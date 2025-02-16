<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Cities in the World</title>
    <style>
        body {
            background-image: url('mundo.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
            background-attachment: fixed; 
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; 
            align-items: flex-start; 
            height: 100vh;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        .list-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            width: 100%;
        }

        .list-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            color: #d35400;
            text-align: center;
            width: 100%;
        }

        h2 {
            color: #2980b9;
            margin-top: 10px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="wrapper">
        <h1>LARGEST CITIES IN THE WORLD</h1> 

        <?php
            $cities = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
            
            $originalList = implode(", ", $cities) . ".";

            function sortingCities(&$array){
                $length = count ($array);
                for ($i = 0; $i < $length - 1; $i++){
                    for ($j = 0; $j < $length - $i -1; $j++){
                        if ($array[$j] > $array[$j+1]){
                            $temp = $array[$j];
                            $array[$j] = $array[$j+1];
                            $array[$j + 1] = $temp;
                        }
                    }
                }
            }

            $sortedCities = $cities;
            sortingCities($sortedCities);

            $sortedCities[] = "Los Angeles";
            $sortedCities[] = "Calcutta";
            $sortedCities[] = "Osaka";
            $sortedCities[] = "Beijing";
            sortingCities($sortedCities);
        ?>

        <div class="container">  
            <h2>Original List of Cities</h2>
            <p><?php echo $originalList; ?></p>
        </div>  

        <div class="list-container">
            <div class="list-box">    
                <h2>Sorted Cities</h2>
                    <?php 
                        for ($i = 0; $i < count($cities); $i++) {
                        echo $cities[$i] . "<br>";
                    } ?>
            </div>  

            <div class="list-box">  
                <h2>Unordered List of Cities</h2>
                    <?php 
                        for ($i = 0; $i < count($sortedCities); $i++) {
                        echo $sortedCities[$i] . "<br>";
                    } ?>
            </div>
        </div>
    </div>
</body>
</html>