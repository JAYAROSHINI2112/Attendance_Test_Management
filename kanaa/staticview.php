<?php
require_once 'connect.php';
if ($_GET['noclass']) {
    $noclass = $_GET['noclass'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Attendance | Sheet</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width,initial scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Roboto", sans-serif;
            background: #000;
        }

        .chart {
            width: 600px;
            height: 300px;
            display: block;
        }
         .numbers {
            color: #fff;
            margin: 0;
            padding: 0;
            width: 50px;
            height: 100%;
            display: inline-block;
            float:left;
        }

        .numbers li {
            list-style: none;
            height: 150px;
            position: relative;
            bottom: 145px;
        }

        .numbers span {
            font-size: 12px;
            font-weight: 600;
            position: absolute;
            bottom: 0;
            right: 10px;
        }

        .bars {
            font-family: serif;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            background: #555;
            margin: 0;
            padding: 0;
            display: inline-block;
            width: 500px;
            height: 300px;
            box-shadow: 0 0 10px 0 #555;
            border-radius: 5px;
        }

        .bars li {
            display: table-cell;
            width: 100px;
            height: 300px;
            position: relative;
        }

        .bars span {
            width: 100%;
            position: absolute;
            bottom: -30px;
            text-align: center;
        }

        .bars .bar {
            display: block;
            background: #17C0EB;
            width: 50px;
            position: absolute;
            bottom: 0;
            margin-left: 25px;
            text-align: center;
            box-shadow: 0 0 10px 0 rgba(23, 192, 235, 0.5);
            transition: 0.5s;
            transition-property: background, box-shadow;
        }

        .bars .bar:hover {
            background: #55EFC4;
            box-shadow: 0 0 10px 0 rgba(85, 239, 196, 0.5);
            cursor: pointer;
        }

        .bars .bar:before {
            color: #fff;
            content: attr(data-percentage) '%';
            position: relative;
            bottom: 20px;
        }
        .print_details{
           color: #fff;
           font-size: 20px;
           font-weight: bolder;
        }
        .container{
            margin: 30px;
            position: absolute;
            top: 0;
            right: 0;
            height: 40px;
            width: 250px;
            font-family: serif;
        }
    </style>

</head>

<body>

    <tbody>
        <?php
        require_once 'connect.php';
         $sql = "SELECT * FROM attendancesheet WHERE noclass = {$noclass}";
         $t_present=0;$t_absent=0;
        $result = $connect->query($sql);
        $data = $result->fetch_assoc();

        if ($result->num_rows > 0) {
            foreach ($result as $data) {
                 if($data['value'] == 'present'){
                 $t_present=$t_present+1;

             }
             else{
                 $t_absent=$t_absent+1;
             }
            } 
           $total_strength = $t_present + $t_absent;
            $percentage_present = round(($t_present/ $total_strength) * 100);
            $percentage_absent = round(($t_absent / $total_strength) * 100);
            
        }else {
            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
        }
   
          $x= $t_present;
         $y= $t_absent;
        ?>
    </tbody>
    </table>
    </form>
    </div>
   


    <!--chart start-->
    <div class="chart">
        <ul class="numbers">
            <li><span>100%</span></li>
            <li><span>50%</span></li>
            <li><span>0%</span></li>
        </ul>
        <ul class="bars">
            <li>
                <div class="bar" data-percentage="100"></div><span>Total Strength</span>
            </li>
            <li>
                <div class="bar" data-percentage="<?php echo "$percentage_present"; ?>"></div><span>Total_Present</span>
            </li>
            <li>
                <div class="bar" data-percentage="<?php echo "$percentage_absent"; ?>"></div><span>Total_Absent</span>
            </li>

        </ul>
    </div>
    <!--chart end-->
    <div class="container">
    <div class="print_details">
      <?php  echo"Total Strenght - $total_strength";?> <br>
          <?php   echo"Total Present - $x"; ?><br>
            <?php echo"Total Absent - $y";  ?>
    </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('.bars li .bar').each(function(key, bar) {
                var percentage = $(this).data('percentage');
                $(this).animate({
                    'height': percentage + '%'
                }, 1000);
            });
        });
    </script>

</body>

</html>
</body>

</html>