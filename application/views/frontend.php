
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crew schedule</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="heading">
        <img src="../../assets/images/bg.jpg" alt="">
        <h1>Crew Management</h1>
    </section>

    <section class="container">
        <form class="crew-form" action="" method="post">
            <div class="flex">
                <div class="flex-child">
                    <label>date period</label>
                    <div class="input-box">
                        <label for="">from</label>
                        <input type="date">
                        <label for="" style="margin-left: 5px;">to</label>
                        <input type="date">
                    </div>
                </div>

                <div class="flex-child">
                    <label>base</label>
                    <div class="input-box" >
                        <select name="select" >
                            <option value="ISB" >ISB</option>
                            <option value="KHI">KHI</option>
                            <option value="LHR">LHR</option>
                        </select>
                    </div>
                </div>

                <div class="flex-child">
                    <label>aircraft</label>
                    <div class="input-box">
                        <select name="select">
                            <option value="76L">76L</option>
                            <option value="77W">77W</option>
                            <option value="78W">78W</option>
                        </select>
                    </div>
                </div>

                <div class="flex-child">
                    <label>position</label>
                    <div class="input-box">
                        <select name="select">
                            <option value="Air Hostress">Air Hostress</option>
                            <option value="Captain">Captain</option>
                            <option value="First Officer">First Officer</option>
                            <option value="Fly Engineer">Fly Engineer</option>
                        </select>
                    </div>
                </div>

                <div class="flex-child">
                    <button type="submit" name="">run</button>
                </div>
            </div>
        </form>
    </section>
    




    <script src="js/script.js"></script>
</body>
</html>
