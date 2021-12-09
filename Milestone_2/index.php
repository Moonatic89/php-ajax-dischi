<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'header.php'; ?>
    <style>
    <?php include "./assets/css/master.css";
    ?>
    </style>


</head>

<body>

    <header id="SiteHeader">
        <img src="./assets//img/logo.svg" alt="Spotify Logo">

    </header>

    <main id="SiteMain">

        <div class="container" id="app">

            <div class="row" v-for="disk in disks" :key="disk.poster">

                <div class="card">
                    <img :src="disk.poster" alt="">
                    <div class="title">
                        <?php echo strtoupper("$disk[title]") ?>
                    </div>
                    <div class="author">
                        <?php echo "$disk[author]" ?>
                    </div>
                    <div class="year">
                        <?php echo "$disk[year]" ?>
                    </div>
                </div>

            </div>
        </div>

    </main>



    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js'
        integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>


    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>


    <script src="./assets/js/app.js"></script>

</body>

</html>