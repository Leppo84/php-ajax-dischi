new Vue ({
    el: '#app',
    data:{
        allAlbums: [],
    },

    created(){
        axios.get('http://localhost/php-ajax-dischi/api.php')
        .then(response => this.allAlbums = response.data);
    }
})