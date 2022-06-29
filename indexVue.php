<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Discoboli</title>
</head>
<body>
    <div id="app">
        <header>
        </header>
        <main>
            <div class="container">
                <div class="card"v-for="(item,i) in allAlbums" :key="i">
                    <img :src="item.poster" :alt="item.title">
                    <h3>{{item.title}}</h3>
                    <span>{{item.author}}</span>
                    <span>{{item.year}}</span>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

</body>
</html>