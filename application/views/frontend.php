
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crew filter</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="heading">
        <img src="<?php echo base_url()?>assets/images/bg.jpg" alt="">
        <h1>Crew Management</h1>
    </section>

    <section class="container">
        <form class="crew-form" action="<?php echo base_url('Auth/filter') ?>" method="post">
            <div class="flex">
                <div class="flex-child">
                    <label>date period</label>
                    <div class="input-box">
                        <label for="">from</label>
                        <input type="date" name="dateOne" > 
                        <label for="" style="margin-left: 5px;">to</label>
                        <input type="date" name="dateTwo" >
                    </div>
                </div>

                <div class="flex-child">
                    <label>base</label>
                    <div class="input-box" >
                        <select name="selectOne">
                            <option value="" selected disabled hidden>chose base</option>
                            <option value="ISB" <?php echo isset($selectone) && $selectone == 'ISB' ? 'selected' : ''; ?>>ISB</option>
                            <option value="LHR" <?php echo isset($selectone) && $selectone == 'LHR' ? 'selected' : ''; ?>>LHR</option>
                            <option value="KHI" <?php echo isset($selectone) && $selectone == 'KHI' ? 'selected' : ''; ?>>KHI</option>
                        </select>
                    </div>
                </div>

                <div class="flex-child">
                    <label>aircraft</label>
                    <div class="input-box">
                        <select name="selectTwo">
                            <option value="" selected disabled hidden>chose aircraft</option>
                            <option value="76L" <?php echo isset($selectTwo) && $selectTwo == '76L' ? 'selected' : ''; ?>>76L</option>
                            <option value="77W" <?php echo isset($selectTwo) && $selectTwo == '77W' ? 'selected' : ''; ?>>77W</option>
                            <option value="78W" <?php echo isset($selectTwo) && $selectTwo == '78W' ? 'selected' : ''; ?>>78W</option>
                        </select>
                    </div>
                </div>

                <div class="flex-child">
                    <label>position</label>
                    <div class="input-box">
                        <select name="selectThree">
                            <option value="" selected disabled hidden>chose position</option>
                            <option value="Air Hostress" <?php echo isset($selectThree) && $selectThree == 'Air Hostress' ? 'selected' : ''; ?>>Air Hostress</option>
                            <option value="Captain" <?php echo isset($selectThree) && $selectThree == 'Captain' ? 'selected' : ''; ?>>Captain</option>
                            <option value="First Officer" <?php echo isset($selectThree) && $selectThree == 'First Officer' ? 'selected' : ''; ?>>First Officer</option>
                            <option value="Fly Engineer" <?php echo isset($selectThree) && $selectThree == 'Fly Engineer' ? 'selected' : ''; ?>>Fly Engineer</option>
                        </select>
                    </div>
                </div>

                <div class="flex-child">
                    <button type="submit" name="submit">run</button>
                </div>
            </div>
        </form>
    </section>
    
</body>
</html>
