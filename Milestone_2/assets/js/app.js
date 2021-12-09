const app = new Vue({

    el: "#app",
    data: {
        disks: null,
    },
    mounted() {
        axios
            .get("/api/disks.php")
            .then(r => {
                this.disks = r.data
            }).catch(e => {
                console.log(e);
            })
    }

})