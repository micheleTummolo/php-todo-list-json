const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './server.php',
            list: [],
            text: '',
        }
    },
    methods: {
        add() {
            const data = {
                item: this.text
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.text = '';

                this.list = response.data;
            })
        }
    },

    mounted() {
        /* Richiesta GET a server.php */
        axios.get(this.apiUrl).then((result) => {
            this.list = result.data;
        })
    },
}).mount('#app');