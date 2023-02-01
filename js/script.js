const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './server.php',
            list: []
        }
    },
    mounted() {
        /* Richiesta GET a server.php */
        axios.get(this.apiUrl).then((result) => {
            this.list = result.data;
        })
    },
}).mount('#app');